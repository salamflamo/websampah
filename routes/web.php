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
Route::put('/adminsampah/editmas/{id}', 'SampahController@updatemas');
Route::put('/adminsampah/editjas/{id}', 'SampahController@updatejas');
Route::put('/adminsampah/masyarakat/{id}', 'SampahController@update_mas');
Route::put('/masadmin/sunting/{id}', 'MasController@kirim_sunting');


//Route menggunakan post

/* punya admin */
Route::post('/adminsampah/create', 'SampahController@create');
Route::post('/adminsampah/createjasa', 'SampahController@create_jasa');
Route::post('/adminsampah/createpengepul', 'SampahController@create_pengepul');
Route::post('/adminsampah/create_mas', 'SampahController@create_mas');
Route::post('/adminsampah/create_posting', 'SampahController@create_posting');
Route::post('/adminsampah/create_komentar', 'SampahController@create_komentar');
Route::post('/verif', 'SampahController@verif');

/* punya masyarakat */
Route::post('/daftar', 'MasController@daftar');
Route::post('/masverif', 'MasController@verif');
Route::post('/masadmin/kirim', 'MasController@kirim');
Route::post('/masadmin/mengepul/{id}/kirim', 'MasController@KirimMengepul');


/* punya jasa */
Route::post('/verifjas', 'JasController@verif');
Route::post('/jasadmin/mengepul/{id}/kirim', 'JasController@KirimMengepul');
Route::post('/jasadmin/createposting', 'JasController@create_posting');
Route::post('/daftarkan', 'JasController@daftarkan');

/* punya pengepul */
Route::post('/verifpeng','PengepulController@verif');
Route::post('/pengadmin/createposting','PengepulController@create_posting');

//Route menggunakan get

/* punya Admin */

Route::get('/adminsampah', 'SampahController@admin'); //dashboard utama
Route::get('/adminsampah/table', 'SampahController@table'); //menampilkan tabel
Route::get('/adminsampah/register', 'SampahController@register'); //untuk mendaftarkan member
Route::get('/adminsampah/table/{id}/editmas', 'SampahController@editmas'); //untuk edit
Route::get('/adminsampah/table/{id}/editjas', 'SampahController@editjas'); //untuk edit
Route::get('/adminsampah/table/deletemas/{id}', 'SampahController@delete_mas');  //untuk mendelete
Route::get('/adminsampah/table/deletejas/{id}', 'SampahController@delete_jasa');  //untuk mendelete
Route::get('/adminsampah/table/deletepeng/{id}', 'SampahController@delete_jasa');  //untuk mendelete
Route::get('/adminsampah/hapusposting/{id}', 'SampahController@hapusposting');  //untuk mendelete
Route::get('/adminsampah/daftarposting', 'SampahController@DaftarPosting'); //melihat daftar postingan
Route::get('/adminsampah/posting', 'SampahController@Posting'); //untuk masuk halaman posting
Route::get('/adminsampah/transaksi', 'SampahController@transaksi');  //melihat semua transaksi
Route::get('/masukadmin', 'SampahController@masuk'); //login sebagai superadmin
Route::get('/forgets', 'SampahController@forgetSession'); //ini untuk logoout
Route::get('/adminsampah/viewmas/{id}', 'SampahController@DetailMas'); //ini untuk view detail
Route::get('/adminsampah/viewjas/{id}', 'SampahController@DetailJas'); //ini untuk view detail



/* punya jasa */

Route::get('/jasadmin', 'JasController@jas_admin');
Route::get('/jasadmin/transaksi', 'JasController@jas_table');
Route::get('/keluarjas', 'JasController@keluar');
Route::get('/masuk', 'JasController@masuk');
Route::get('/jasadmin/transaksi/{id}', 'JasController@ubah');
Route::get('/jasadmin/mengepul/{id}', 'JasController@Mengepul');
Route::get('/jasadmin/mengepul', 'JasController@DaftarMengepul');
Route::get('/jasadmin/posting', 'JasController@Posting');
Route::get('/jasadmin/tableposting', 'JasController@DaftarPosting');
Route::get('/daftarjadijasa', 'JasController@ndaftarjasa');

/*punya masyarakat */
Route::get('/terimakasih', 'SampahController@thanks');
Route::get('/sent', 'SampahController@sent');
Route::get('/masadmin', 'MasController@mas_dashboard');
Route::get('/masadmin/keluar', 'MasController@forgetSession');
Route::get('/masadmin/menyampah', 'MasController@pesan');
Route::get('/masadmin/profile', 'MasController@sunting');
Route::get('/masadmin/table', 'MasController@mas_table');
Route::get('/masadmin/mengepul', 'MasController@Pengepul');
Route::get('/masadmin/mengepul/{id}', 'MasController@Mengepul');
Route::get('/keluarmas', 'MasController@forgetSession');
Route::get('/masukmasyarakat', 'MasController@login');


/* punya pengepul */
Route::get('/masukpengepul','PengepulController@login');
Route::get('/pengadmin','PengepulController@dashboard');
Route::get('/pengadmin/mengepul','PengepulController@TabelMengepul');
Route::get('/pengadmin/mengepul/{id}','PengepulController@ubah');
Route::get('/pengadmin/posting','PengepulController@Posting');
Route::get('/pengadmin/tabelposting','PengepulController@DaftarPosting');
Route::get('/keluarpeng','PengepulController@forget');




/* punya Artikel */

Route::get('/berita', 'ArtikelController@berita');
/* tidak dipakai */

//Route::get('/sampah', 'SampahController@index');
//Route::get('/sampah/{id}', 'SampahController@data');
//Route::get('/session/put', 'SessionController@putSession');
//Route::get('/session/get', 'SessionController@getSession');
//Route::get('/session/forget', 'SessionController@forgetSession');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
