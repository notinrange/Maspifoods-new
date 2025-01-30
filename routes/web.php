<?php

use App\Models\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


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

//Home
Route::get('/', [HomeController::class,'home']);

//Single Product
Route::get('/products/{id}', [HomeController::class,'product']);



//All Products
Route::get('/products', [HomeController::class, 'products'])->name('products.index');

//About Section
Route::get('/about', [HomeController::class,'about']);

//Refund Policy Section
Route::view('/refund-policy', 'components.refund');

//Terms and Condition Section
Route::view('/terms-and-condition', 'components.tandc');

//Privacy Policy Section
Route::view('/privacy-policy', 'components.privacy');

//Shows Contact Form
Route::get('/contact', [HomeController::class,'contact']);

//Stores Contact Form input
Route::post('/contact', [HomeController::class, 'store']);

// Show Register/Create Form
Route::get('/register',[UserController::class,'create'])->middleware('guest');

// Create New User 
Route::post('/users',[UserController::class,'stores']);

// Log Out User
Route::post('/logout',[UserController::class, 'logout']);

// Show Login Form
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

// Log In User 
Route::post('/users/authenticate',[UserController::class,'authenticate']);

//Add to cart
Route::post('/add-to-cart', [CartController::class, 'addToCart']);




