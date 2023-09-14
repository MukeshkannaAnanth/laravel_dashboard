<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Addcustomer;
use App\Models\Company;
use App\Models\Product;
use DB;
class CompanyController extends Controller
{
    public function index(){
        if (!Session::get('user_name')){
            return view('login');
        }else{
            $company = Company::all();
            return view('company',['companys'=>$company]);
        } 
        }

     public function addcompany(Request $request){
        $company = new Company();

        $imageName = time().'.'.$request->company_image->extension();  
       
        $request->company_image->move(public_path('brand_image'), $imageName); 

        $company->company_name = $request->companyname;
        $company->company_no = $request->company_no;
        $company->company_gst = $request->company_gst;
        $company->company_brand = $imageName;
        $company->company_mobile = $request->company_mobile;
        $company->company_address = $request->company_addr;
        $company->company_city = $request->company_city;
        $company->company_state = $request->company_state; 
        $company->company_email = $request->company_email;
        $company->customer_code = $request->customer_code;
        $company->save();
        return redirect()->route('company.list');
     }
   
     public function fetchproduct(Request $request)
    {

        
        $output ='';
        foreach(DB::table('products')->where('product_brand',$request->id)->get() as $product){ 
            $output .= '<tr>
            <td class="align-middle text-center text-sm">
              <span class="text-secondary text-xs font-weight-bold">'.$product->product_name.'</span>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="text-secondary text-xs font-weight-bold">'.$product->product_no.'</span>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="text-secondary text-xs font-weight-bold">'.$product->product_rate.'</span>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="text-secondary text-xs font-weight-bold">'.$product->product_stock.'</span>
            </td>
            <td class="align-middle text-center text-sm">
              <span class="text-secondary text-xs font-weight-bold">'.$product->product_quantity.'</span>
            </td>
            
          </tr>';
        }
        return response()->json($output);
    }

    public function fetchcompany(Request $request)
    {
        $data = Company::all();
        $output ='';
        foreach($data as $company){
            $output .= '<tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="../brand_image/'.$company->company_brand.'" class="avatar avatar-sm me-3" alt="user1">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">'.$company->company_name.'</h6>
                  <p class="text-xs text-secondary mb-0">'.$company->company_email.'</p>
                </div>
              </div>
            </td>
            <td>
              <p class="text-xs font-weight-bold mb-0">'.$company->company_name.'</p>
              
            </td>
            <td class="align-middle text-center text-sm">
              <span class="badge badge-sm bg-gradient-success">'.$company->company_no.'</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">'.DB::table('products')->where('product_brand',$company->company_name)->Count().'</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">'.$company->company_mobile.'</span>
            </td>
          
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">'.$company->company_address.'</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold"><a href="" id="addproduct" data-id="'.$company->company_name.'" data-toggle="modal" data-target="#exampleModal"><img src="../assets/img/addproduct.png" alt="" srcset="" width="40px;" height="30px;"></a></span>
            </td>
            <td class="align-middle">
              <a href="#" data-toggle="modal"  data-target="#getproduct" id="'.$company->company_name.'" class="text-secondary font-weight-bold text-xs text-success getproduct" data-toggle="tooltip" data-original-title="Get Product">
                <img src="../assets/img/stock.png" class="avatar avatar-sm me-1" alt="user1">
              </a> &nbsp;
              <a href="#" data-toggle="modal"  data-target="#getproduct" id="'.$company->company_name.'" class="text-secondary font-weight-bold text-xs text-success getproduct" data-toggle="tooltip" data-original-title="Get Product">
                <i class="fa fa-eye"></i>
              </a> &nbsp;
              <a href="'.route('company.edit',$company->id).'" class="font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                <i class="fas fa-edit"></i>
              </a>&nbsp;
              <a  href="#" id="'.$company->id.'" class="text-secondary font-weight-bold text-xs text-danger deletecompany" data-toggle="tooltip" data-original-title="Edit user">
                <i class="fa fa-trash"></i>
              </a>
             
            </td>
          </tr>';
        }
        return response()->json($output);
    }
}
