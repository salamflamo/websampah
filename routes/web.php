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


//Route menggunakan put
Route::put('/adminsampah/table/{id}', 'SampahController@update');
Route::put('/adminsampah/masyarakat/{id}', 'SampahController@update_mas');
Route::put('/masadmin/sunting/{id}', 'MasController@kirim_sunting');


//Route menggunakan post
Route::post('/adminsampah/create', 'SampahController@create');
Route::post('/adminsampah/create_mas', 'SampahController@create_mas');
Route::post('/verif', 'SampahController@verif');

/* punya masyarakat */
Route::post('/daftar', 'MasController@daftar');
Route::post('/masverif', 'MasController@verif');
Route::post('/masadmin/kirim', 'MasController@kirim');


/* punya jasa */
Route::post('/jasadmin/verif', 'JasController@verif');

//Route menggunakan get

/* punya Admin */

Route::get('/adminsampah', 'SampahController@admin');
Route::get('/adminsampah/blank', 'SampahController@blank');
Route::get('/adminsampah/table', 'SampahController@table');
Route::get('/adminsampah/masyarakat', 'SampahController@masyarakat');
Route::get('/adminsampah/register', 'SampahController@register');
Route::get('/adminsampah/register_mas', 'SampahController@register_mas');
Route::get('/adminsampah/table/{id}/edit', 'SampahController@edit');
Route::get('/adminsampah/masyarakat/{id}/edit', 'SampahController@edit_mas');
Route::get('/adminsampah/table/{id}', 'SampahController@delete_jasa');
Route::get('/adminsampah/masyarakat/{id}', 'SampahController@delete_mas');
Route::get('/masukadmin', 'SampahController@masuk');
Route::get('/forgets', 'SampahController@forgetSession');


/* punya jasa */

Route::get('/jasadmin', 'JasController@jas_admin');
Route::get('/jasadmin/table', 'JasController@jas_table');
Route::get('/jasadmin/keluar', 'JasController@keluar');
Route::get('/masuk', 'JasController@masuk');
Route::get('/jasadmin/ubah/{id}', 'JasController@ubah');

/*punya masyarakat */
Route::get('/terimakasih', 'SampahController@thanks');
Route::get('/sent', 'SampahController@sent');
Route::get('/masadmin', 'MasController@mas_dashboard');
Route::get('/masadmin/keluar', 'MasController@forgetSession');
Route::get('/masadmin/pesan', 'MasController@pesan');
Route::get('/masadmin/sunting', 'MasController@sunting');
Route::get('/masadmin/table', 'MasController@mas_table');
Route::get('/keluar', 'MasController@forgetSession');


/* tidak dipakai */

//Route::get('/sampah', 'SampahController@index');
//Route::get('/sampah/{id}', 'SampahController@data');
//Route::get('/session/put', 'SessionController@putSession');
//Route::get('/session/get', 'SessionController@getSession');
//Route::get('/session/forget', 'SessionController@forgetSession');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
