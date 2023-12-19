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

//=== 5.1 Định tuyến cơ bản ===
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


//=== 5.2 Định nghĩa route có tham số (vd: id...) ===

Route::get('posts/{id}', function ($id) {
    return $id;
});


// VD: về route có tham số đối với phân trang bài viết
Route::get('posts/{cat_id}/page/{page}', function ($cat_id, $page) {
    return $cat_id . '-' . $page;
});
