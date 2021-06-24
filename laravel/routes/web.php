<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

Route::get('/product/{id}', [ProductController::class,'detailProduit']);
//Route::get('/product/{id}', [ProductController::class,'afficheProduct']);

Route::get('/contact', [contactController::class,'afficheContact']);


use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'homePage']);


use App\Http\Controllers\EquipeController;
Route::get('/equipe', [EquipeController::class, 'equiPe']);


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


Route::get('/product/{id}', function ($id) {
    return ('Fiche du produit' . $id);
});


Route::get('/cart', function () {
    return ('Panier');
});
*/
