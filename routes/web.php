<?php

use App\Http\Controllers\AddcourseController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrolController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MycourseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ViewCourseController;
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

Route::get('dashboard', function () {
    return view('pages.dashboard');
});

Route::get('addcourse',[AddcourseController::class,'index'])->name('addcourse');
Route::post('addcourse',[AddcourseController::class,'store']);


Route::get('/',[AppController::class,'index'])->name('all');

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'store']);

Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('register',[RegisterController::class,'store']);

// Route::get('home',[HomeController::class,'index'])->name('home');


Route::get('course/enrol',[EnrolController::class,'index'])->name('enrol');
Route::post('enrol/{id}',[EnrolController::class,'store'])->name('enrolled');


Route::get('mycourses',[MycourseController::class,'index'])->name('mycourses');
Route::get('mycourses/filter-courses',[MycourseController::class,'filterByCourseTitle'])->name('filter');



Route::get('/home',[CourseController::class,'index'])->name('home');
Route::post('course',[CourseController::class,'store']);

Route::get('course',[CourseController::class,'search'])->name('search');

Route::get('logout',[LogoutController::class,'logout'])->name('logout');

Route::get('view/{id}',[CourseController::class,'viewCourse'])->name('view.course');

