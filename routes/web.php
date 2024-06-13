<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\SousFamilleController;
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

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/', function () {
    return view('Frontend.home');
});
Route::get('/contact', function () {
    return view('Frontend.contact');
});
Route::get('/about', function () {
    return view('Frontend.aboutus');
});

Route::resource('/BackFamille', FamilleController::class);
Route::resource('/BackSousFamille', SousFamilleController::class);
Route::resource('/BackMarque', MarqueController::class);


Route::resource('/BackProduit', ProduitController::class);
Route::get('/listProduit', [ProduitController::class, 'indexlist'])->name('productslist.index');
Route::get('/listCommandes', [CommandeController::class, 'index'])->name('commandeslist.index');


Route::get('/detailProduit{id}', 'App\Http\Controllers\ProduitController@show')->name('produits.show');
Route::get('/detailCommandes{id}', 'App\Http\Controllers\CommandeController@show')->name('commandes.show');

Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/store',[CartController::class,'addToCart'])->name('cart.store');
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

