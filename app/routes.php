<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return "Hello world";
});

Route::get('/lorem', function()
{
	return "Lorem Ipsum";
});

Route::post('/lorempost', function()
{
	return "Lorem Ipsum";
});

Route::get('/user-gen', function()
{
	return "Random User Generator";
});
