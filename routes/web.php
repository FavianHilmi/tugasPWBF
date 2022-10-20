<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PostController;

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
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/page1', function () {
    return view('Page01');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/dashboard','App\Http\Controllers\PagesController@dashboard');
Route::get('/anak','App\Http\Controllers\PagesController@anak');
Route::get('/penimbangan','App\Http\Controllers\PagesController@penimbangan');
Route::get('/ibuhamil','App\Http\Controllers\PagesController@ibuhamil');
Route::get('/vitamin','App\Http\Controllers\PagesController@vitamin');
Route::get('/laporandataanak','App\Http\Controllers\PagesController@laporandataanak');
Route::get('/laporanimmunisasi','App\Http\Controllers\PagesController@laporanimmunissasi');
Route::get('/laporanpenimbangan','App\Http\Controllers\PagesController@laporanpenimbangan');
Route::get('/laporandataibu','App\Http\Controllers\PagesController@laporandataibu');
Route::get('/artikel','App\Http\Controllers\PagesController@artikel');
Route::get('/tambahibuhamil','App\Http\Controllers\PagesController@tambahibuhamil');
Route::post('/tambahibuhamil','App\Http\Controllers\PagesController@store');
