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


// route untuk login
    Route::get('login', 'loginController@getLogin')->name('login');
    Route::post('login', 'loginController@login')->name('postLogin');
    
    
    // route untuk logout
    Route::get('logout', 'loginController@logout')->name('logout')->middleware('auth');
    
    
    // route untuk home dashboard
    Route::group(['middleware' => ['auth']], function(){
        Route::get('/', 'HomeController@dashboard');
        Route::get('/home', 'HomeController@dashboard')->name('dashboard');
        Route::get('/changepassword', 'HomeController@changepassword')->name('changepassword');
        Route::post('/changepassword','HomeController@postpassword')->name('postpassword');
});


// route untuk calender cooporate
Route::group(['middleware' => ['auth']], function(){
    Route::get('/events/cooporatecalender', 'EventController@index')->name('events.cooporatecalender');
    Route::get('/events/addcooporatecalender', 'EventController@add')->name('events.addcooporatecalender');
    Route::post('/events/addcooporatecalender', 'EventController@store')->name('events.storecooporatecalender');
    Route::get('/events/editcooporatecalender', 'EventController@edit')->name('events.editcooporatecalender');
    Route::get('events/{event}/geteditcooporatecalender', 'EventController@getedit');
    Route::patch('events/{event}', 'EventController@update');
    Route::delete('events/{event}', 'EventController@destroy');
});

// untuk calender personal 
Route::group(['middleware' => ['auth']], function(){
    Route::get('/personalevent/personalevent', 'PersonalController@index')->name('personalevent');
    Route::get('/personalevent/addpersonalevent', 'PersonalController@add')->name('addpersonalevent');
    Route::post('/personalevent/addpersonalevent', 'PersonalController@store')->name('storepersonalevent');
    Route::get('/personalevent/editpersonalevent', 'PersonalController@edit')->name('editpersonalevent');
    Route::get('personalevent/{personal}/geteditpersonalevent', 'PersonalController@getedit');
    Route::patch('personalevent/{personal}', 'PersonalController@update');
    Route::delete('personalevent/{personal}', 'PersonalController@destroy');
});
    
// route untuk helpdesk
Route::get('/helpdesk/helpindex', 'helpdeskController@index')->name('helpdesk.index');


// route untuk list employee
Route::group(['middlware' => ['auth']], function(){

    Route::get('listemployee/listindex', 'ListemployeeController@index')->name('listemployee');
    Route::get('listemployee/addlistindex', 'ListemployeeController@addlist')->name('addlistemployee');
    Route::get('listemployee/cari', 'ListemployeeController@cari');
    Route::post('listemployee/addlistindex', 'ListemployeeController@store')->name('storelistemployee');
    Route::get('listemployee/detail/{listemployee}', 'ListemployeeController@detail');
    Route::get('listemployee/{listemployee}/editemployee', 'ListemployeeController@edit');
    Route::patch('listemployee/{listemployee}', 'ListemployeeController@update');
    Route::delete('listemployee/{listemployee}', 'ListemployeeController@destroy');
});


// route untuk artikel
Route::group(['middleware' => ['auth']], function(){

    Route::get('artikel/artikelindex', 'ArtikelController@index')->name('artikel.index');
    Route::get('artikel/addartikelindex', 'ArtikelController@addartikel')->name('addartikel');
    Route::post('artikel/addartikelindex', 'ArtikelController@store')->name('storeartikel');
    Route::get('artikel/{artikel}/editartikel', 'ArtikelController@edit')->name('editartikel');
    Route::patch('artikel/{artikel}', 'ArtikelController@update');
    Route::delete('artikel/{artikel}', 'ArtikelController@destroy');
    Route::get('artikel/{artikel}/detail', 'ArtikelController@detail')->name('detailartikel');
});


// route untuk wiki
Route::get('wiki/wikiindex', 'WikiController@index')->name('wiki.index');


// route untuk forum diskusi
Route::group(['middlware' => ['auth']], function(){

    Route::get('forumdiskusi/forumindex', 'ForumdiskusiController@index')->name('forum.index');
    Route::get('forumdiskusi/post', 'ForumdiskusiController@post')->name('postforum');
    Route::post('forumdiskusi/post', 'ForumdiskusiController@store')->name('storediskusi');
    Route::get('forumdiskusi/topic/{forum}', 'ForumdiskusiController@topic');
});

// route untuk tasks
Route::group(['middleware' => ['auth']], function(){

    Route::get('tasks/tasksindex', 'TasksController@index')->name('tasks.index');
    Route::get('tasks/add', 'TasksController@add')->name('addtasks');
    Route::post('tasks/add', 'TasksController@store')->name('storetasks');
    Route::delete('tasks/{tasks}', 'TasksController@destroy');
});



// route untuk project
Route::group(['middleware' => ['auth']], function(){

    Route::get('projects/projectsindex', 'ProjectsController@index')->name('projects.index');
    Route::get('projects/add', 'ProjectsController@create')->name('addprojects');
    Route::get('projects/detail', 'ProjectsController@detail')->name('detailprojects');
    Route::post('projects/add', 'ProjectsController@store')->name('storeprojects');
    Route::get('projects/edit/{projects}', 'ProjectsController@edit');
    Route::patch('projects/edit/{projects}', 'ProjectsController@update');
    Route::delete('projects/delete/{projects}', 'ProjectsController@destroy');
});


// route untuk polling
Route::get('polling/pollingindex', 'PollingController@index')->name('polling.index');


// route untuk education
Route::group(['middleware' => ['auth']], function(){

    Route::get('education/productit', 'EducationController@productit')->name('education.productit');
    Route::get('education/cari', 'EducationController@cari')->name('education.cari');
    Route::get('education/addproductit', 'EducationController@addproductit')->name('education.addproductit');
    Route::post('education/addproductit', 'EducationController@storeproductit')->name('storeproductit');
    Route::get('education/openpdf/{education}', 'EducationController@openpdf');
    Route::get('education/{education}/editproductit', 'EducationController@editproductit');
    Route::patch('education/{education}', 'EducationController@updateproductit');
    Route::delete('education/{education}', 'EducationController@destroyproductit');
});


// route untuk pengumuman 
Route::group(['middleware' => ['auth']], function(){

    Route::get('pengumuman/pengumumanindex', 'PengumumanController@index')->name('pengumuman');
    Route::get('pengumuman/addpengumuman', 'PengumumanController@add')->name('addpengumuman');
    Route::post('pengumuman/addpengumuman', 'PengumumanController@store')->name('storepengumuman');
    Route::delete('pengumuman/{pengumuman}', 'PengumumanController@destroy');
    Route::get('pengumuman/{pengumuman}/editpengumuman', 'PengumumanController@edit')->name('editpengumuman');
    Route::patch('pengumuman/{pengumuman}', 'PengumumanController@update');
});

// route untuk pencerahan
Route::group(['middleware' => ['auth']], function(){

    Route::get('pencerahan/pencerahanindex', 'PencerahanController@index')->name('pencerahan');
    Route::get('pencerahan/addpencerahan', 'PencerahanController@add')->name('addpencerahan');
    Route::post('pencerahan/addpencerahan', 'PencerahanController@store')->name('storepencerahan');
    Route::get('pencerahan/{pencerahan}/editpencerahan', 'PencerahanController@edit')->name('editpencerahan');
    Route::patch('pencerahan/{pencerahan}', 'PencerahanController@update')->name('updatepencerahan');
    Route::delete('pencerahan/{pencerahan}', 'PencerahanController@destroy')->name('destroypencerahan');
});
