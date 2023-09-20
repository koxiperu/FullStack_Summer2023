<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function create(){
        return view('users.register');
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'firstName'=>['required','min:2'],
            'lastName'=>['required','min:2'], 
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'adress'=>['required', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'zip'=> ['required', 'numeric'],
            'city'=>['required', 'alpha'],
            'bdate'=>['required', 'date', 'before:now'],
            'phone'=>['required', 'regex:/^[0-9()+]+$/'],
            'password'=>['required','confirmed']
        ]);
        $formFields['password']=bcrypt($formFields['password']);
        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');}
        $user=User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message','User created successfully. Welcome home, sweety!');
    }
    public function edit(User $user){
        return view ('users.edit',['user'=>$user]);
    }
    public function update(Request $request, User $user){
        $formFields = $request->validate([
            'firstName'=>['required','min:2'],
            'lastName'=>['required','min:2'], 
            'email'=>['required', 'email'],
            'adress'=>['required', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'zip'=> ['required', 'numeric'],
            'city'=>['required', 'alpha'],
            'bdate'=>['required', 'date', 'before:now'],
            'phone'=>['required', 'regex:/^[0-9()+]+$/'],
            'password'=>['required','confirmed']
        ]);
        $formFields['password']=bcrypt($formFields['password']);
        if($request->hasFile('photo')){
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');}
        $user->update($formFields);
            return redirect('/')->with('message', 'Your personal data were updated successfully');
    } 


    public function logout(Request $request){
        auth()->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect('/')->with('message', 'Bye-bye, come back, sweety...');
    }
    public function login(){
        return view('users.login');
    }
    public function authorise(Request $request){
        $formFields=$request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);
        if (auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are logged in!');
        }
        return back()->withErrors(['email'=>'Invalid credentials']);
    }
}
