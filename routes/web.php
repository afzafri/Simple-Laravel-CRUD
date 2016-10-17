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
//Insert form
Route::get('/', function () {
    return view('pages.home');
});

//search data form
Route::get('/search', function () {
    return view('pages.search');
});


//PROCESS CONTROLLER
//insert data
Route::post('/',array('uses'=>'Process@store'));

//delete data
Route::post('/view',array('uses'=>'Process@destroy'));

//List all data 
Route::get('/view',array('uses'=>'Process@index'));

//search data
Route::post('/search',array('uses'=>'Process@show'));

Route::get('/edit/{id}',array('uses'=>'Process@edit'));

Route::post('/update',array('uses'=>'Process@update'));