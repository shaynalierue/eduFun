<?php

use Illuminate\Support\Facades\Route;

//Import Controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\ArticleController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');

Route::get('/writers', [WriterController::class, 'index'])->name('writers.index');
Route::get('/writers/{id}', [WriterController::class, 'show'])->name('writers.show');



Route::get('/about', [AboutController::class, 'index'])->name('about');



Route::get('/popular', [PopularController::class, 'index'])->name('popular.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.show');




