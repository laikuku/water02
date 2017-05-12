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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/video', 'VideoController@index')->name('video');
Route::get('/video/add', function () {
    return view('video.addvideo');
})->name('addVideo');
Route::post('/videoCreate',['as'=>'videoCreate','uses'=>'VideoController@create']);
Route::get('/video/del',['as'=>'delVideo','uses'=>'VideoController@destroy_show']);
Route::get('/video/del/{id}',['as'=>'delVideo_id','uses'=>'VideoController@destroy']);
//下面這寫法是參考網路的 被auth包起來的路由，都要經過middleware才能使用。
Route::auth();
Route::group(['middleware' => 'auth'], function () {


    Route::get('/view', ['as'=>'tasks.index','uses'=>'TaskController@index']);

    Route::get('/admin/contacts/edit/{id}',['as'=>'editContact','uses'=>'AdminContactController@edit']);
    //Route::get('/admin/contacts/create',['as'=>'addContact','uses'=>'AdminContactController@create']);
    Route::get('/admin/contacts/create', function () {
        return view('view1create');
    })->name('addContact');

    Route::post('/adminCreate',['as'=>'adminCreate','uses'=>'AdminContactController@create']);

    Route::get('/admin/contacts/del/{id}',['as'=>'deleteContact','uses'=>'AdminContactController@destroy']);


//Route::post ('/admin/adminUpdate',['as'=>'adminUpdate','uses'=>'AdminContactController@update']);
    Route::post('/adminUpdate', 'AdminContactController@update');
});