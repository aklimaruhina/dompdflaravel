<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{

	// ei controller er route konta?
    
    public function printpdf(){
    	// return view('printpdf');
    	 $html = view('printpdf');
    	 // return $html;
        return @\PDF::loadHTML($html, 'utf-8')->stream();
    }
}
