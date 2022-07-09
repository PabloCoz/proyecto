<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\CoursesStatus;
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

Route::get('/', HomeController::class)->name('welcome');

Route::resource('/courses', CourseController::class)->names('courses');

Route::post('courses/{course}/enrolled',[CourseController::class, 'enrolled'])->middleware('auth')->name('courses.enrolled');

Route::get('courses-status/{course}', CoursesStatus::class)->name('courses.status')->middleware('auth');