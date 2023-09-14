<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Addcustomer;
use App\Models\Billing;
use DB;

class BillinglistComponent extends Controller
{
    public function index(){
        if (!Session::get('user_name')){
            return view('login');
        }else{
            $billings =  Billing::select('billing_no',DB::raw("count(billing_no) AS counting"))->groupBy('billing_no')->get();
            return view('billinglist',['billings'=>$billings]);       
        } 
        
    }
}
