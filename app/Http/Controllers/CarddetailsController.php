<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Billing;
use Illuminate\Http\Request;

class CarddetailsController extends Controller
{
    public function index(){
        return view('carddetails');
    }
}
