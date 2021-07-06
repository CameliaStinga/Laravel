<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\BackofficeController;
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

Route::get('/product/{id}', [ProductController::class,'detailProduit']);
Route::get('/product', [ProductController::class,'afficheProduct']);
Route::resource('backoffice/index',BackofficeController::class)->middleware('auth:');
Route::resource('customers',BackofficeController::class);
Route::resource('orders',OrderController::class);
Route::resource('categories', CategoryController::class);


/*use App\Http\Controllers\ProductControllerC;
Route::get('/product', [ProductControllerC::class, 'listeProduits']);
Route::get('/product/{id}', [ProductControllerC::class, 'detailsProduit']);
use App\Http\Controllers\CartController;
Route::get('/cart', [CartController::class, 'panier']);
//Route::get('/', function () {
   // return view('helloworld');
//});
/*Route::get('/', function () {
    return ('Home page');
});
Route::get('/product', function () {
    return ('Liste de produits');
});


Route::get('/', [HomeController::class, 'homePage']);
//Route::get('/product', [ProductController::class, 'product']);
//Route::get('/product/{id}', [ProductController::class, 'detailProduct']);
Route::get('/cart', [CartController::class, 'cart']);
//Route::get('backoffice/{backoffice}', [BackofficeController::class, 'show']);
Route::resource('backoffice', BackofficeController::class);
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
//Route::resource('customer', CustomerController::class);
Route::resource('order', OrderController::class);

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
