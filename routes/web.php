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

Route::get('/', 'HomeController@index');
Route::get('/products', 'ProdukController@showProduk');
Route::get('/about', function (){
	return view('pages.about');
});

Route::get('/insert', 'ProdukController@getProduk');
Route::get('/donate/{id}', 'DonateController@getDonasi');
 Route::get('/destroy/{id_produk}', 'ProdukController@deleteProduk');
  Route::get('/update/{id_produk}', 'ProdukController@editProduk');
  

Route::prefix('pages')->group(function (){
    
    Route::post('/insert','ProdukController@postProduk')->name('pages.post');
      Route::post('/donate/{id}','DonateController@postDonasi')->name('pages.donasi');
    Route::post('/update/{id_produk}', 'ProdukController@updateProduk')->name('pages.update');
    });

Auth::routes();
Route::get('/login',[
    'as' => 'get_login',
    'uses' => 'AuthController@getlogin']);

Route::post('/login', [
    'as' => 'get_login', 
    'uses' => 'AuthController@postlogin']);
Route::get('/register2', function () {
	return view('register2');
});

Route::get('/Detailaccount', 'AccountController@viewUser');
Route::post('/Detailaccount', 'AccountController@updateUser');

Route::group(['prefix' => 'user'], function(){
    Route::get('/create', 'AccountController@getUser');
    Route::post('/store', 'AccountController@postUser');
    Route::get('/show', 'AccountController@viewUser');
    Route::get('/update/{id}', 'AccountController@editUser');
    Route::post('/update/{id}', 'AccountController@updateUser');
});

Route::group(['prefix' => 'umkm'], function(){
    Route::get('/create', 'UmkmController@getUmkm');
    Route::post('/store', 'UmkmController@postUmkm');
    Route::get('/show', 'UmkmController@viewUmkm');
    Route::get('/update/{id}', 'UmkmController@editUmkm');
    Route::post('/update/{id}', 'UmkmController@updateUmkm');
});

Route::group(['prefix' => 'donate'], function(){
    Route::get('/create/{id}', 'DonateController@getDonasi');
    Route::post('/create/{id}', 'DonateController@postDonasi');
    Route::get('/show', 'DonateController@viewDonasi');
    Route::get('/update/{id}', 'DonateController@editDonasi');
    Route::post('/update/{id}', 'DonateController@updateDonasi');
});

Route::group(['prefix' => 'produk'], function(){
//     Route::get('/create', 'ProdukController@getProduk');
//     Route::post('/store', 'ProdukController@postProduk');
    Route::get('/show/{slug}', 'ProdukController@viewProduk');
//     Route::get('/show', 'HomeController@index');
//     Route::get('/update', 'ProdukController@editProduk');
//     Route::post('/update', 'ProdukController@updateProduk');
});


Route::get('profile','AccountController@profile');
