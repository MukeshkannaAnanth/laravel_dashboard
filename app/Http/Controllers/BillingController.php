<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Billing;
use App\Models\Product;
use DB;
class BillingController extends Controller
{
    public function index(){
        if (!Session::get('user_name')){
            return view('login');
        }else{
           
            return view('billing');
            
        } 
        
    }


    public function addbilling(Request $request){
        $company = new Billing();

       
        for($i = 0; $i < count($request->input('product_brand')); $i++) {
            Billing::create([
              'billing_no' => $request->input('billing_no'),
              'firstname' => $request->input('fname'),
              'lastname' => $request->input('lname'),
              'email' => $request->input('email'),
              'mobile' => $request->input('mobile'),
              'billing_date' => $request->input('billing_date'),
              'billing_time' => $request->input('billing_time'),
              'payment_mode' => $request->input('payment_mode'),
              'product_brand' => $request->input('product_brand')[$i],
              'product_name' => $request->input('product_name')[$i],
              'product_quantity' => $request->input('product_qty')[$i],
              'product_rate' => $request->input('product_rate')[$i],
              'paid_amt' => $request->input('paid_amt'),
              'balance_amt' => $request->input('balance_amount'),
              'address' => $request->input('address'),
              'city' => $request->input('city'),
              'state' => $request->input('state'),
              'product_total' => $request->input('product_tot')[$i],
              'cust_code' => $request->input('customer_code')
            ]);
          }
      
        return redirect()->route('billinglist');
     }



     public function fetchbrand(Request $request){
         $companys = Company::all();
         foreach($companys as $companys_brand){
             $output[] = '<option value="'.$companys_brand->company_name.'">'.$companys_brand->company_name.'</option>';	
         }
         echo json_encode($output);
     }
     public function fetchbrand_product(Request $request){
        $products = Product::where('product_brand',$request->brand)->get();
        
       
        foreach($products as $products_brand){
            $output[] = '<option value="'.$products_brand->product_name.'">'.$products_brand->product_name.'</option>';	
        }

        echo json_encode(array($output));
    }
    public function product_rate(Request $request){
        $products_rate = Product::where('product_name',$request->product)->get()->first();
        echo json_encode($products_rate->product_rate);
    }
}
