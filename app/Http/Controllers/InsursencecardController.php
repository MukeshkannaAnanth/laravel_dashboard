<?php

namespace App\Http\Controllers;
use App\Models\Insursencecard;
use Illuminate\Http\Request;

class InsursencecardController extends Controller
{
    public function index(){
        return view('ins_card');
    }

    public function applycard(Request $request) {
         $cards = new Insursencecard();
         $cards->name = $request->name;
         $cards->card_number = $request->card_no;
         $cards->exipry_cod = $request->expiry_date;
         $cards->security_code = $request->security_code;
         $cards->cust_code = $request->customer_code;
         $cards->save();
        return redirect()->route('debitcard');
      }

}
