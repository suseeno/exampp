<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\TestController::class, 'index'])->name('index');
Route::get('/create', [App\Http\Controllers\TestController::class, 'create'])->name('create');
Route::get('/edit', [App\Http\Controllers\TestController::class, 'edit'])->name('edit');



// route::resource('index',SettingController::class);
// route::resource('/create',SettingController::class);
