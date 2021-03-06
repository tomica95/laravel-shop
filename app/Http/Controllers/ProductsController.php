<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Watch;

use App\Models\Brand;

use App\Models\Poll;

use App\Models\PollAnswer;

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

        $data['question'] = Poll::with('answers')->where(

            'active','=',1

        )->first();

        $data['brands']=Brand::all();

        return view('pages.shop',$data);



    }

    public function product($id){

        $products['product']=Watch::find($id);


        $products['product']->visits =  $products['product']->visits + 1;

        $products['product']->save();

        

        

        return view('pages.product',$products);


    }


    public function search(){

        $search = request()->search;

        $watch['watchees']= Watch::where('name', 'like', '%'.$search.'%')->paginate(2);

        return view('pages.searched',$watch);


    }



    
}
