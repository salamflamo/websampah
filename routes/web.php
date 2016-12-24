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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function (){
    return view('daftar');
});

Route::get('/sampah', 'SampahController@index');
Route::get('/sampah/{id}', 'SampahController@data');
Route::get('/adminsampah', 'SampahController@admin');
Route::get('/adminsampah/blank', 'SampahController@blank');
Route::get('/adminsampah/table', 'SampahController@table');
Route::get('/adminsampah/masyarakat', 'SampahController@masyarakat');

Route::post('/adminsampah/create', 'SampahController@create');
Route::post('/adminsampah/create_mas', 'SampahController@create_mas');
Route::post('/daftar', 'SampahController@daftar');
Route::post('/verif', 'SampahController@verif');
Route::get('/adminsampah/register', 'SampahController@register');
Route::get('/adminsampah/register_mas', 'SampahController@register_mas');

Route::get('/adminsampah/table/{id}/edit', 'SampahController@edit');
Route::get('/adminsampah/masyarakat/{id}/edit', 'SampahController@edit_mas');
Route::put('/adminsampah/table/{id}', 'SampahController@update');
Route::put('/adminsampah/masyarakat/{id}', 'SampahController@update_mas');
Route::get('/adminsampah/table/{id}', 'SampahController@delete_jasa');
Route::get('/adminsampah/masyarakat/{id}', 'SampahController@delete_mas');
Route::get('/terimakasih', 'SampahController@thanks');
Route::get('/sent', 'SampahController@sent');
Route::get('/masuk', 'SampahController@masuk');


Auth::routes();

Route::get('/home', 'HomeController@index');
