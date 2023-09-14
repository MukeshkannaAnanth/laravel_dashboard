<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index()
    {
        if (!Session::get('user_name')){
            return view('login');
        }else{
            return view('navbar');
        }   
    }
}
