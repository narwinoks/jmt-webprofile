<?php

use App\Http\Controllers\Web\Admin\AuthController;
use App\Http\Controllers\Web\Admin\ContactUsController;
use App\Http\Controllers\Web\Admin\ContentController;
use App\Http\Controllers\Web\Admin\ContentCtrl;
use App\Http\Controllers\Web\Admin\DashboardController;
use App\Http\Controllers\Web\Admin\DataController;
use App\Http\Controllers\Web\Admin\InsightController;
use App\Http\Controllers\Web\Admin\MenuController;
use App\Http\Controllers\Web\Admin\PartnerController;
use App\Http\Controllers\Web\Admin\ProductController;
use App\Http\Controllers\Web\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.public.index');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name("login")->middleware('guest');

    Route::post('/login', 'authenticate')->name("authenticate")->middleware('guest');
    Route::delete('/logout', 'logout')->name("logout")->middleware('auth');
});
Route::prefix('admin/')->name('admin.')->group(function () {
    Route::controller(DashboardController::class)->middleware('auth')->name('dashboard.')->group(function () {
        Route::get('/dashboard', 'index')->name("index");
    });
    Route::controller(MenuController::class)->middleware('auth')->prefix('menu/')->name('menu.')->group(function () {
        Route::get('/', 'index')->name("index");
        Route::get('create', 'create')->name("create");
        Route::get('/edit', 'edit')->name("edit");

        Route::post('/', 'store')->name("store");
        Route::delete('/', 'destroy')->name("destroy");
    });
    Route::controller(InsightController::class)->middleware('auth')->prefix('insight/')->name('insight.')->group(function () {
        Route::get('/', 'index')->name("index");
        Route::get('create', 'create')->name("create");
        Route::get('/edit/{id}', 'edit')->name("edit");
    });
    Route::controller(ContactUsController::class)->middleware('auth')->prefix('contact/')->name('contact.')->group(function () {
        Route::get('/', 'index')->name("index");
        Route::get('create', 'create')->name("create");
        Route::get('/edit', 'edit')->name("edit");
    });
    Route::controller(ProductController::class)->middleware('auth')->prefix('products/')->name('products.')->group(function () {
        Route::get('/', 'index')->name("index");
        Route::get('create', 'create')->name("create");
        Route::get('/edit', 'edit')->name("edit");
    });
    Route::controller(PartnerController::class)->middleware('auth')->prefix('partner/')->name('partner.')->group(function () {
        Route::get('/', 'index')->name("index");
        Route::get('create', 'create')->name("create");
        Route::get('/edit', 'edit')->name("edit");
    });
    Route::controller(ContentCtrl::class)->middleware('auth')->prefix('contents/')->name('contents.')->group(function () {
        Route::get('/', 'index')->name("index");
        Route::get('create', 'create')->name("create");
        Route::get('/edit/{id}', 'edit')->name("edit");
    });
    Route::controller(ContentController::class)->middleware('auth')->prefix('content/')->name('content.')->group(function () {
        Route::get('/images', 'images')->name('images');
        Route::get('/show-gallery', 'showGallery')->name('showGallery');

        Route::post('/', 'store')->name("store");
        Route::post('/upload-image', 'uploadImage')->name("uploadImage");
        Route::post('/set-thumbnail', 'setThumbnail')->name("setThumbnail");
        Route::post('/update', 'update')->name("update");
        Route::delete('/', 'destroy')->name("destroy");
        Route::delete('/delete-image', 'deleteImage')->name("deleteImage");
    });
    Route::controller(DataController::class)->middleware('auth')->prefix('data/')->name('data.')->group(function () {
        Route::get('/menu', 'menu')->name("menu");
        Route::get('/content', 'content')->name("content");
    });
});

Route::get('/{pages}', [MainController::class, 'show_page'])->name("show_page");
