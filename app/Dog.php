<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Dog extends Authenticatable
{

    protected $fillable = [
        'name', 'sex', 'race', 'user_id'
    ];

    //hidden attributes
    protected $hidden = [
        'remember_token',
    ];

    public function trainer()
    {
        return $this->belongsTo('App\User');
    }
}
