<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function delete_user(){

        $id=request('id');

        $user = User::destroy($id);

        if(!$user){
            
            abort(404);
        }
        else
        {
            $user = User::all();
           
            return $user;
        }

    }
}
