<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


//halamanE

Route::get('/halaman_utama','Dmscontroller@index');
Route::get('/produsen','Dmscontroller@produsen');
Route::get('/dokumen','Dmscontroller@dokumen');
Route::get('/user','Dmscontroller@user');
Route::get('/file','Dmscontroller@file');

Route::get('/user/page_user','Dmscontroller@page_user');
Route::get('/page_admin','Dmscontroller@page_admin');
Route::get('/page_admin/page_user_admin','Dmscontroller@page_user_admin');

//login
Route::get('/','Dmscontroller@login');
Route::get('/login_dms','Dmscontroller@login');
Route::post('/login_dms/log_proses','Dmscontroller@login_proses');

/*Route::Group(['middleware' => 'auth' ], function() {

	Route::get('/halaman_utama','Dmscontroller@index');
	Route::get('logout', 'DmsController@logout');


});*/


//produsen
Route::post('/produsen/store', 'Dmscontroller@produsen_store');
Route::get('/produsen/edit/{no_id}','Dmscontroller@produsen_edit');
Route::post('/produsen/update','Dmscontroller@produsen_update');
Route::get('/produsen/delete/{no_id}','Dmscontroller@produsen_delete');


//jenis_dokumen
Route::post('/dokumen/store','Dmscontroller@dokumen_store');
Route::get('/dokumen/edit/{no_id}','Dmscontroller@dokumen_edit');
Route::post('/dokumen/update','Dmscontroller@dokumen_update');
Route::get('/dokumen/delete/{no_id}','Dmscontroller@dokumen_delete');


//user
Route::post('/user/store','Dmscontroller@user_store');
Route::get('/user/edit/{no_id}','Dmscontroller@user_edit');
Route::post('/user/update','Dmscontroller@user_update');
Route::get('/user/delete/{no_id}','Dmscontroller@user_delete');

//file
Route::post('/file/store','Dmscontroller@file_store');
Route::get('/file/edit/{no_id}','Dmscontroller@file_edit');
Route::post('/file/update','Dmscontroller@file_update');
Route::get('/file/delete/{no_id}','Dmscontroller@file_delete');
Route::get('file/download/{no_id}','Dmscontroller@download');