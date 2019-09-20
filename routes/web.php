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
Route::get('logout', 'loginController@logout')->name('logout')->middleware('auth');


// route untuk home dashboard
// Route::middleware('auth')->group(function(){
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('/home', 'HomeController@index')->name('dashboard');
// });

// route untuk calender cooporate
// Route::middleware('auth')->group(function (){
    Route::get('/events/cooporatecalender', 'EventController@index')->name('events.cooporatecalender');
    Route::get('/events/addcooporatecalender', 'EventController@add')->name('events.addcooporatecalender');
    Route::post('/events/addcooporatecalender', 'EventController@store')->name('events.storecooporatecalender');
    Route::get('/events/editcooporatecalender', 'EventController@edit')->name('events.editcooporatecalender');
    Route::get('events/{event}/geteditcooporatecalender', 'EventController@getedit');
    Route::patch('events/{event}', 'EventController@update');
    Route::delete('events/{event}', 'EventController@destroy');
// });
// untuk calender personal 
    Route::get('/personalevent/personalevent', 'PersonalController@index')->name('personalevent');
    Route::get('/personalevent/addpersonalevent', 'PersonalController@add')->name('addpersonalevent');
    Route::post('/personalevent/addpersonalevent', 'PersonalController@store')->name('storepersonalevent');
    Route::get('/personalevent/editpersonalevent', 'PersonalController@edit')->name('editpersonalevent');
    Route::get('personalevent/{personal}/geteditpersonalevent', 'PersonalController@getedit');
    Route::patch('personalevent/{personal}', 'PersonalController@update');
    Route::delete('personalevent/{personal}', 'PersonalController@destroy');

// route untuk helpdesk
Route::get('/helpdesk/helpindex', 'helpdeskController@index')->name('helpdesk.index');
// ->middleware('auth');

// route untuk list employee
Route::get('listemployee/listindex', 'ListemployeeController@index')->name('listemployee');
Route::get('listemployee/addlistindex', 'ListemployeeController@addlist')->name('addlistemployee');
Route::get('listemployee/cari', 'ListemployeeController@cari');
Route::post('listemployee/addlistindex', 'ListemployeeController@store')->name('storelistemployee');
Route::get('listemployee/detail/{listemployee}', 'ListemployeeController@detail');
Route::get('listemployee/{listemployee}/editemployee', 'ListemployeeController@edit');
Route::patch('listemployee/{listemployee}', 'ListemployeeController@update');
Route::delete('listemployee/{listemployee}', 'ListemployeeController@destroy');
// ->middleware('auth');

// route untuk artikel
Route::get('artikel/artikelindex', 'ArtikelController@index')->name('artikel.index');
Route::get('artikel/addartikelindex', 'ArtikelController@addartikel')->name('addartikel');
Route::post('artikel/addartikelindex', 'ArtikelController@store')->name('storeartikel');
Route::get('artikel/{artikel}/editartikel', 'ArtikelController@edit')->name('editartikel');
Route::patch('artikel/{artikel}', 'ArtikelController@update');
Route::delete('artikel/{artikel}', 'ArtikelController@destroy');
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
Route::get('education/cari', 'EducationController@cari')->name('education.cari');
Route::get('education/addproductit', 'EducationController@addproductit')->name('education.addproductit');
Route::post('education/addproductit', 'EducationController@storeproductit')->name('storeproductit');
Route::get('education/openpdf/{education}', 'EducationController@openpdf');
Route::get('education/{education}/editproductit', 'EducationController@editproductit');
Route::patch('education/{education}', 'EducationController@updateproductit');
Route::delete('education/{education}', 'EducationController@destroyproductit');
// ->middleware('auth');

// route untuk pengumuman 
Route::get('pengumuman/pengumumanindex', 'PengumumanController@index')->name('pengumuman');
Route::get('pengumuman/addpengumuman', 'PengumumanController@add')->name('addpengumuman');
Route::post('pengumuman/addpengumuman', 'PengumumanController@store')->name('storepengumuman');
Route::delete('pengumuman/{pengumuman}', 'PengumumanController@destroy');
Route::get('pengumuman/{pengumuman}/editpengumuman', 'PengumumanController@edit')->name('editpengumuman');
Route::patch('pengumuman/{pengumuman}', 'PengumumanController@update');

// route untuk pencerahan
Route::get('pencerahan/pencerahanindex', 'PencerahanController@index')->name('pencerahan');
Route::get('pencerahan/addpencerahan', 'PencerahanController@add')->name('addpencerahan');
Route::post('pencerahan/addpencerahan', 'PencerahanController@store')->name('storepencerahan');
Route::get('pencerahan/{pencerahan}/editpencerahan', 'PencerahanController@edit')->name('editpencerahan');
Route::patch('pencerahan/{pencerahan}', 'PencerahanController@update')->name('updatepencerahan');
Route::delete('pencerahan/{pencerahan}', 'PencerahanController@destroy')->name('destroypencerahan');
