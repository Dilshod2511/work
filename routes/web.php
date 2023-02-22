<?php

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

Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login',[\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login');
Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register',[\App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register',[\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');


Route::group(['prefix'=>'/admin-panel','middleware'=>['auth']],function () {
    Route::get('/', function () {
        return view('admin.home.index');
    })->name('main');
Route::resource('/country',App\Http\Controllers\Admin\CountryController::class);
Route::resource('/job',App\Http\Controllers\Admin\JobController::class);
});

