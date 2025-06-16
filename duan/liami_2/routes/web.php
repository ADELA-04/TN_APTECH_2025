<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\OrderController;


//Route::get('/address/add', [AddressController::class, 'create'])->name('address.add');


//order
Route::get('/orderslist', [OrderController::class, 'index2'])->name('orders.index2');
Route::get('/orders-detail/{id}', [OrderController::class, 'index_detail'])->name('orders.detail');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/checkout-pay', [OrderController::class, 'store'])->name('checkout.store');
Route::get('/orders/{id}', [OrderController::class, 'edit'])->name('order.edit');
Route::post('/orders/{id}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
// cart
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

//setting
Route::get('/settings/edit', [SettingController::class, 'edit'])->name('settings.edit');
Route::put('/settings/update', [SettingController::class, 'update'])->name('settings.update');
Route::get('/profile/change-password', [UserController::class, 'showChangePasswordForm'])->name('profile.changePassword');
Route::post('/profile/change-password', [UserController::class, 'changePassword'])->name('profile.changePassword.submit');
//banner
Route::get('/managers/settings/settings_banner', [BannerController::class, 'index'])->name('managers.settings_banner');
Route::get('/settings/create', [BannerController::class, 'create'])->name('settings_banner.create');
Route::post('/settings', [BannerController::class, 'store'])->name('settings_banner.store');
Route::get('/settings/{id}/edit', [BannerController::class, 'edit'])->name('settings_banner.edit');
Route::put('/settings/{id}', [BannerController::class, 'update'])->name('settings_banner.update');
Route::delete('settings/{id}', [BannerController::class, 'destroy'])->name('settings_banner.destroy');

//regiter

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/verification', [AuthController::class, 'showVerificationForm'])->name('verification.form');
Route::post('/verification', [AuthController::class, 'verifyCode'])->name('verify.code');

//login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login/action', [LoginController::class, 'login'])->name('actionLogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/managers', [ManagerController::class, 'index'])->name('managers.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/index', [MainController::class, 'index'])->name('index');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout-cus', [LoginController::class, 'logout_cus'])->name('logout_cus');
// Route manager user
Route::get('/managers/m_user/manager_user', [UserController::class, 'index'])->name('managers.m_user.manager_user');
Route::get('/managers/m_user/add_user', [UserController::class, 'create'])->name('managers.m_user.add_user');
Route::post('/managers/m_user/manager_user', [UserController::class, 'store'])->name('managers.m_user.store_user');
Route::get('/managers/m_user/users/{UserID}/edit', [UserController::class, 'edit'])->name('managers.m_user.edit_user');
Route::put( '/managers/m_user/users/{UserID}',    [UserController::class, 'update'])->name('managers.m_user.update_user_action');
Route::delete(  '/managers/m_user/delete_user/{UserID}',[UserController::class, 'destroy'])->name('managers.m_user.delete_user');
Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.edit');
Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

//customer
Route::get('/manager_customer', [CustomerController::class, 'index'])->name('manager_customer');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customers/{CustomerID}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{CustomerID}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('customer/{CustomerID}', [CustomerController::class, 'destroy'])->name('customer.destroy');

//contact
Route::get('/contacts', [IndexController::class, 'list_contacts'])->name('contacts');


//blog
Route::get('/blogs_detail/{BlogID}', [IndexController::class, 'show_blogs_detail'])->name('blogs_detail');
Route::get('/blogs', [IndexController::class, 'list_blogs'])->name('blogs');
Route::get('/managers/m_blog/manager_blog', [BlogPostController::class, 'index'])->name('managers.m_blog.manager_blog');
Route::get('/blog/create', [BlogPostController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogPostController::class, 'store'])->name('blog.store');
Route::get('/managers/m_blog/blogs/{PostID}/edit', [BlogPostController::class, 'edit'])->name('managers.m_blog.edit_blog');
Route::put('/managers/m_blog/blogs/{PostID}', [BlogPostController::class, 'update'])->name('managers.m_blog.update_blog_action');
Route::delete('/managers/m_blog/delete_blog/{PostID}', [BlogPostController::class, 'destroy'])->name('managers.m_blog.delete_blog');

Route::get('/', [IndexController::class, 'index2'])->name('home');

//trang home
// Route::domain('doan.store')->group(function () {
// });
// Route::get(uri: '/', [IndexController::class, 'index2'])->name('home');

//Category
Route::get('/managers/m_category/manager_category', [CategoryController::class, 'index'])->name('managers.m_category.manager_category');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/managers/m_category/store', [CategoryController::class, 'store'])->name('managers.m_category.store');
Route::get('category/{CategoryID}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('category/{CategoryID}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{CategoryID}', [CategoryController::class, 'destroy'])->name('category.destroy');

//product
Route::get('/product-list/{category_id}', [IndexController::class, 'list'])->name('product_list_category');
Route::get('/product/detail', [IndexController::class, 'viewAllProduct'])->name('product.all');
Route::get('/product/detail/{id}', [IndexController::class, 'viewProductDetail'])->name('product.detail');
Route::get('/managers/m_product/manager_product', [ProductController::class, 'index'])->name('managers.m_product.manager_product');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{ProductID}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{ProductID}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{ProductID}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/upload-image', [ProductController::class, 'uploadImage'])->name('upload.image');
//dashboard admin
Route::get('/admin', [DashboardController::class, 'index2'])->name('managers.manager');

//search
Route::get('/search', [IndexController::class, 'searchProducts'])->name('search.products');

//filter
Route::get('/filter-brand', [IndexController::class, 'filterByBrand'])->name('filter.brand.products');
Route::get('/filter-price', [IndexController::class, 'filterByPrice'])->name('filter.price.products');
Route::get('/filter', action: [IndexController::class, 'filterByCategory'])->name('filter.products');

// Route::get('/*', action: [IndexController::class, 'edit'])->name('products.edit');



//test
Route::get('/main', function () {
    return view('home.index');
})->name('TrangIndex');

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

Route::get('/template_admin', function () {
    return view('layouts/admin_master');
})->name('layouts.admin_master');

Route::get('/managers/m_category/add_category', function () {
    return view('managers/m_category/add_category');
})->name('managers.m_category.add_category');

Route::get('/managers/m_category/update_category', function () {
    return view('managers/m_category/update_category');
})->name('managers.m_category.update_category');

Route::get('/managers/m_blog/add_blog', function () {
    return view('managers/m_blog/add_blog');
})->name('managers.m_blog.add_blog');

Route::get('/managers/m_blog/update_blog', function () {
    return view('managers/m_blog/update_blog');
})->name('managers.m_blog.update_blog');

Route::get('/managers/m_user/add_user', function () {
    return view('managers/m_user/add_user');
})->name('managers.m_user.add_user');

Route::get('/managers/m_user/update_user', function () {
    return view('managers/m_user/update_user');
})->name('managers.m_user.update_user');

Route::get('/managers/m_user/delete_user', function () {
    return view('managers/m_user/delete_user');
})->name('managers.m_user.delete_user2');

