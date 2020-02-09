<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    
	//
    public function index()
	{
	    view()->share('pageTitle', "Dashboard");	

	    // show the form
	    return view('home/index');
	}
    //
    public function showLogin()
	{
	    view()->share('pageTitle', "Login");
	    // show the form
	    return view('home/login');
	}

	public function doLogin(Request $request)
	{
		// process the form
		// validate the info, create rules for the inputs
		$rules = [
		    'email'    => 'required|email', // make sure the email is an actual email
		    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		];

		// run the validation rules on the inputs from the form
		$validator = Validator::make($request->all(), $rules);
		//var_dump($validator);
		//die();
		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return redirect('login')
		        ->withErrors($validator) // send back all errors to the login form
		        ->withInput($request->except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
		    $userdata = array(
		        'email'     => $request->get('email'),
		        'password'  => $request->get('password')
		    );

				    // attempt to do the login
		    if (\Auth::attempt($userdata)) {

		        // validation successful!
		        // redirect them to the secure section or whatever
		        // return Redirect::to('secure');
		        // for now we'll just echo success (even though echoing in a controller is bad)
		        return redirect('');

		    } else {        

		        // validation not successful, send back to form 
		        return redirect('login');

		    }

		}


	}

	public function logout(Request $request)
    {
        \Auth::logout();        
        $request->session()->flush();
        return redirect('login')->send();
    }
}
