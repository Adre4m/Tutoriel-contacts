<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/contacts', 'ContactController@index')->name('contacts');
    Route::get('/add', 'ContactController@addContact');
    Route::post('/add', 'ContactController@add');
    Route::get('/modify{contact}', 'ContactController@modifyContact');
    Route::post('/modify{contact}', 'ContactController@modify');
    Route::get('/delete{contact}', 'ContactController@delete');
});