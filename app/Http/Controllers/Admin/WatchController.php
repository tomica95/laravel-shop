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
            'brand_id'=>'required',
            'src'=>'required|image|mimes:jpg,jpeg,png|max:2048',
            'alt'=>'required|min:2'

        ]);

        $pictureAlt = request('alt');

        $image = request()->file('src');

        $src = time().$image->getClientOriginalName();

        $image->move(public_path('/img'),$src);

       
        $id = request('brand_id');

        $name = request('name');

        $description = request('description');

        $price = request('price');

        $watch = new Watch;

        $watch->name = $name;

        $watch->description = $description;

        $watch->price = $price;

        $watch->src = $src ;

        $watch->alt = $pictureAlt;

        $watch->brand_id = $id;

        $watch->save();

        

        return redirect()->back();


        

    }

    public function insert_category(){

        request()->validate([
            
            'catName'=>'required|min:2',

            'alt'=>'required|min:2',

            'src'=>'required|image|mimes:jpg,jpeg,png|max:2048'

        ]);

        $catName = request('catName');

        $pictureAlt = request('alt');

        $image = request()->file('src');

        $src = time().$image->getClientOriginalName();
        
        $image->move(public_path('/img'),$src);

        $category = new Brand;

        $category->name = $catName;

        $category->src = $src;

        $category->alt = $pictureAlt;

        $category->save();

        return redirect()->back();

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
            'src'=>'required|image|mimes:jpg,jpeg,png|max:2048',
            'alt'=>'required|min:2'
        ]);

        $id_watch = request()->id;

        $name = request()->name;

        $description = request()->description;

        $price = request()->price;

        $image = request()->file('src');

        $src = time().$image->getClientOriginalName();
        
        $image->move(public_path('/img'),$src);

        $alt = request()->alt;


        $watch = Watch::find($id_watch);

        $watch->name = $name;

        $watch->description = $description;

        $watch->price = $price;

        $watch->src = $src;

        $watch->alt = $alt;



        $watch->save();


        return redirect('/admin');
        


    }


}
