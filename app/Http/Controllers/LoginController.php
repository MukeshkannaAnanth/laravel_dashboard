<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function index()
    {
       return view('login');
    }

    
    public function login(Request $request)
    {
        $user = new User();

        $password = Hash::make($request->regpassword);

        $user->name = $request->regname;
        $user->email = $request->regmail; 
        $user->password = $password;  

     
        $user->save();
        Session::put('user_name', $request->regname);
        return redirect()->route('student.dashboard');
    }

    public function loginuser(Request $request)
    {
       
        $hashpassword_db = User::where('email',$request->email)->first();
       
        if(User::where('email',$request->email)->count() > 0){
            $username =  $hashpassword_db->name;
        }else{
            $username =  "invalid name";
        }
        Session::put('user_name', $username);

        try {
            if(Hash::check($request->password, $hashpassword_db->password)) {

                if($request->rememberme==1){
                    setcookie("email",$request->email, time()+(30*24*60*60),'/');
                    setcookie("password",$request->password, time()+(30*24*60*60),'/');
                 }
                 else{
                    setcookie("email","",1,'/');
                    setcookie("password","",1,'/');
                 }
                return response()->json(['status'=>'true','message'=>'Email is correct','session_name'=>$hashpassword_db->name,'rem'=>$request->rememberme]);
                // return redirect()->route('student.mainform');
    
            } else {
                return response()->json(['status'=>'false', 'message'=>'password is wrong']);
            }
        } catch (\Throwable $th) {
            return response()->json(['status'=>$th]);
        }
        
    }


      public function logout(Request $request) {
        Session::flush();
        Auth::logout();
        return redirect()->route('student.Login');
        
      }
}
