<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\CustomerDataTable;
class FrontendController extends Controller
{
    
	public function index(CustomerDataTable $dataTable){
		return $dataTable->render('customer');
	}
}
