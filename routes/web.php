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
Route::get('/',function(){
    return view('admin_template');
});

//Master Helper
Route::get('master/helper','MasterHelperController@index');
Route::get('master/helper/create','MasterHelperController@create');
Route::post('master/helper/store','MasterHelperController@store');

//Master Jenis
Route::get('master/jenis','MasterJenisController@index');
//Route::get('master/jenis/create','MasterJenisController@create');
//Route::post('master/jenis/store','MasterJenisController@store');

//Master Customer
Route::get('master/customer','MasterCustomerController@index');
Route::get('master/customer/create','MasterCustomerController@create');
Route::post('master/customer/store','MasterCustomerController@store');

//Master Stock
Route::get('master/stock','MasterStockController@index');
Route::get('master/stock/create','MasterStockController@create');
Route::post('master/stock/store','MasterStockController@store');