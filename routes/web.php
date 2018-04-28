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

Route::group(['domain' => 'events.com'], function(){
    Route::any('/', function(){
        return 'My own domain asdasd';
    });
});

Route::get('create-event','CreateEventController@createEvent');
Route::post('create-event','CreateEventController@postCreateEvent');

Route::get('event/{slug}','EventController@getEvent');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
