<?php

// use Illuminate\Database\Eloquent\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['guest']], function () {
    // menampilkan fOrm login
    Route::get("/", "PageController@login")->name('login');

    // ceklogin
    Route::post("/ceklogin", "AuthController@ceklogin");

    Route::get("/caripenduduk", "PageController@caripenduduk");

    Route::get("/actsearchpenduduk", "PageController@actsearchpenduduk");
});

Route::group(['middleware' => ['auth']], function () {
    // untuk menampilkan halaman pertama setelah program dijalankan
    Route::get("/home", "PageController@home");

    //untuk menampilkan halaman daftar penduduk
    Route::get("/penduduk", "PageController@penduduk");

    //untuk menampilkan form untuk tambah data penduduk
    Route::get("/penduduk/add", "PageController@addpenduduk");

    //menyimpan data dari form penduduk ke database
    Route::post("/save", "PageController@savependuduk");

    //menangkap data dari database berdasarkan ID
    Route::get('/penduduk/edit/{id}', "PageController@edit");

    //mengubah data dari form edit penduduk ke database
    Route::put("/update/{id}", "PageController@update");

    //aksi untuk menghapus data sesuai ID
    Route::get("/delete/{id}", "PageController@delete");

    Route::get("/logout", "AuthController@ceklogout");

    Route::get("/edituser", "PageController@edituser");

    Route::post("/updateuser", "PageController@updateuser");

   
});
