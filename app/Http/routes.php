<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('projets','ProjetsController');
    Route::get('/competences',['as'=> 'skill','uses' =>'SkillsController@index']);
    Route::get('/contact',['as'=> 'getContact','uses'=>'ContactsController@index']);
    Route::post('/contact',['as'=>'postContact','uses'=>'ContactsController@store']);
    Route::get('/parcours',['as'=>'parcours','uses'=>'ParcoursController@index']);
});
/*
Route::group(['middleware' => 'web'], function () {


});*/
