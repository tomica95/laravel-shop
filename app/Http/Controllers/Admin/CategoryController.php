<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;

class CategoryController extends Controller
{
    public function show_category(){

        $id_category = request()->id;

        $category_update = Brand::find($id_category);

        return $category_update;


    }

    public function update_category(){

        $id_category = request()->id;

        $category_update = Brand::find($id_category);

        $name = request()->name;

        $src = request()->src;

        $alt = request()->alt;

        $category_update->name = $name;

        $category_update->src = $src;

        $category_update->alt = $alt;

        $category_update->save();

        return redirect('/admin');


    }
}
