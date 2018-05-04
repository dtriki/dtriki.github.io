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
    return view('welcome');
});

Route::get('/trainer', function () {
    return view('trainer');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');

//other routes (dodali za dresera)

Route::get('trainer_register', 'TrainerAuth\RegisterController@showRegistrationForm');
Route::post('trainer_register', 'TrainerAuth\RegisterController@register');

Route::get('/trainer_home', function(){
    return view('trainer.home');
});

// dodate rute za psa

Route::get('dog_register', 'DogAuth\RegisterController@showRegistrationForm');
Route::post('dog_register', 'DogAuth\RegisterController@register');

Route::get('/dog_home', function(){
    return view('dog.home');
});
