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

Route::get('purchases/pdf/{purchase}', 'PurchaseController@pdf')->name('purchases.pdf');
Route::get('sales/pdf/{sale}', 'SaleController@pdf')->name('sales.pdf');

//Para la subida de archivos a las compras
Route::get('purchases/upload/{purchase}', 'PurchaseController@uploadFile')->name('upload.purchases');


//Para cambiar el status
// Route::resource('changeStatus/products/{product}', 'ProductController@changeStatus')->names('change.status.products');
// Route::resource('changeStatus/purchases/{purchase}', 'PurchaseController@changeStatus')->names('change.status.purchases');
// Route::resource('changeStatus/sales/{sale}', 'SaleController@changeStatus')->names('change.status.sales');


//Rutas para los reportes
Route::get('sales/reports_day', 'ReportController@reports_day')->name('reports.day');
Route::get('sales/reports_date', 'ReportController@reports_date')->name('reports.date');

Route::post('sales/report_results', 'ReportController@report_results')->name('report.results');



Route::resource('users', 'UserController')->names('users');
Route::resource('roles', 'RoleController')->names('roles');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');