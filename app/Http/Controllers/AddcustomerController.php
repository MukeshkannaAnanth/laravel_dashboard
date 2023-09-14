<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Addcustomer;
use File;
use Session;

class AddcustomerController extends Controller
{
    public function index(){
        

        if (!Session::get('user_name')){
          return view('login');
      }else{
          return view('addcustomer');
      }
    }

    public function addcustomers(Request $request)
    {

      $orderObj = \DB::table('customer')->select('cust_code')->latest('id')->first();
    if ($orderObj) {
        $orderNr = $orderObj->cust_code;
        $removed1char = substr($orderNr, 1);
        $generateOrder_nr = $stpad = '#' . str_pad($removed1char + 1, 8, "0", STR_PAD_LEFT);
    } else {
        $generateOrder_nr = '#' . str_pad(1, 8, "0", STR_PAD_LEFT);
    }

        $imageName = time().'.'.$request->cust_image->extension();  
       
        $request->cust_image->move(public_path('image'), $imageName); 

        $student = new Addcustomer();
        $student->customername = $request->cust_name;
        $student->customer_mobile = $request->cust_mobile;
        $student->cust_code = $generateOrder_nr;
        $student->customer_image = $imageName;
        $student->customer_addr = $request->cust_addr;
        $student->customer_city = $request->cust_city;
        $student->customer_state = $request->cust_state;
        $student->customer_type = $request->cust_types;
        $student->customer_email = $request->cust_email;
        $student->save();
        return redirect()->route('customer.list');
    }


    public function editcustomers(Request $request)
    {
      try {
        $id = $request->id;

        $customer = Addcustomer::find($id);

        if ($request->hasFile('cust_image')){
          $image_path = public_path("image/".$customer->customer_image);
          if (File::exists($image_path)) {
              File::delete($image_path);
          }
          $bannerImage = $request->file('cust_image');
          $imgName = $bannerImage->getClientOriginalName();
          $destinationPath = public_path('image');
          $bannerImage->move($destinationPath, $imgName);
        } else {
          $imgName = $customer->customer_image;
        }     
        
 


        $customer->customername = $request->cust_name;
        $customer->customer_mobile = $request->cust_mobile;
        $customer->customer_image = $imgName;
        $customer->customer_addr = $request->cust_addr;
        $customer->customer_city = $request->cust_city;
        $customer->customer_state = $request->cust_state;
        $customer->customer_type = $request->cust_types;
        $customer->customer_email = $request->cust_email;
        $customer->update();
        return redirect()->route('customer.list');
    } catch (\Throwable $th) {
        return response()->json(array(
            'success' => false,
           'message' => $th->getMessage(),
            
        ));

    }
        
    }

    public function fetchdata(Request $request)
    {
        $data = Addcustomer::all();
        $output ='';
        foreach($data as $customer){
            $output .= '<tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="../image/'.$customer->customer_image.'" class="avatar avatar-sm me-3" alt="user1">
                </div>
                <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm">'.$customer->customername.'</h6>
                <p class="text-xs text-secondary mb-0">'.$customer->customer_email.'</p>
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">'.$customer->customer_type.'</p>
              <p class="text-xs text-secondary mb-0">'.$customer->customername.'</p>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-success">'.$customer->cust_code.'</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">'.$customer->customer_mobile.'</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">'.$customer->customer_type.'</span>
            </td>
            <td class="align-middle">
              <a href="'.route('edit.customerdataform',$customer->id).'" class="font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                Edit
              </a>&nbsp;
              <a href="#" id="'.$customer->id.'" class="text-secondary font-weight-bold text-xs text-danger deletecustomer" data-toggle="tooltip" data-original-title="Edit user">
                Delete
              </a>
            </td>
          </tr>';
        }
        return response()->json($output);
    }






    public function deletecustomer(Request $request)
    {
       
        try {
            $customer = Addcustomer::find($request->id);

            $image_path = public_path("image/".$customer->customer_image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $customer->delete();

          
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
