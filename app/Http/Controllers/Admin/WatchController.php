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

        $id = request('id');

        $name = request('name');

        $description = request('description');

        $price = request('price');

        $watch = new Watch;

        $watch->name = $name;

        $watch->description = $description;

        $watch->src = "Slika.jgp";

        $watch->alt = "Kita";

        $watch->price = $price;

        $watch->brand_id = $id;

        $watch->save();

        $watches = Watch::all();

        return $watches;


        

    }


}
