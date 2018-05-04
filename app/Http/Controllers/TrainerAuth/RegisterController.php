<?php
//RegisterController.php

namespace App\Http\Controllers\TrainerAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

//Trainer Model
use App\Trainer;

//Auth Facade used in guard
use Auth;

class RegisterController extends Controller
{

protected $redirectPath = 'trainer_home';

//shows registration form to trainer
public function showRegistrationForm()
{
return view('trainer.auth.register');
}

//Handles registration request for trainer
public function register(Request $request)
{

//Validates data
$this->validator($request->all())->validate();

//Create trainer
$trainer = $this->create($request->all());

//Authenticates trainer
$this->guard()->login($trainer);

//Redirects trainers
return redirect($this->redirectPath);
}

//Validates user's Input
protected function validator(array $data)
{
return Validator::make($data, [
    'name' => 'required|max:255',
    'email' => 'required|email|max:255|unique:trainers',
    'password' => 'required|min:6|confirmed',
    //dodala sam
    //'birthDate' => 'required|date|date_format:Y-n-j',
    'description' => 'required|max:1000',
]);
}

//Create a new trainer instance after a validation.
protected function create(array $data)
{
return Trainer::create([
    'name' => $data['name'],
    //dodala sam
    //$dateInput=$data['year']."-". $data['month']."-".$data['day'],
    //$dateLocale = \DateTime::createFromFormat('d-m-Y', $dateInput),
    //'birthDate' => $dateLocale,
    'email' => $data['email'],
    'password' => bcrypt($data['password']),
    //dodala sam
    'description' =>$data['description'],

]);
}

//Get the guard to authenticate Trainer
protected function guard()
{
return Auth::guard('web_trainer');
}

}