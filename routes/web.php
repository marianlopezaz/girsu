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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/layoutcert', function() {
    return view('layoutcert');
});

Route::get('/layoutcertPre', function() {
    return view('layoutcertPre');
});

Route::get('/certificados', function () {
    return view('certificados');
});

Route::get('/pdfVirtual', 'CertificadoController@imprimirVirtual');

Route::get('/pdfPre', 'CertificadoController@imprimirPreImpreso');