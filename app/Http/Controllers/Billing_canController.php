<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;//Use at top of the page
use App\Models\Billing_can;


class Billing_canController extends Controller
{
    public function index(){
        if (!Session::get('user_name')){
            return view('login');
        }else{
           $getcan = Billing_can::paginate(5);
            return view('Billing_can',['candetails'=>$getcan]);
            
        } 
        
    }

    public function addcans(Request $request){
        $validator = Validator::make($request->all(), [
            'product' => 'required',
            'qty' => 'required',
            'dis' => 'required',
            'total' => 'required',
        ]);
    
        if ($validator->fails())
        {
        return response()->json(['errors'=>$validator->errors()->all()]);
        }else{

           
          try {
              $date = $request->date;
            $type = $request->type;
            $product = $request->product;
            $qty = $request->qty;
            $dis = $request->dis;
            $total = $request->total;
            $rate = $request->rate;
          

          $currentdate = date("Y-m-d",strtotime($date));
          $current_time = date("H:i:s",strtotime($date));
          $can_count = Billing_can::where(DB::raw("(STR_TO_DATE(created_at,'%Y-%m-%d'))"), $currentdate)->count();

            $billingcan = new Billing_can();
            $billingcan->day_can_count = $can_count;
            $billingcan->can = $product;
            $billingcan->date = $date;
            $billingcan->time = $current_time;
            $billingcan->rate = $rate;
            $billingcan->qty = $qty;
            $billingcan->type = $type;
            $billingcan->offer = $dis;
            $billingcan->total = $total;
            $billingcan->save();
            return response()->json(['success'=>200]);
          } catch (\Throwable $th) {
            return response()->json(['error'=>$th]);
          }
        }
   
    }
}
