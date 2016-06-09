<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return Redirect::action('HomeController@sayHello', array('Bob'));
		// return View::make('hello');
	}

	public function sayHello($name)
	{
	    $data = array('name' => $name);
	    return View::make('my-first-view')->with($data);
	}

// Resume Page
	public function resume()
	{
   		return View::make('resume');
	}

// Rolldice Page
	public function rolldice($guess) // ? will allow you to have option on using that parameter
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
	}

// Portfolio Page 
	public function portfolioProjects() 
	{
   		return View::make('portfolio-projects');
	}
	public function portfolio()
	{
   		return View::make('portfolio');
	}
	public function portfolioAbout()
	{
   		return View::make('portfolio-about');
	}

// Blog - Posts
    public function login()
    {
        return View::make('posts.login');
    }

        public function goLogin()
    {
        $credentials = [
            'username'=>Input::get('username'),
            'password'=>Input::get('password')
        ];
        $rules = [
            'username' => 'required',
            'password'=>'required'
        ];

        //validating the credentials.
        $validator = Validator::make($credentials,$rules);
        
        //in case the credentials are valid. Try to login the user.
        if($validator->passes())
        {
        
            if(Auth::attempt($credentials))
            {
                 
                //if successfull redirect the user 
                return Redirect::to('posts/create');
            }else {
                
            //else send back the login failure message.
                return Redirect::back()->withInput()->with('failure','username or password is invalid!');
            }
        }else {
            //send back the validation errors.
            return Redirect::back()->withErrors($validator)->withInput();
        }
        
    }


    public function logout()
    {
        Session::flash('successMessage', 'Your have been successfully logged out!');
        Auth::logout();
        return Redirect::to('/login');
    }

}





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
