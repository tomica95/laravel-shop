<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Watch;

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


}
