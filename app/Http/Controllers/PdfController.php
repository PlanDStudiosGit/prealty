<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index(){
        return view('front.contract.contractpdf');
    }





public function contract(Request $request)
{
    //   $aa=$request->all();
    //     print_r($aa);exit;

    // Get the data from the form
    $name =$request->input('name');
    $email = $request->input('email');
    $signature = $request->input('signature');
  

    // Generate the PDF using Dompdf
    $pdf = \PDF::loadView('front.contract.pdf', compact('name', 'email', 'signature'));
   
    // Return the PDF as a response
    return $pdf->stream('invoice.pdf');
}


}
