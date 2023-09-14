<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add_Dressproduct;
class VegitableController extends Controller
{

    public function AddtoCart(Request $request){
      echo json_encode($request->pro_name);
    }




    public function index(){
       $products = Add_Dressproduct::all();
        return view('vegitable',['products'=>$products]);
    }
}
