<?php

namespace App\Http\Controllers;
use Session;
use File;
use DB;
use Illuminate\Http\Request;
use App\Models\Company;
class CompanyeditController extends Controller
{
    public function index($id){
       


        if (!Session::get('user_name')){
            return view('login');
        }else{
            $editcompany = Company::find($id);
            return view('companyedit',compact('editcompany')); 
        } 
    }

    public function editcompany(Request $request){
        $id = $request->companyid;

        $company = Company::find($id);

        if ($request->hasFile('company_image')){
          $image_path = public_path("brand_image/".$company->company_brand);
          if (File::exists($image_path)) {
              File::delete($image_path);
          }
          $bannerImage = $request->file('company_image');
          $imgName = $bannerImage->getClientOriginalName();
          $destinationPath = public_path('brand_image');
          $bannerImage->move($destinationPath, $imgName);
        } else {
          $imgName = $company->company_brand;
        }     
        
 


        $company->company_name = $request->companyname;
        $company->company_no = $request->company_no;
        $company->company_brand = $imgName;
        $company->company_email = $request->company_email;
        $company->company_mobile = $request->company_mobile;
        $company->company_gst = $request->company_gst;
        $company->company_address = $request->company_addr;
        $company->company_city = $request->company_city;
        $company->company_state = $request->company_state;
        $company->customer_code = $request->customer_code;
        $company->update();
        return redirect()->route('company.list');
    }

    public function deletecompany(Request $request)
    {
       
        try {
            $company = Company::find($request->id);

            $image_path = public_path("brand_image/".$company->company_brand);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $company->delete();

          
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
