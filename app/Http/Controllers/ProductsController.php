<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Watch;

use App\Models\Brand;

class ProductsController extends Controller
{
    
    public function products($id = null){
        
        if($id)
        {

            $data['products']= Watch::where([
                'brand_id'=>$id
            ])->get();

        }
        else
        {
            $data['products']=Watch::all();
        }

        $data['brands']=Brand::all();

        return view('pages.shop',$data);



    }

    public function product($id){

        $products['product']=Watch::find($id);

        

        return view('pages.product',$products);


    }
}
