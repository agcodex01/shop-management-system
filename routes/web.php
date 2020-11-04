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
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');

    Route::get('suppliers', 'UserController@suppliers')->name('suppliers.index');
    Route::get('suppliers/{user}/show', 'UserController@show')->name('supplier.show');
    Route::view('suppliers/create', 'suppliers.create')->name('supplier.create');
    Route::get('suppliers/{user}/request_product', 'UserController@requestProduct')->name('suppliers.request');
    Route::post('suppliers', 'UserController@store')->name('supplier.store');
    Route::put('suppliers/{user}', 'UserController@update')->name('suppliers.update');

    Route::get('admin/accounts/profile','UserController@adminProfile')->name('accounts.admin');
    Route::put('admin/accounts/{user}','UserController@update')->name('accounts.update');
    Route::get('sales_per_week','UserController@salesPerWeek')->name('sales.perWeek');
    Route::get('customers/{id}/orders','UserController@orders')->name('customers.orders');

    Route::resource('customers', 'UserController');
    Route::resource('products', 'ProductController');
    Route::resource('orders', 'OrderController');
    Route::resource('deliveries', 'DeliveryController');
});
