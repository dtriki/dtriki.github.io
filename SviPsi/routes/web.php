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

Route::get('/contact', ['uses' => 'ContactMessageController@create']);
Route::post('/contact', ['uses' => 'ContactMessageController@store','as' => 'contact.store']);

//za google mapu
/*use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;

Route::get('/maps', function () {
    Mapper::map(
        43.3209022,
        21.8957589,
        [
            'zoom' => 13,
            'draggable' => true,
            'marker' => false,
            'eventAfterLoad' =>
            'circleListener (maps[0].shapes[0].circle_0);'
        ]
    );
    return view ('maps');
});*/

Route::get('/maps', 'Map\MapController@index');

//proba za bazu
Route::get( '/proba', function(){
    $users = DB::table('users')->get();
    return view('proba', ['users' => $users]);
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
