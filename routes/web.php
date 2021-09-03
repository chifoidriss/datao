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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/credit', function () {
    return view('pages.offre-credit');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/modem', function () {
    return view('pages.offre-modem');
});

Route::get('/sim', function () {
    return view('pages.offre-sim');
});

Route::get('/apropos', function () {
    return view('pages.apropos');
});

Route::get('whatsapp/{mt}','ForfaitController@Whatsapp');
Route::post('whatsapp','ForfaitController@WhatsappPost');
Route::get('forfait-fako','ForfaitController@FrontForfait');
Route::get('forfait-blues','ForfaitController@FrontForfait1');
Route::get('shop','ForfaitController@shop');

Auth::routes();

Route::resource('categorie','CategorieController');
Route::resource('produit','ProduitController');
Route::resource('forfait','ForfaitController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
