<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPhotoController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ReportController;
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
Route::get('/test-return', [WebsiteController::class, 'testReturn']);
Route::get('/', [WebsiteController::class, 'index']);
Route::get('/men', [WebsiteController::class, 'men']);
Route::get('/women', [WebsiteController::class, 'women']);
Route::get('/kid', [WebsiteController::class, 'kid']);
Route::get('/product/{id}/view', [WebsiteController::class, 'viewProduct']);
Route::get('/about-us', [WebsiteController::class, 'aboutUs']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::middleware(['auth'])->group(function () {

    Route::middleware(['permissions:ADMIN,CASHIER'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
    });


    // SYSTEM USERS
    Route::middleware(['permissions:ADMIN'])->group(function () {
        Route::get('/users', [UserController::class, 'index']);
        Route::post('/users/store', [UserController::class, 'store']);
        Route::post('/users/{id}/update', [UserController::class, 'update']);
    });

    // PROFILE & PASSWORD
    Route::middleware(['permissions:ADMIN,CASHIER'])->group(function () {
        Route::get('/edit-profile', [UserController::class, 'editProfile']);
        Route::post('/update-profile', [UserController::class, 'updateProfile']);

        Route::get('/change-password', [UserController::class, 'changePassword']);
        
    });
    
    Route::post('/update-password', [UserController::class, 'updatePassword']);

    // WEBSITE INFORMATION
    Route::middleware(['permissions:ADMIN'])->group(function () {
        Route::get('/website-information', [WebsiteController::class, 'info']);
        Route::post('/website-information/update', [WebsiteController::class, 'updateInfo']);
    });

    // CUSTOMERS
    Route::middleware(['permissions:ADMIN,CASHIER'])->group(function () {
        Route::get('/customers', [CustomerController::class, 'index']);
        Route::post('/customers/store', [CustomerController::class, 'store']);
        Route::post('/customers/{id}/update', [CustomerController::class, 'update']);
        Route::get('/customers/{id}/show', [CustomerController::class, 'show']);
    });

    // PRODUCTS
    Route::middleware(['permissions:ADMIN,CASHIER'])->group(function () {
        Route::get('/products', [ProductController::class, 'index']);
        Route::get('/products/{id}/show', [ProductController::class, 'show']);
    });

    Route::middleware(['permissions:ADMIN'])->group(function () {
        Route::post('/products/store', [ProductController::class, 'store']);
        Route::post('/products/{id}/update', [ProductController::class, 'update']);
    });
    
    // PHOTOS
    Route::middleware(['permissions:ADMIN'])->group(function () {
        Route::post('/photos/{product_id}/store', [ProductPhotoController::class, 'store']);
        Route::get('/photos/{id}/delete', [ProductPhotoController::class, 'destroy']);
        Route::get('/photos/{product_id}/{id}/active', [ProductPhotoController::class, 'setActive']);
    });

    // STOCKS
    Route::middleware(['permissions:ADMIN'])->group(function () {
        Route::post('/stocks/{product_id}/update-for-rent', [ProductController::class, 'updateForRent']);
        Route::post('/stocks/{product_id}/update-for-sale', [ProductController::class, 'updateForSale']);
    });

    // PRICES
    Route::middleware(['permissions:ADMIN'])->group(function () {
        Route::post('/prices/{product_id}/update', [PriceController::class, 'update']);
    });

    // TRANSACTIONS
    Route::middleware(['permissions:ADMIN,CASHIER'])->group(function () {
        Route::get('/transactions', [TransactionController::class, 'index']);
        Route::get('/transactions/create', [TransactionController::class, 'create']);
        Route::post('/transactions/store', [TransactionController::class, 'store']);
        Route::get('/transactions/{id}/show', [TransactionController::class, 'show']);
        Route::get('/transactions/{id}/edit', [TransactionController::class, 'edit']);
        Route::post('/transactions/{id}/update', [TransactionController::class, 'update']);
    });

    // RECEIPTS
    Route::get('/transactions/{id}/initial-receipt', [ReceiptController::class, 'initial']);
    Route::get('/transactions/{id}/final-receipt', [ReceiptController::class, 'final']);
    
    // ADDRESS
    Route::get('/get-municipalities/{province_code}', [AddressController::class, 'getMunicipalities']);
    Route::get('/get-barangays/{municipality_code}', [AddressController::class, 'getBarangays']);
    
    // RENTAL
    Route::middleware(['permissions:ADMIN,CASHIER'])->group(function () {
        Route::get('/rental', [RentalController::class, 'index']);
        Route::post('/rental/{id}/update', [RentalController::class, 'update']);
    });

    Route::get('/logout', [AuthController::class, 'logout']);
    
    Route::get('/reports', [ReportController::class, 'index']);
    Route::get('/reports/download', [ReportController::class, 'download']);
    Route::get('/reports/inventory', [ReportController::class, 'inventory']);

});

Route::get('/verify-account/{key}', [EmailController::class, 'verifyAccount']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);

Route::get('/verify-email', [EmailController::class, 'verifyEmail']);
Route::post('/forgot-password', [AuthController::class, 'recoverAccount']);

