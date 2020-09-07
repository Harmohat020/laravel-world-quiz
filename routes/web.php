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


//Welcome Page
Route::get('/', function () {
    return view('welcome');
});

//Home Page
Route::get('/home', function () {
    return view('home/index');
});

//Europe routes
Route::get('/Europe', 'EuropeController@showPage');

Route::get('/Europe/result', 'EuropeController@showResultPage');

Route::get('/Europe/learn', 'EuropeController@showLearnPage');

//Africa routes
Route::get('/Africa', 'AfricaController@showPage');

Route::get('/Africa/result', 'AfricaController@showResultPage');

Route::get('/Africa/learn', 'AfricaController@showLearnPage');

//America routes
Route::get('/America', 'AmericaController@showPage');

Route::get('/America/result', 'AmericaController@showResultPage');

Route::get('/America/learn', 'AmericaController@showLearnPage');

//Asia Routes
Route::get('/Asia', 'AsiaController@showPage');

Route::get('/Asia/result', 'AsiaController@showResultPage');

Route::get('/Asia/learn', 'AsiaController@showLearnPage');


