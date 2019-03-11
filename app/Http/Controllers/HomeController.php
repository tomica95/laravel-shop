<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

use App\Models\Watch;

class HomeController extends Controller
{
    public function index()
    {   
        $data['brands'] = Brand::all();

        $data['watches'] = Watch::orderBy('visits','DESC')
                    ->take(10)
                    ->get();

        


        return view('welcome',$data);
    }

    

  

    
}
