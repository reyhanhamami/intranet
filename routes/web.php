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

// route untuk login
// Route::middleware('guest')->group(function(){
    Route::get('login', 'loginController@getLogin')->name('login');
    Route::post('login', 'loginController@login')->name('postLogin');
// });

// route untuk logout
Route::get('logout', 'loginController@logout')->name('logout');
// ->middleware('auth');


// route untuk home dashboard
// Route::middleware('auth')->group(function(){
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('/home', 'HomeController@index')->name('dashboard');
// });

// route untuk calender cooporate
// Route::middleware('auth')->group(function (){
    Route::get('/events/cooporatecalender', 'EventController@index')->name('events.cooporatecalender');
    Route::get('/events/addcooporatecalender', 'EventController@add')->name('events.addcooporatecalender');
    // Route::get('/events/detailcooporatecalender', 'EventController@detail')->name('events.detailcooporatecalender');
    Route::post('/events/addcooporatecalender', 'EventController@store')->name('events.storecooporatecalender');
    Route::get('/events/editcooporatecalender', 'EventController@edit')->name('events.editcooporatecalender');
    Route::get('/events/updatecooporatecalender', 'EventController@update')->name('events.updatecooporatecalender');
    // Route::patch('/events/editcooporatecalender', 'EventController@update')->name('events.updatecooporatecalender');
    Route::get('/events/deletecooporatecalender', 'EventController@delete');
// });

// route untuk helpdesk
Route::get('/helpdesk/helpindex', 'helpdeskController@index')->name('helpdesk.index');
// ->middleware('auth');

// route untuk list employee
Route::get('listemployee/listindex', 'ListemployeeController@index')->name('listemployee');
Route::get('listemployee/addlistindex', 'ListemployeeController@addlist')->name('addlistemployee');
Route::post('listemployee/addlistindex', 'ListemployeeController@store')->name('storelistemployee');
Route::get('listemployee/{listemployee}/editemployee', 'ListemployeeController@edit');
Route::patch('listemployee/{listemployee}', 'ListemployeeController@update');
Route::delete('listemployee/{listemployee}', 'ListemployeeController@destroy');
// ->middleware('auth');

// route untuk artikel
Route::get('artikel/artikelindex', 'ArtikelController@index')->name('artikel.index');
Route::get('artikel/addartikelindex', 'ArtikelController@addartikel')->name('addartikel');
// ->middleware('auth');

// route untuk wiki
Route::get('wiki/wikiindex', 'WikiController@index')->name('wiki.index');
// ->middleware('auth');

// route untuk forum diskusi
Route::get('forumdiskusi/forumindex', 'ForumdiskusiController@index')->name('forum.index');
// ->middleware('auth');

// route untuk tasks
Route::get('tasks/tasksindex', 'TasksController@index')->name('tasks.index');
// ->middleware('auth');

// route untuk project
Route::get('projects/projectsindex', 'ProjectsController@index')->name('projects.index');
// ->middleware('auth');

// route untuk polling
Route::get('polling/pollingindex', 'PollingController@index')->name('polling.index');
// ->middleware('auth');

// route untuk education
Route::get('education/productit', 'EducationController@productit')->name('education.productit');
Route::get('education/addproductit', 'EducationController@addproductit')->name('education.addproductit');
// ->middleware('auth');

// route untuk pengumuman 
Route::get('pengumuman/pengumumanindex', 'PengumumanController@index')->name('pengumuman');
Route::get('pengumuman/addpengumuman', 'PengumumanController@add')->name('addpengumuman');

// route untuk pencerahan
Route::get('pencerahan/pencerahanindex', 'PencerahanController@index')->name('pencerahan');
Route::get('pencerahan/addpencerahan', 'PencerahanController@add')->name('addpencerahan');
Route::post('pencerahan/addpencerahan', 'PencerahanController@store')->name('storepencerahan');
Route::get('pencerahan/{pencerahan}/editpencerahan', 'PencerahanController@edit')->name('editpencerahan');
Route::patch('pencerahan/{pencerahan}', 'PencerahanController@update')->name('updatepencerahan');
Route::delete('pencerahan/{pencerahan}', 'PencerahanController@destroy')->name('destroypencerahan');
