<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Dashboard\SuperCourseController;
use App\Http\Controllers\Dashboard\SuperArticleController;
use App\Http\Controllers\Dashboard\SuperSpeakerController;
use App\Http\Controllers\Dashboard\SuperCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Guest
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/kelas', function () {
//     return view('courses');
// });
// Route::get('/artikel', function () {
//     return view('articles');
// });

Route::get('/', [HomeController::class, 'index'])->name('login');
Route::get('/kelas', [CourseController::class, 'guest_index']);
Route::get('/artikel', [ArticleController::class, 'index']);
Route::get('/artikel/{article:slug}', [ArticleController::class, 'show']);


Route::post('/login', [UserAuthController::class, 'authenticate']);
Route::post('/register', [UserAuthController::class, 'registration']);
Route::post('/logout', [UserAuthController::class, 'logout']);
// Guest

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index',[
        "title" => "Dashboard"
    ]);
})->middleware('auth');
// super
Route::resource('/dashboard/super/courses', SuperCourseController::class)->middleware('auth');
Route::resource('/dashboard/super/article', SuperArticleController::class)->middleware('auth');
Route::resource('/dashboard/super/speaker', SuperSpeakerController::class)->middleware('auth');
Route::resource('/dashboard/super/category', SuperCategoryController::class)->middleware('auth');

// super

// participant
Route::get('/dashboard/participant/courses', [CourseController::class, 'auth_index'])->middleware('auth');;
Route::get('/dashboard/participant/courses/{course}', [CourseController::class, 'show'])->middleware('auth');;
// participant
// Dashboard