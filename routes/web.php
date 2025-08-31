<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('index');
})->name('index');



Route::get('/dashboard', [UserController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth','admin'])->group(function () {
Route::get('/addCategory', [AdminController::class, 'addCategory'])->name('admin.addCategory');
Route::post('/addCategory', [AdminController::class, 'postaddCategory'])->name('admin.postaddCategory');
Route::get('/viewCategory', [AdminController::class, 'viewCategory'])->name('admin.viewCategory');
Route::get('/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
Route::get('/editCategory/{id}', [AdminController::class, 'editCategory'])->name('admin.editCategory');
Route::post('/editCategory/{id}', [AdminController::class, 'updateCategory'])->name('admin.updateCategory');
Route::get('/addProduct', [AdminController::class, 'addProduct'])->name('admin.addProduct');
Route::post('/addProduct', [AdminController::class, 'postaddProduct'])->name('admin.postaddProduct');
});

require __DIR__.'/auth.php';
