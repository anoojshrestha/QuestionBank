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

Route::get('main', function () {
    return view('main');
});

Route::get('askquestion','AskQuestion@showform');

Route::post('submitquestion','AskQuestion@savequestion');

Route::get('saveprocess', function(){
	return view('questions.saveprocess');
})->middleware('auth');

Route::get('category/{name}', 'SearchController@showCategoryQuestion');

Route::get('question/{id}','QuestionController@showDetail');

Route::get('search','SearchController@showSearchResult');

Route::auth();

Route::get('/home', 'HomeController@index');
