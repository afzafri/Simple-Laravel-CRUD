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

Route::get('/', 'Process@indexlogin');

//show view homepage form
Route::get('/home', 'Process@homepage');

//PROCESS CONTROLLER
//insert data
Route::post('/home',array('uses'=>'Process@store'));

//delete data
Route::post('/view',array('uses'=>'Process@destroy'));

//List all data 
Route::get('/view',array('uses'=>'Process@index'));

//search data
Route::get('/search',array('uses'=>'Process@show'));

Route::get('/edit/{id}',array('uses'=>'Process@edit'));

Route::post('/update',array('uses'=>'Process@update'));
Auth::routes();


?>