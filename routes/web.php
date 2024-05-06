<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect()->route('category.home');
});

Route::get('/admin', function() {
    return view('layouts.backend');
});

# Category Controller session
Route::get('/category', [CategoryController::class, 'index'])->name('category.home');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/delete/{id}', [CategoryController::class, 'destory'])->name('category.delete');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

// post
Route::get('/post', [PostController::class, 'index'])->name('post.list');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
Route::get('/post/destroy/{id}', [PostController::class, 'destroy'])->name('post.delete');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post/update/{id}', [PostController::class, 'update'])->name('post.update');
Route::get('/post/get/{id}', [PostController::class, 'get'])->name('post.get');

// name('category.home') > {{ route('category.home') }}
// Route::get('category', ....) > {{ url('category') }}

// Route::delete('') -> <form method="POST"> @csrf @method("DELETE") </form>
// Route::get('') -> <a></a>
