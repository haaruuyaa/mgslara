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