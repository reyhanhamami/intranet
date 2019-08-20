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
Route::get('/administrator/login', function (){
    return view('administrator/login');
});

// route untuk home dashboard
Route::get('/', 'HomeController@index')->name('dashboard');

// route untuk calender cooporate
Route::get('/events/cooporatecalender', 'EventController@index')->name('events.cooporatecalender');
Route::get('/events/addcooporatecalender', 'EventController@add')->name('events.addcooporatecalender');
// Route::get('/events/detailcooporatecalender', 'EventController@detail')->name('events.detailcooporatecalender');
Route::post('/events/addcooporatecalender', 'EventController@store')->name('events.storecooporatecalender');
Route::get('/events/editcooporatecalender', 'EventController@edit')->name('events.editcooporatecalender');
Route::get('/events/updatecooporatecalender', 'EventController@update')->name('events.updatecooporatecalender');
// Route::patch('/events/editcooporatecalender', 'EventController@update')->name('events.updatecooporatecalender');
Route::get('/events/deletecooporatecalender', 'EventController@delete');

// route untuk jobrequest
Route::get('/jobrequest/jobindex', 'JobrequestController@index')->name('jobrequest.index');

// route untuk list employee
Route::get('listemployee/listindex', 'ListemployeeController@index')->name('listemployee.index');

// route untuk artikel
Route::get('artikel/artikelindex', 'ArtikelController@index')->name('artikel.index');

// route untuk wiki
Route::get('wiki/wikiindex', 'WikiController@index')->name('wiki.index');

// route untuk forum diskusi
Route::get('forumdiskusi/forumindex', 'ForumdiskusiController@index')->name('forum.index');

// route untuk tasks
Route::get('tasks/tasksindex', 'TasksController@index')->name('tasks.index');

// route untuk project
Route::get('projects/projectsindex', 'ProjectsController@index')->name('projects.index');

// route untuk polling
Route::get('polling/pollingindex', 'PollingController@index')->name('polling.index');

// route untuk education
Route::get('education/educationindex', 'EducationController@index')->name('education.index');
