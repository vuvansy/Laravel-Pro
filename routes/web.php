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

//Định tuyến cơ bản
// domain.com/post 

Route::get('/post', function () {
    return "Đây là trang bài viết";
});

//Đường dẫn dành riêng cho Admin
Route::get('/admin/product', function () {
    return "Trang quản lý sản phẩm";
});

//Đường dẫn dành riêng cho Admin thêm sản phẩm
Route::get('/admin/product/add', function () {
    return "Trang thêm mới sản phẩm";
});
