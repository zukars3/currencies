<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'CurrenciesController@index')->name('home');
Route::get('/currency', 'CurrenciesController@index');
Route::post('/currency', 'CurrenciesController@distinctCurrency')->name('distinct');
