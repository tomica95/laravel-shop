<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Watch;
use App\Models\Brand;

class WatchController extends Controller
{
    public function delete_product(){
   
        
        $id = request('id');

        $watch = Watch::destroy($id);

        if(!$watch){
           
            abort(500);
        }
        else
        {
            $watch = Watch::all();

            return $watch;
            
        }
       

    }

    public function delete_category(){

        $id = request('id');

        $category=Brand::destroy($id);

        if(!$category){

            abort(500);
        }
        else
        {
        
        $category = Brand::all();

        return $category;

        }
    }

    public function insert_product(){
        
        request()->validate([
            'name'=>'required|min:2',
            'description'=>'required|min:2',
            'price'=>'required',
            'id'=>'required'

        ]);

        $watch = new Watch;

        $watch->insert();

        $watches = Watch::all();

        return $watches;


        

    }

    public function insert_category(){

        request()->validate([
            
            'catName'=>'required|min:2',

            'pictureAlt'=>'required|min:2'

        ]);

        $catName = request('catName');

        $pictureAlt = request('pictureAlt');

        $category = new Brand;

        $category->name = $catName;

        $category->src = "Rolex.jpg";

        $category->alt = $pictureAlt;

        $category->save();

        $categories = Brand::all();

        return $categories;

    }


}
