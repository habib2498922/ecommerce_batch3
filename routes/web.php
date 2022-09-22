<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\DashBoardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\ColorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/category-product/{id}',[HomeController::class,'category'])->name('category');
Route::get('/detail_product/{id}',[HomeController::class,'detail'])->name('detail');

Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact-us',[HomeController::class,'contact'])->name('contact');

Route::post('/add-to-cart/{id}',[CartController::class,'index'])->name('add-to-cart');
Route::get('/show-cart',[CartController::class,'show'])->name('show-cart');
Route::get('/remove-cart-product/{id}',[CartController::class,'remove'])->name('remove-cart-product');
Route::post('/update-to-cart/{id}',[CartController::class,'update'])->name('update-to-cart');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::post('/new-order',[CheckoutController::class,'newOrder'])->name('new-order');
Route::get('/complete-order',[CheckoutController::class,'completeOrder'])->name('complete-order');


Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::get('/email',[HomeController::class,'mail'])->name('mail');
Route::get('/error',[HomeController::class,'error'])->name('error');

Route::get('/product-list',[HomeController::class,'productlist'])->name('productlist');

Route::get('/blog-gird',[HomeController::class,'bloggird'])->name('bloggird');
Route::get('/blog-single',[HomeController::class,'blogsingle'])->name('blogsingle');
Route::get('/blog-singleslide',[HomeController::class,'blogsingleslide'])->name('blogsingleslide');

Route::get('/customer-login', [CustomerAuthController::class, 'login'])->name('customer_login');
Route::post('/customer-signIn', [CustomerAuthController::class, 'signIn'])->name('customer-signIn');
Route::get('/customer-register', [CustomerAuthController::class, 'register'])->name('customer_register');
Route::get('/customer-logout',[CustomerAuthController::class,'logout'])->name('customer-logout');
Route::post('/new-customer',[CustomerAuthController::class,'newcustomer'])->name('new-customer');

Route::middleware(['customer'])->group(function () {
    Route::get('/customer-dashboard',[CustomerDashboardController::class,'index'])->name('customer-dashboard');
    Route::get('/customer-profile',[CustomerDashboardController::class,'profile'])->name('customer-profile');
    Route::get('/customer-account',[CustomerDashboardController::class,'account'])->name('customer-account');
});




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashBoardController::class,'index'])->name('dashboard');

    Route::get('/add-category',[CategoryController::class,'index'])->name('add-category');
    Route::post('/new-category',[CategoryController::class,'create'])->name('category.new');
    Route::get('/manage-category',[CategoryController::class,'manage'])->name('manage-category');
    Route::get('/edit-category/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::get('/delete-category/{id}',[CategoryController::class,'delete'])->name('category.delete');
    Route::post('/update-category/{id}',[CategoryController::class,'update'])->name('category.update');

    Route::get('/add-subcategory',[SubCategoryController::class,'index'])->name('add-subcategory');
    Route::post('/new-subcategory',[SubCategoryController::class,'create'])->name('subcategory.new');
    Route::get('/manage-subcategory',[SubCategoryController::class,'manage'])->name('manage-subcategory');
    Route::get('/edit-subcategory/{id}',[SubCategoryController::class,'edit'])->name('subcategory.edit');
    Route::get('/delete-subcategory/{id}',[SubCategoryController::class,'delete'])->name('subcategory.delete');
    Route::post('/update-subcategory/{id}',[SubCategoryController::class,'update'])->name('subcategory.update');

    Route::get('/add-brand',[BrandController::class,'index'])->name('add-brand');
    Route::get('/manage-brand',[BrandController::class,'manage'])->name('manage-brand');
    Route::post('/new-brand',[BrandController::class,'create'])->name('brand.new');
    Route::get('/edit-brand/{id}',[BrandController::class,'edit'])->name('brand.edit');
    Route::get('/delete-brand/{id}',[BrandController::class,'delete'])->name('brand.delete');
    Route::post('/update-brand/{id}',[BrandController::class,'update'])->name('brand.update');

    Route::get('/add-unit',[UnitController::class,'index'])->name('add-unit');
    Route::get('/manage-unit',[UnitController::class,'manage'])->name('manage-unit');
    Route::post('/new-unit',[UnitController::class,'create'])->name('unit.new');
    Route::get('/edit-unit/{id}',[UnitController::class,'edit'])->name('unit.edit');
    Route::get('/delete-unit/{id}',[UnitController::class,'delete'])->name('unit.delete');
    Route::post('/update-unit/{id}',[UnitController::class,'update'])->name('unit.update');

    Route::get('/add-product',[ProductController::class,'index'])->name('add-product');
    Route::get('/get-sub-category',[ProductController::class,'getSubCategory'])->name('product.get-sub-category');
    Route::get('/manage-product',[ProductController::class,'manage'])->name('manage-product');
    Route::post('/new-product',[ProductController::class,'create'])->name('product.new');
    Route::get('/edit-product/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::get('/delete-product/{id}',[ProductController::class,'delete'])->name('product.delete');
    Route::get('/detail-product/{id}',[ProductController::class,'detail'])->name('product.detail');
    Route::post('/update-product/{id}',[ProductController::class,'update'])->name('product.update');

    Route::get('/manage-order',[OrderController::class,'index'])->name('manage-order');
    Route::get('/admin-order.detail/{id}',[OrderController::class,'detail'])->name('admin-order.detail');
    Route::get('/admin-order.view-invoice/{id}',[OrderController::class,'ViewInvoice'])->name('admin-order.view-invoice');
    Route::get('/admin-order.download-invoice/{id}',[OrderController::class,'DownloadInvoice'])->name('admin-order.download.invoice');
    Route::get('/admin-order.edit/{id}',[OrderController::class,'edit'])->name('admin-order.edit');
    Route::post('/admin.order.update/{id}',[OrderController::class,'update'])->name('admin.order.update');
    Route::get('/admin-order.delete/{id}',[OrderController::class,'delete'])->name('admin-order.delete');

    Route::get('/add-user',[UserController::class,'index'])->name('add-user');
    Route::get('/manage-user',[UserController::class,'index'])->name('manage-user');



});

Route::resource('color', ColorController::class);

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
