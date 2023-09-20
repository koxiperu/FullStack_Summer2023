<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function create(){
        return view('users.register');
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>['required','min:3'], //max:28 //AND 
            'email'=>['required', 'email',Rule::unique('users', 'email')],
            'password'=>'required'
            //'password'=>['required', Password::min(6)->mixedCase()->numbers()->symbols()]
            //one other cool method is uncompromised(number) >> it checjs the password has been found less than x times in data leaks
            //'password'=>'required|confirmed|min:6', //OR
        ]);
        //hash the password because we're good devs. To do it we use bcrypt()
        $formFields['password']=bcrypt($formFields['password']);
        //create the new user
        $user=User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message','User created successfully. Welcome to home, sweety!');
    }
    public function logout(Request $request){
        auth()->logout();
        //this will remove the authentification info from our session . Additional requirement to invalidate their session and needed to regenerate the user token
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'Bye-bye, sweety...');
    }
    public function login(){
        return view('users.login');
    }
    public function authenticate(Request $request){
        $formFields=$request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
        ]);
        if(auth()->attempt($formFields)){     //method that checks if that user exist in our db, the result is login or false
            //generate a new session (to store the logged user data)
            $request->session()->regenerate();
            //redirect to homepage with a confirmation message
            return redirect('/')->with('message', 'You are logged in');
        }
        //go back to login form with error message for email filed
        //withErrors() allows to pass an error message instead of a flash message
        return back()->withErrors(['email'=> 'Invalid credentials...']);
        //we dont write the exact error message to prevent people spaming random emails to find out with ones are used
    }
}
