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
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/home', 'HomeController@index');
Route::get('/login', 'LoginController@index');
Route::get('/Haul-Massal', 'NyadranController@index');
Route::get('/Haul-Massal/2022', 'NyadranController@nyadran2022')->name('nyadran2022');
Route::post('/nyadran/submit', 'NyadranController@AjaxRequest');



