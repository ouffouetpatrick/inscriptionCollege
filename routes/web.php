<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;

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
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/inscription', 'App\Http\Controllers\InscriptionController@index')->name('admin.inscription');
Route::post('/inscription/store', 'App\Http\Controllers\InscriptionController@store')->name('admin.inscription.store');


Route::get('/connexion', [ConnexionController::class, 'index'])->name('connexion');
Route::post('/authenticate', [ConnexionController::class, 'authenticate'])->name('authenticate');