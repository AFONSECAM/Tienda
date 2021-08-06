<?php

use App\Http\Controllers\SaleController;
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



Route::resource('categories', 'CategoryController')->names('categories');
Route::resource('clients', 'ClientController')->names('clients');
Route::resource('providers', 'ProviderController')->names('providers');
Route::resource('products', 'ProductController')->names('products');
Route::resource('purchases', 'PurchaseController')->names('purchases');
Route::resource('sales', 'SaleController')->names('sales');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');