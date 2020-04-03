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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard/dp', function () {
//     return view('dashboard_dep_prod');
// });

Route::get('/', 'HomeController@home');

Route::get('/dp', 'DPController@home');
Route::get('/dp/pemasukan-data-rkat', 'DPController@pemasukanDataRKAT');
Route::get('/dp/rkat-menunggu-persetujuan', 'DPController@RKATMenungguPersetujuan');