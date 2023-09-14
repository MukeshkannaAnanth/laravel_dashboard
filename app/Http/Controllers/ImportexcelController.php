<?php

namespace App\Http\Controllers;
use Input;  
use App\Item;  
use DB;  
use Maatwebsite\Excel\Excel;

use Illuminate\Http\Request;
use App\Models\Importexcel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\ToArray;



class ImportexcelController extends Controller
{
    public function index(){
        return view('importexcel');
    }

    public function insertexceldata(Request $request)   
    {  
        $path = $request->file('file')->getRealPath();
        echo json_encode($path);
        exit();
        
        $data = $data[0];
        $insert_data = [];
    
        foreach ($data as $row) {
            $insert_data[] = [
                'name' => $row[0],
                'email' => $row[1],
            ];
        }
    
        if (!empty($insert_data)) {
            DB::table('importexcels')->insert($insert_data);
        }
    
        return back()->with('success', 'Excel Data Imported successfully.');
    } 
}
