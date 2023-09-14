<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class FooterController extends Controller
{
    public function index(){

        if (!Session::get('user_name')){
            return view('login');
        }else{
            return view('footer');
        } 
        
    }
}
