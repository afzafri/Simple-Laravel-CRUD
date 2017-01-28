<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//PAGES and FORMS

Route::get('/', 'ProcessController@indexlogin');

//show view homepage form
Route::get('/home', 'ProcessController@homepage');

//PROCESS CONTROLLER
//insert data
Route::post('/home',array('uses'=>'ProcessController@store'));

//delete data
Route::post('/view',array('uses'=>'ProcessController@destroy'));

//List all data 
Route::get('/view',array('uses'=>'ProcessController@index'));

//search data
Route::get('/search',array('uses'=>'ProcessController@show'));

Route::get('/edit/{id}',array('uses'=>'ProcessController@edit'));

Route::post('/update',array('uses'=>'ProcessController@update'));
Auth::routes();


?>