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

Route::get('/', function () {
    return view('Admin.splashscreen');
});

Route::get('/Dashboard', function () {
    return view('Admin.dashboard');
});

Route::get('/Latest-News', function () {
    return view('Admin.latest_news');
});

Route::get('/Practices', function () {
    return view('Admin.practices');
});

Route::get('/Roles', function () {
    return view('Admin.roles');
});

Route::get('/Courses', function () {
    return view('Admin.courses');
});

Route::get('/Chat', function () {
    return view('Admin.chat');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
