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
    return view('login.blade.php');
});
/*

|--------------------------------------------------------------------------

| Application Routes

|--------------------------------------------------------------------------

*/

// route to show the login form

Route::get('login', array(
	'uses' => 'MainController@showLogin'
));

// route to process the form

Route::post('login', array(
	'uses' => 'MainController@doLogin'
));
Route::get('logout', array(
	'uses' => 'MainController@doLogout'
));
Route::get('/',
function ()
	{
	return view('welcome');
	});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','WelcomeController@index');
Route::get('mail/queue', function(){

	   Mail::later(5,'emails.queued_email',['name'=>'Bonheur'],function($message)
	   {
        $message->to('bonheurtuyikunde2@gmail.com','John Smith')->subject('Welcome');
       });
return'This email should be sent in 5 seconds';
});