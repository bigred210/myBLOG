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

Route::get('/', 'HomeController@portfolio');
Route::get('/sayhello/{name}', 'HomeController@sayHello');
// Rolldice
Route::get('/rolldice/{guess?}', 'HomeController@rolldice');
// Resume
Route::get('/resume', 'HomeController@resume');
// Portfolio Pages
Route::get('/portfolio/projects', 'HomeController@portfolioProjects');
Route::get('/portfolio/about', 'HomeController@portfolioAbout');
Route::get('/portfolio', 'HomeController@portfolio');
// Post Pages
Route::resource('posts', 'PostsController');

Route::get('orm-test', function ()
{
    $post = Post::find(1);
    $post->delete();
});

Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@goLogin');
Route::get('logout', 'HomeController@logout');