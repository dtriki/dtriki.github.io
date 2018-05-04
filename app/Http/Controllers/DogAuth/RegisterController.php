<?php
//RegisterController.php

namespace App\Http\Controllers\DogAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use App\Dog;

//Auth Facade used in guard
use Auth;

class RegisterController extends Controller
{

    protected $redirectPath = 'dog_home';

    public function showRegistrationForm()
    {
        return view('dog.auth.register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $dog = $this->create($request->all());

        $this->guard()->login($dog);

        return redirect($this->redirectPath);
    }

//Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'sex' => 'required',
            'race' => 'required',
        ]);
    }

    protected function create(array $data)
    {
        if (Auth::check())
        {

            return Dog::create([
                'name' => $data['name'],
                'sex' => $data['sex'],
                // pamti u tabeli za rasu broj a ne  naziv!!
                'race' => $data['race'],
                'user_id' => Auth::user()->id,
        ]);
        }
        else
            return "Nije dobro";
    }

//Get the guard to authenticate Dog
    protected function guard()
    {
        return Auth::guard('web_dog');
    }

}
