<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Product;
use File;

class ProductController extends Controller
{
    public function index($id)
    {
        if (!Session::get('user_name')){
            return view('login');
        }else{
            $products = Product::where('product_brand',$id)->get();
            return view('product',compact('products'));
        } 
       
        
    }


    public function addproducts(Request $request)
    {

        $imageName = time().'.'.$request->pro_image->extension();  
       
        $request->pro_image->move(public_path('brand'), $imageName); 
  
        $product = new Product();
        $product->product_name = $request->pro_name;
        $product->product_no = $request->pro_no;  
        $product->product_rate = $request->pro_rate;
        $product->product_stock = $request->pro_stock;
        $product->product_quantity = $request->pro_quantity;
        $product->product_brand = $request->pro_brand;
        $product->product_img = $imageName;
        $product->save();
        return redirect()->route('company.list');
    }

    public function editproduct(Request $request)
    {
      try {
        $id = $request->pro_id;

        $product = Product::find($id);

        if ($request->hasFile('pro_image')){
          $image_path = public_path("brand/".$product->product_img);
          if (File::exists($image_path)) {
              File::delete($image_path);
          }
          $bannerImage = $request->file('pro_image');
          $imgName = $bannerImage->getClientOriginalName();
          $destinationPath = public_path('brand');
          $bannerImage->move($destinationPath, $imgName);
        } else {
          $imgName = $product->product_img;
        }     
        
 

        $product->product_name = $request->pro_name;
        $product->product_no = $request->pro_no;  
        $product->product_rate = $request->pro_rate;
        $product->product_stock = $request->pro_stock;
        $product->product_quantity = $request->pro_quantity;
        $product->product_brand = $request->pro_brand;
        $product->product_img = $imgName;
        $product->update();
        return redirect()->route('company.product',$request->pro_brand);
    } catch (\Throwable $th) {
        return response()->json(array(
            'success' => false,
           'message' => $th->getMessage(),
           'id' => $id
            
        ));

    }
        
    }


    public function fetchproductlist(Request $request)
    {

        $data = Product::where('product_brand',$request->product_name)->get();
        $output ='';
        foreach($data as $product){
            $output .= '<tr>
            <td class="align-middle text-center">
              <span class="text-xs font-weight-bold">'.$product->product_brand.'</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-xs font-weight-bold">'.$product->product_name.'</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-xs font-weight-bold">'.$product->product_no.'</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-xs font-weight-bold">'.$product->product_rate.'</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-xs font-weight-bold">'.$product->product_quantity.'</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-xs font-weight-bold">'.$product->product_stock.'</span>
            </td>
            <td>
              <div class="d-flex px-2 py-1">
                <div>
                  <img src="../brand/'.$product->product_img.'" class="avatar avatar-sm me-3" alt="user1">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">'.$product->product_brand.'</h6>
                  <p class="text-xs text-secondary mb-0">'.$product->product_name.'</p>
                </div>
              </div>
            </td>
            <td class="align-middle">
              <a href="'.route('company.edit',$product->id).'" class="font-weight-bold text-xs text-primary" data-toggle="tooltip" data-original-title="Edit user">
                <i class="fas fa-edit"></i>
              </a>&nbsp;
              <a  href="#" id="'.$product->id.'" class="text-secondary font-weight-bold text-xs text-danger deleteproduct" data-toggle="tooltip" data-original-title="Edit user">
                <i class="fa fa-trash"></i>
              </a>
            </td>
          </tr>';
        }
        return response()->json($output);
    }


    public function deleteproduct(Request $request)
    {
       
        try {
            $product = Product::find($request->id);

            $image_path = public_path("brand/".$product->product_img);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $product->delete();

          
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

    public function fetcheditproductlist(Request $request)
    {
       $product = Product::where('id',$request->id)->get();
         return response()->json($product);
    }
}
