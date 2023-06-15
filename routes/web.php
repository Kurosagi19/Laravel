<?php

use App\Models\demoController;
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

// Method get(): áp dụng với phần hiển thị ra các view
// Method post(): áp dụng với việc thêm dữ liệu vào database
// Method put(): sửa dữ liệu trên database
// Method delete(): xoá dữ liệu trên database
// Route::get('/', function () {
//     return view('welcome');
// });

// Tạo 1 URL, khi vào URL này sẽ gọi đến function login trong class demoController
Route::get('/login', [\App\Http\Controllers\demoController::class, 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\demoController::class, 'register'])->name('register');

// Route read (lấy dữ liệu từ database)
ROute::get('/brand', [\App\Http\Controllers\BrandController::class, 'index'])->name('index');
