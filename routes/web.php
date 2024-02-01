<?php

use App\Http\Controllers\Web\Admin\AuthController;
use App\Http\Controllers\Web\Admin\DashboardController;
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
Route::controller(DashboardController::class)->middleware('auth')->name('dashboard.')->group(function () {
    Route::get('/dashboard', 'index')->name("index");
});

Route::get('/{pages}', [MainController::class, 'show_page'])->name("show_page");
