<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/permissions', 'PermissionsController@index')->name('permissions');
Route::get('/clients', 'ClientsController@index')->name('clients');
Route::get('/clients/add', 'ClientsController@add')->name('add');
Route::post('/clients/store', 'ClientsController@store')->name('store');
Route::get('/clients/edit/{id}', 'ClientsController@edit')->name('edit');
Route::put('/clients/update/{id}', 'ClientsController@update')->name('update');
Route::post('/clients/update/{id}', 'ClientsController@update')->name('update');    
Route::get('/clients/show/{id}', 'ClientsController@show')->name('show');
Route::delete('/clients/destroy/{id}', 'ClientsController@destroy')->name('destroy');
Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/add', 'UsersController@add')->name('add');
Route::post('/users/store', 'UsersController@store')->name('users_store');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('edit');
Route::put('/users/update/{id}', 'UsersController@update')->name('update');
Route::post('/users/update/{id}', 'UsersController@update')->name('update');
Route::delete('/users/destroy/{id}', 'UsersController@destroy')->name('destroy');
Route::get('/providers', 'ProvidersController@index')->name('providers');
Route::get('/providers/add', 'ProvidersController@add')->name('add');
Route::post('/providers/store', 'ProvidersController@store')->name('store');
Route::get('/providers/edit/{id}', 'ProvidersController@edit')->name('edit');
Route::put('/providers/update/{id}', 'ProvidersController@update')->name('update');
Route::post('/providers/update/{id}', 'ProvidersController@update')->name('update');
Route::delete('/providers/destroy/{id}', 'ProvidersController@destroy')->name('destroy');
Route::get('/inventory', 'InventoryController@index')->name('inventory');
Route::get('/inventory/add', 'InventoryController@add')->name('add');
Route::get('/inventory/store', 'InventoryController@store')->name('store');
Route::get('/inventory/edit{id}', 'InventoryController@edit')->name('edit');
Route::put('/inventory/update{id}', 'InventoryController@update')->name('update');
Route::delete('/inventory/destroy{id}', 'InventoryController@destroy')->name('destroy');
Route::get('/sales', 'SalesController@index')->name('sales');
Route::get('/sales/add', 'SalesController@add')->name('add');