<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/user')->group(function(){
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('user.index');
});

Route::prefix('/admin')->group(function(){
   Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
});

Route::prefix('/field')->group(function(){
   Route::get('/', [\App\Http\Controllers\FieldController::class, 'index'])->name('field.index');
});
