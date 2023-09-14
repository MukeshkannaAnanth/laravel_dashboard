<?php

namespace App\Http\Controllers;
use App\Models\Add_Dressproduct;
use Illuminate\Http\Request;

class Add_DressproductComponent extends Controller
{
    public function index(){
        return view('add_dressproduct');
    }

    public function add_dress(Request $request)
    {
        $imageName = time().'.'.$request->d_img->extension();  
       
        $request->d_img->move(public_path('dress'), $imageName); 

        $student = new Add_Dressproduct();
        $student->Dress_no = $request->d_no;
        $student->Dress_name = $request->d_name;
        $student->Dress_code = $request->d_code;
        $student->Dress_Rate = $request->d_rate;
        $student->Dress_Stock = $request->d_stock;
        $student->cust_code = $request->customer_code;
        $student->dress_type = $request->d_type;
        $student->dress_image = $imageName;

        $student->save();
        return redirect()->route('vegitable');
    }
}
