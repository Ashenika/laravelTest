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

Route::get('login', [
    'as' => 'login', 'uses' => 'Logincontroller@loginView'
]);

Route::get('register', [
    'as' => 'register', 'uses' => 'Logincontroller@registerView'
]);

Route::get('history/{id}', [
    'as' => 'history', 'uses' => 'AccountController@historyView'
]);

Route::get('transaction', [
    'as' => 'transaction', 'uses' => 'AccountController@transactionView'
]);


Route::post('register', [
    'as' => 'register', 'uses' => 'Logincontroller@register'
]);

Route::post('login', [
    'as' => 'login', 'uses' => 'Logincontroller@login'
]);

Route::post('transaction', [
    'as' => 'transaction', 'uses' => 'AccountController@transaction'
]);