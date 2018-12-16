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
    return view('admin_template');
});
Route::get('dashboard', 'Dashboard@index');
Route::get('master-barang', 'Master@barang');
Route::get('master-customer', 'Master@customer');
Route::get('master-kendaraan', 'Master@kendaraan');
Route::get('master-karyawan', 'Master@karyawan');
Route::get('master-driver', 'Master@driver');
Route::get('master-biaya-driver', 'Master@biaya_driver');
Route::get('master-tujuan', 'Master@tujuan');
Route::get('master-supplier', 'Master@supplier');
Route::post('/addBarang', 'Master@addBarang');