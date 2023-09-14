<?php

namespace App\Http\Controllers;
use App\Models\Addcustomer;
use Session;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){


        if (!Session::get('user_name')){
            return view('login');
        }else{
            $customers = Addcustomer::all();
        return view('customerlist',['customers'=>$customers]);
        } 
        
    }
}
