<?php

use App\Http\Controllers\PropinsiController;
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
Route::get('segi-empat/inputSegiEmpat','SegiEmpatController@inputSegiEmpat')->name('segi-empat.inputSegiEmpat');
Route::post('segi-empat/hasil','SegiEmpatController@hasil')->name('segi-empat.hasil');
Route::get('segi-empat/inputBalok','SegiEmpatController@inputBalok')->name('segi-empat.inputBalok');
Route::post('segi-empat/hasilBalok','SegiEmpatController@hasilBalok')->name('segi-empat.hasilBalok');
Route::resource('propinsi','PropinsiController');
Route::resource('kota','KotaController');
Route::resource('mahasiswa','MahasiswaController');
Route::resource('jurusan','JurusanController');
