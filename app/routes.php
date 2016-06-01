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
	return View::make('hello');
});

Route::get('/resume', function() 
{
    return 'This is my Resume page';
});

Route::get('/portfolio', function() 
{
    return 'This is my Portfolio page.';
});

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
        $data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }
});

Route::get('/rolldice/{guess}', function($guess) 
{
        $roll = mt_rand(1,6);
        if ( $roll == $guess){
            $message = 'YOU WIN!';
        } else {
            $message = 'YOU LOSE';
        }
            // below are the 2 ways to write out arrays
        // $data = array('roll' => $roll, 'guess' => $guess, 'message' => $message);
        $data = [
        'roll' => $roll, 
        'guess' => $guess, 
        'message' => $message
        ];

        // dd($data); // -- dump and die() = var_dump() 

        return View::make('roll-dice')->with($data);
});






    //  ___examples___

// Route::get('/sayHello', function() 
// {
//     return 'Hello, Jerod';
// });

// Route::get('/sayHello/{name}', function($name) 
// {
//     return "Hello, $name";
// });

// Route::get('/sayhello/{name?}', function($name) // <-- ? = gives it option to pass value
// {
//     if ($name == "Jerod") {
//         return Redirect::to('/');
//     } else {
//         return "Hello, $name!";
//     }
// });

// Route::get('/sayhello/{name}', function($name) 
// {
//     if ($name == "Jerod") {
//         return Redirect::to('/');
//     } else {
//         return "Hello, $name!";
//     }
// });