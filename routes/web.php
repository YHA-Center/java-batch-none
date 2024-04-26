<?php

use Illuminate\Support\Facades\Route;
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
// update
// 1. show
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
// 2. update
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

// name('category.home') > {{ route('category.home') }}
// Route::get('category', ....) > {{ url('category') }}

// Route::delete('') -> <form method="POST"> @csrf @method("DELETE") </form>
// Route::get('') -> <a></a>
