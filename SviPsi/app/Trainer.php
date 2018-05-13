<?php

namespace App;

//Class which implements Illuminate\Contracts\Auth\Authenticatable
use Illuminate\Foundation\Auth\User as Authenticatable;

class Trainer extends Authenticatable
{
    protected $fillable = [
    'name', 'email', 'password','description',
    ];

    protected $hidden = [
    'password', 'remember_token',
    ];

    public function dog()
    {
        return $this->hasMany('App\Dog');
    }

}
