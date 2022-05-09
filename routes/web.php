<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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
    return view('splashscreen');
})->middleware('guest');
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix'=>'/admin','middleware'=>['role:Admin']], function () {
        Route::get('/Dashboard', function(){
            return view('Admin.dashboard');
        });
        Route::get('/News', function () {
            return view('Admin.latest_news');
        });
        Route::get('/Roles', function () {
            return view('Admin.roles');
        });

        Route::get('/Courses', function () {
            return view('Admin.courses');
        });
    });
    Route::group(['middlware' => ['role:User']], function (){
        Route::get('/home', function () {
            return view('User.index');
        });

        Route::get('/Dashboard', function () {
            return view('User.dashboard');
        });

        Route::get('/Latest-News', function () {
            return view('User.latest_news');
        });

        Route::get('/Practices', function () {
            return view('User.practices');
        });

        Route::get('/Roles', function () {
            return view('User.roles');
        });

        Route::get('/Courses', function () {
            return view('User.courses');
        });

        Route::get('/Chat', function () {
            return view('User.chat');
        });
    });
});



Auth::routes();
