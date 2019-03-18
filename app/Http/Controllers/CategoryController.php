<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

use App\Models\Watch;

class CategoryController extends Controller
{

    public function sort_by_brand(){

        $brand_id = request('id');

        $watches = Watch::where([

            'brand_id'=>$brand_id

        ])->get();

        return $watches;

    }
    
}
