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

    public function show(){

        $id_watch = request('id');

        $watch = Watch::find($id_watch);

        return $watch;
    }

    public function update_watch(){

        $validate = request()->validate([
            'name'=>'required|min:2',
            'description'=>'required|min:2',
            'price'=>'required',
            'picture'=>'required',
            'alt'=>'required|min:2'
        ]);

        $id_watch = request()->id;

        $name = request()->name;

        $description = request()->description;

        $price = request()->price;

        $picture = request()->picture;

        $alt = request()->alt;


        $watch = Watch::find($id_watch);

        $watch->name = $name;

        $watch->description = $description;

        $watch->price = $price;

        $watch->src = $picture;

        $watch->alt = $alt;



        $watch->save();


        return redirect('/admin');
        


    }


}
