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

Route::get('/contact', [contactController::class,'afficheContact']);

Route::get('/productname', [ProductController::class,'listenomProduits']);

Route::get('/productprice', [ProductController::class,'listeprixcroissantProduits']);

Route::get('/productnameprice/{id}', [ProductController::class,'nomprixProduit']);




Route::get('/', [HomeController::class,'homePage']);

Route::get('/equipe', [EquipeController::class,'equiPe']);


//Route::get('/backoffice',[BackofficeController::class,'indexProduct'] );

//Route::get('/backoffice/create',[BackofficeController::class, 'create'] );
//Route::post('/backoffice/store',[BackofficeController::class, 'store'] );


Route::resource('backoffice/index',BackofficeController::class);
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


Route::get('/product/{id}', function ($id) {
    return ('Fiche du produit' . $id);
});


Route::get('/cart', function () {
    return ('Panier');
});
*/
