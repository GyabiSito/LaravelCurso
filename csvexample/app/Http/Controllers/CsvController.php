<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Http\Requests\CsvRequest;
use App\Imports\ProductImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    //

    public function index(){
        $products=Product::all();
        return view('index',compact('products'));
    }
    public function import(CsvRequest $csvRequest){
        $file=$csvRequest->file('document_csv');

        try{
            Excel::import(new ProductImport, $file);
            return redirect()->route('index');
        }catch(\Exception $e){
            dd($e);
        }
    }
    public function export(){
        return Excel::download(new ProductsExport, 'products.csv');
    }
}
