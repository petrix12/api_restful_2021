<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getTokens(){
        // return view('home.personal-tokens');resources\views\vendor\passport\authorize.blade.php
        return view('vendor.passport.authorize');
        //return view('welcome');
    }
}
