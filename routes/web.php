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