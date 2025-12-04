<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;

Route::get('/pikii', function () {
    return view('welcome');
});

Route::get('posts',
[PostController::class, 'index']); 

Route::get('posts/create',
[PostController::class, 'create']);

Route::get('categories',
[CategoryController::class, 'index']); 

Route::get('home',
[HomeController::class, 'index']);

Route::get('about',
[AboutController::class, 'index']);  

// Route untuk memanggil method di PostController
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');