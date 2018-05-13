<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vlasnik;

class dbController extends Controller
{
    public function index(){
        $user = auth()->user();
        dump($user);die;
        Return view(‘maps’)->with(‘user’, $user);
    }
}