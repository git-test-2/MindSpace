<?php

//use App\Http\Controllers\QuoteController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/quotes', 'QuoteController@index')->name('quotes');

});



Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/index', 'AdminController@index')->name('index'); // http://mindspace/admin/index
    Route::get('/quote', 'AdminController@quote')->name('quote'); // http://mindspace/admin/quote

    Route::resource('/quotes','AdminQuoteController'); // http://mindspace/admin/index

});
