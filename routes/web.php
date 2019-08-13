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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/events/cooporatecalender', 'EventController@index')->name('events.cooporatecalender');
Route::get('/events/addcooporatecalender', 'EventController@add')->name('events.addcooporatecalender');
// Route::get('/events/detailcooporatecalender', 'EventController@detail')->name('events.detailcooporatecalender');
Route::post('/events/addcooporatecalender', 'EventController@store')->name('events.storecooporatecalender');
Route::get('/events/editcooporatecalender', 'EventController@edit')->name('events.editcooporatecalender');
Route::get('/events/updatecooporatecalender', 'EventController@update')->name('events.updatecooporatecalender');
// Route::patch('/events/editcooporatecalender', 'EventController@update')->name('events.updatecooporatecalender');
Route::get('/events/deletecooporatecalender', 'EventController@delete');