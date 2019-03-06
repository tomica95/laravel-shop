<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

class HomeController extends Controller
{
    public function index()
    {   
        $brands['brands'] = Brand::all();


        return view('welcome',$brands);
    }

  

    
}
