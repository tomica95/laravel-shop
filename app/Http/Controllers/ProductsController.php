<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Watch;

class ProductsController extends Controller
{
    
    public function products($id){

        $products_by_id['products']= Watch::where([
            'brand_id'=>$id
        ])->get();

        

        return view('pages.shop',$products_by_id);



    }

    public function product($id){

        $product['product']=Watch::find($id);

        return view('pages.product',$product);


    }
}
