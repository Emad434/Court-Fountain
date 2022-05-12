<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\NewsController;
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
        Route::get('Users', function(){
            return view('Admin.users');
        });
        Route::get('/Dashboard', function(){
            return view('Admin.dashboard');
        });
        Route::group(['prefix' => '/News'],function() {
            Route::get('/',[NewsController::class, 'index'])->name('news');
            Route::get('/editor',function(){return view('Admin.News.editor');})->name('news.editor');
            Route::post('store',[NewsController::class, 'store'])->name('news.store');
            Route::get('/view/{id}',[NewsController::class, 'view'])->name('news.view');
            Route::get('/editor/{id}',[NewsController::class, 'edit'])->name('news.edit');
            Route::post('/update',[NewsController::class, 'update'])->name('news.update');
            Route::get('/delete/{id}',[NewsController::class, 'delete'])->name('news.delete');
        });
        Route::get('/Roles', function () {
            return view('Admin.roles');
        });
        Route::group(['prefix'=>'Courses'], function(){
            Route::get('/',[CourseController::class, 'index'])->name('courses');
            Route::get('/create',[CourseController::class, 'create'])->name('courses.create');
            Route::post('/store',[CourseController::class, 'store'])->name('course.store');
            Route::get('/edit/{id}',[CourseController::class, 'edit'])->name('course.edit');
            Route::post('/update',[CourseController::class, 'update'])->name('course.update');
            Route::get('/delete/{id}',[CourseController::class, 'delete'])->name('course.delete');
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
