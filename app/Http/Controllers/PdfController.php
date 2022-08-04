<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{

	// ei controller er route konta?
    
    public function printpdf(){
    	$mpdf = new \Mpdf\Mpdf([
    		'default_font_size' => 12,
    		'default_font'	=> 'nikosh'
    	]);
    	// return view('printpdf');
    	 // $html = ;
    	 $mpdf->writeHTML(view('printpdf'));
    	 $mpdf->output();
    	 // return $html;
        // return @\PDF::loadHTML($html, 'utf-8')->stream();
    }
    public function pdfhtml(){
    	$output = "আমি কোডিং ভালোবাসি";
    	return $output;
    }
}
