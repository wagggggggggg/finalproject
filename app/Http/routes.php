<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
->where('slug', '[\w\d\-\_]+')
*/


//Route for projects and project slug
Route::get('project/{slug}', ['as' => 'project.single', 'uses' => 'ProjectController@getSingle']);
Route::get('project', ['uses' => 'ProjectController@getIndex', 'as' => 'project.index']);

//Route for pages, faq, archive and home
Route::get('faq', 'PagesController@getFaq');
Route::get('archive', 'PagesController@getArchive');
Route::get('/', 'PagesController@getIndex');

//Resource controller for CRUD projects
Route::resource('posts', 'PostController');

//Route password reset emails
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

// comments
Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

//Laravel authentication out of the box
Route::auth();


Route::get('/home', 'HomeController@index');
