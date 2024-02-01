<?php

use App\Http\Controllers\Web\Admin\AuthController;
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
    Route::get('/login', 'login')->name("login");

    Route::post('/login', 'processLogin')->name("login");
});

Route::get('/{pages}', [MainController::class, 'show_page'])->name("show_page");
