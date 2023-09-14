<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;



class StudentController extends Controller
{
    public function index()
    {
        if (!Session::get('user_name')){
            return view('login');
        }else{
            $students = Student::orderBy('id','DESC')->get();
            return view('students',['det'=>$students]);
        }
      
    }

    public function addStudent(Request $request)
    {
        $student = new Student();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $user->last_session = session_id();
        $student->save();
        return response()->json($student);
    }

    public function editStudent(Request $request)
    {
        $data = Student::find($request->id);
        $image_path = public_path("image/dfguyhg.png");

        return response()->json($image_path);
    }

    public function updateStudent(Request $request)
    {
        try {
            $id = $request->id;

            $student = Student::find($id);
            $student->firstname = $request->firstname;
            $student->lastname = $request->lastname;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->update();
            
        return response()->json(array(
            'success' => true,
           'message' =>'success',
            "data" =>$id,
            'user'=>auth()->user()->name
        ));
        } catch (\Throwable $th) {
            return response()->json(array(
                'success' => false,
               'message' => $th->getMessage(),
                
            ));

        }
    }


    public function fetchdata(Request $request)
    {
        $data = Student::all();
        $output ='';
        foreach($data as $dat){
            $output .= '<tr>
             <td>'.$dat->firstname.'</td>
             <td>'.$dat->lastname.'</td>
             <td>'.$dat->email.'</td>
             <td>'.$dat->phone.'</td>
             <td><button class="btn btn-primary editdata" data-bs-toggle="modal" data-bs-target="#StudentModaledit" id="edit_data" value="'.$dat->id.'">edit</button>
             <button class="btn btn-primary deletedata"  id="delete_data" value="'.$dat->id.'">Delete</button></td>
            </tr>';
        }
        return response()->json($output);
    }


    public function deletedata(Request $request)
    {
       
        try {
            $student = Student::find($request->id);
            $student->delete();
            return response()->json(array(
                'success'=>true,
               'message'=>'Data Deleted Successfully!'
            ));

        } catch (\Throwable $th) {
            return response()->json(array(
                'success'=>false,
               'message'=>$th->getMessage()
            ));
        }
    }

    
}
