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


Route::group(['prefix' => 'permissions'], function(){
	Route::get('', 'PermissionsController@index')->name('permissions');
});

Route::group(['prefix' => 'clients'], function(){
	Route::get('', 'ClientsController@index')->name('clients');	
	Route::get('/add', 'ClientsController@add')->name('clients_add');
	Route::post('/store', 'ClientsController@store')->name('clients_store');
	Route::get('/edit/{id}', 'ClientsController@edit')->name('clients_edit');
	Route::put('/update/{id}', 'ClientsController@update')->name('clients_update');
	Route::post('/update/{id}', 'ClientsController@update')->name('clients_update');    
	Route::get('/show/{id}', 'ClientsController@show')->name('clients_show');
	Route::delete('/destroy/{id}', 'ClientsController@destroy')->name('clients_destroy');
});

Route::group(['prefix' => 'users'], function(){
	Route::get('', 'UsersController@index')->name('users');
	Route::get('/add', 'UsersController@add')->name('users_add');
	Route::post('/store', 'UsersController@store')->name('users_store');
	Route::get('/edit/{id}', 'UsersController@edit')->name('users_edit');
	Route::put('/update/{id}', 'UsersController@update')->name('users_update');
	Route::post('/update/{id}', 'UsersController@update')->name('users_update');
	Route::delete('/destroy/{id}', 'UsersController@destroy')->name('users_destroy');
});

Route::group(['prefix' => 'providers'], function(){
	Route::get('', 'ProvidersController@index')->name('providers');
	Route::get('/add', 'ProvidersController@add')->name('providers_add');
	Route::post('/store', 'ProvidersController@store')->name('providers_store');
	Route::get('/edit/{id}', 'ProvidersController@edit')->name('providers_edit');
	Route::put('/update/{id}', 'ProvidersController@update')->name('providers_update');
	Route::post('/update/{id}', 'ProvidersController@update')->name('providers_update');
	Route::delete('/destroy/{id}', 'ProvidersController@destroy')->name('providers_destroy');
});

Route::group(['prefix' => 'inventory'], function(){
	Route::get('', 'InventoryController@index')->name('inventory');
	Route::get('/add', 'InventoryController@add')->name('inventory_add');
	Route::get('/store', 'InventoryController@store')->name('inventory_store');
	Route::get('/edit{id}', 'InventoryController@edit')->name('inventory_edit');
	Route::put('/update{id}', 'InventoryController@update')->name('inventory_update');
	Route::delete('/destroy{id}', 'InventoryController@destroy')->name('inventory_destroy');
});

Route::group(['prefix' => 'sales'], function(){
	Route::get('', 'SalesController@index')->name('sales');
	Route::get('/add', 'SalesController@add')->name('sales_add');
});


