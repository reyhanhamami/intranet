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
Route::get('login', 'loginController@getLogin')->middleware('guest')->name('login');
Route::post('login', 'loginController@postLogin')->middleware('guest')->name('postLogin');

// route untuk logout
Route::get('logout', 'loginController@logout')->name('logout')->middleware('auth');


// route untuk home dashboard
Route::get('/', 'HomeController@index')->name('dashboard')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('dashboard')->middleware('auth');

// route untuk calender cooporate
Route::get('/events/cooporatecalender', 'EventController@index')->name('events.cooporatecalender')->middleware('auth');
Route::get('/events/addcooporatecalender', 'EventController@add')->name('events.addcooporatecalender')->middleware('auth');
// Route::get('/events/detailcooporatecalender', 'EventController@detail')->name('events.detailcooporatecalender');
Route::post('/events/addcooporatecalender', 'EventController@store')->name('events.storecooporatecalender')->middleware('auth');
Route::get('/events/editcooporatecalender', 'EventController@edit')->name('events.editcooporatecalender')->middleware('auth');
Route::get('/events/updatecooporatecalender', 'EventController@update')->name('events.updatecooporatecalender')->middleware('auth');
// Route::patch('/events/editcooporatecalender', 'EventController@update')->name('events.updatecooporatecalender');
Route::get('/events/deletecooporatecalender', 'EventController@delete')->middleware('auth');

// route untuk helpdesk
Route::get('/helpdesk/helpindex', 'helpdeskController@index')->name('helpdesk.index')->middleware('auth');

// route untuk list employee
Route::get('listemployee/listindex', 'ListemployeeController@index')->name('listemployee.index')->middleware('auth');

// route untuk artikel
Route::get('artikel/artikelindex', 'ArtikelController@index')->name('artikel.index')->middleware('auth');

// route untuk wiki
Route::get('wiki/wikiindex', 'WikiController@index')->name('wiki.index')->middleware('auth');

// route untuk forum diskusi
Route::get('forumdiskusi/forumindex', 'ForumdiskusiController@index')->name('forum.index')->middleware('auth');

// route untuk tasks
Route::get('tasks/tasksindex', 'TasksController@index')->name('tasks.index')->middleware('auth');

// route untuk project
Route::get('projects/projectsindex', 'ProjectsController@index')->name('projects.index')->middleware('auth');

// route untuk polling
Route::get('polling/pollingindex', 'PollingController@index')->name('polling.index')->middleware('auth');

// route untuk education
Route::get('education/productit', 'EducationController@productit')->name('education.productit')->middleware('auth');
