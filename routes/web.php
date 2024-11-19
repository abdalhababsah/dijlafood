<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\AuthController;


// Home Route
Route::get('/', function () {
    return view('welcome'); // Ensure 'home.blade.php' exists
})->name('home');

// Products Route
Route::get('/products', function () {
    return view('products'); // Ensure 'products.blade.php' exists
})->name('products');

// Photo Gallery Route
Route::get('/gallery', function () {
    return view('Pages.gallery'); 
})->name('gallery');

// Contact Us Route
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::post('/contact',[ContactController::class, 'send'])->name('contact.send');

Route::get('/our-story', function () {
    return view('Pages.OurStory');
})->name('our.story');


Route::get('/our-factory', function () {
    return view('Pages.OurFactory'); 
})->name('our.factory');

Route::get('/our-certificates', function () {
    return view('Pages.OurCertificates'); 
})->name('our.certificates');
Route::get('/lang/{locale}', [LocalizationController::class, 'switchLang'])->name('lang.switch');
Route::get('/our-products/{categoryID}', [ProductsController::class, 'getProductsWithSubcategories'])->name('products.subcategory');
Route::get('/view-product/{id}', [ProductsController::class, 'show'])->name('product.show');







Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('admin/products')->middleware('auth')->group(function () {
    Route::get('/', [AdminProductsController::class, 'index'])->name('admin.products.index');
    Route::get('/create', [AdminProductsController::class, 'create'])->name('admin.products.create');
    Route::post('/', [AdminProductsController::class, 'store'])->name('admin.products.store');
    Route::get('/{id}/edit', [AdminProductsController::class, 'edit'])->name('admin.products.edit');
    Route::put('/{id}', [AdminProductsController::class, 'update'])->name('admin.products.update');
    Route::delete('/{id}', [AdminProductsController::class, 'destroy'])->name('admin.products.destroy');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('categories', CategoryController::class);
});
Route::post('categories/{category}/subcategory', [CategoryController::class, 'addSubcategory'])->name('admin.categories.addSubcategory')->middleware('auth');
Route::put('subcategories/{subcategory}', [CategoryController::class, 'updateSubcategory'])->name('admin.categories.updateSubcategory')->middleware('auth');
Route::resource('categories', CategoryController::class)->names('admin.categories')->middleware('auth');
