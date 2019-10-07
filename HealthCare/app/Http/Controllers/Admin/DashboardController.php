<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Service;

class DashboardController extends Controller
{
    //
    public function index()
    {
    	$data = Package::paginate(5);

    	return view('backend.index', ['data'=>$data]);
    }
    public function services(){
    	$data = Service::all();
    	return view('backend.services', ['data'=>$data]);
    
    }
}
