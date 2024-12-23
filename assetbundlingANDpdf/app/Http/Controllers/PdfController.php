<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function download(){
        // $pdf=Pdf::setOption(['dpi'=>150,'defaultFont'=>'arial'])->loadView('pdf.example');
        // $pdf->save('my_pdf.pdf');
        $name="Jose";
        $pdf=Pdf::setPaper('a4','landscape')->loadView('pdf.example',compact('name'));
        return $pdf->stream('example.pdf');
    }
}
