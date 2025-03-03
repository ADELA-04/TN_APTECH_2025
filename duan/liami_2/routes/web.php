<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/managers', [ManagerController::class, 'index'])->name('managers.index'); // Đường dẫn đến view admin
Route::get('/home', [HomeController::class, 'index'])->name('home.index'); // Đường dẫn đến view staff


Route::get('/managers/m_user/add_user', function () {
    return view('managers/m_user/add_user');
})->name('managers.m_user.add_user');

Route::get('/managers/m_user/update_user', function () {
    return view('managers/m_user/update_user');
})->name('managers.m_user.update_user');

Route::get('/managers/m_user/delete_user', function () {
    return view('managers/m_user/delete_user');
})->name('managers.m_user.delete_user2');


// Route manager user
Route::get('/managers/m_user/manager_user', [UserController::class, 'index'])->name('managers.m_user.manager_user');
// Route để thêm người dùng
Route::get('/managers/m_user/add_user', [UserController::class, 'create'])->name('managers.m_user.add_user');
Route::post('/managers/m_user/manager_user', [UserController::class, 'store'])->name('managers.m_user.store_user');
// Route để sửa người dùng
Route::get('/managers/m_user/users/{UserID}/edit', [UserController::class, 'edit'])->name('managers.m_user.edit_user');
Route::put( '/managers/m_user/users/{UserID}',    [UserController::class, 'update'])->name('managers.m_user.update_user_action');
Route::delete(  '/managers/m_user/delete_user/{UserID}',[UserController::class, 'destroy'])->name('managers.m_user.delete_user');
//blog
Route::get('/managers/m_blog/manager_blog', [BlogPostController::class, 'index'])->name('managers.m_blog.manager_blog');
Route::get('/blog/create', [BlogPostController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogPostController::class, 'store'])->name('blog.store');
// Route to edit a blog post
Route::get('/managers/m_blog/blogs/{PostID}/edit', [BlogPostController::class, 'edit'])->name('managers.m_blog.edit_blog');
Route::put('/managers/m_blog/blogs/{PostID}', [BlogPostController::class, 'update'])->name('managers.m_blog.update_blog_action');
Route::delete('/managers/m_blog/delete_blog/{PostID}', [BlogPostController::class, 'destroy'])->name('managers.m_blog.delete_blog');


//category
Route::get('/managers/m_category/manager_category', [CategoryController::class, 'index'])->name('managers.m_category.manager_category');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/managers/m_category/store', [CategoryController::class, 'store'])->name('managers.m_category.store');
Route::get('category/{CategoryID}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('category/{CategoryID}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

//product
Route::get('/managers/m_product/manager_product', [ProductController::class, 'index'])->name('managers.m_product.manager_product');

// Route để xóa người dùng

Route::get('/', function () {
    return view('managers.m_user.login');
});

Route::get('/cart', function () {
    return view('managers.Inven');
})->name('cart');
// Route::get('/cart', function () {
//     return view('products.reviews_custom');
// })->name('cart');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/products/products_detail', function () {
    return view('products.products_detail');
})->name('products.detail');
Route::get('/products/product_list', function () {
    return view('products.product_list');
})->name('products.product_list');
Route::get('/acounts/login', function () {
    return view('acounts.login');
})->name('acounts.login');

Route::get('/acounts/forgot_password', function () {
    return view('acounts.forgot_password');
})->name('acounts.forgot_password');

Route::get('/acounts/sign_up', function () {
    return view('acounts.sign_up');
})->name('acounts.sign_up');
Route::get('/admin', function () {
    return view('managers.manager');
})->name('managers.manager');
Route::get('/template_admin', function () {
    return view('layouts/admin_master');
})->name('layouts.admin_master');

// Route::get('/managers/m_product/manager_product', function () {
//     return view('managers/m_product/manager_product');
// })->name('managers.m_product.manager_product');

Route::get('/managers/m_product/add_product', function () {
    return view('managers/m_product/add_product');
})->name('managers.m_product.add_product');

Route::get('/managers/m_product/update_product', function () {
    return view('managers/m_product/update_product');
})->name('managers.m_product.update_product');


// Route::get('/managers/m_category/manager_category', function () {
//     return view('managers/m_category/manager_category');
// })->name('managers.m_category.manager_category');

Route::get('/managers/m_category/add_category', function () {
    return view('managers/m_category/add_category');
})->name('managers.m_category.add_category');

Route::get('/managers/m_category/update_category', function () {
    return view('managers/m_category/update_category');
})->name('managers.m_category.update_category');


// Route::get('/managers/m_blog/manager_blog', function () {
//     return view('managers/m_blog/manager_blog');
// })->name('managers.m_blog.manager_blog');

Route::get('/managers/m_blog/add_blog', function () {
    return view('managers/m_blog/add_blog');
})->name('managers.m_blog.add_blog');

Route::get('/managers/m_blog/update_blog', function () {
    return view('managers/m_blog/update_blog');
})->name('managers.m_blog.update_blog');


// Route::get('/managers/m_user/manager_user', function () {
//     return view('managers/m_user/manager_user');
// })->name('managers.m_user.manager_user');

