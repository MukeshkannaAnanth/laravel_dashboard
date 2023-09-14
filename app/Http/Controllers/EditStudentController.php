<?php

namespace App\Http\Controllers;
use App\Models\StudentEdit;
use App\Models\Addcustomer;
use Session;
use Illuminate\Http\Request;

class EditStudentController extends Controller
{
    public function index($id)
    {

        if (!Session::get('user_name')){
            return view('login');
        }else{
            $editdata = Addcustomer::find($id);
            return view('studentedit',compact('editdata'));
        } 

       
    }
}
