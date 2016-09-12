<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/test', 'HomeController@showView');
/*add, updata, delete data*/
Route::get('/showData', 'HomeController@showDB');
Route::post('/addData','HomeController@addDB');
Route::post('/update/{id}','HomeController@updateDB');
Route::get('/loadAjax/{id}','HomeController@loadAjax');
Route::get('/delete/{id}','HomeController@deleteDB');


/*buổi 2*/
Route::get('/layout', 'LayoutController@pagination');