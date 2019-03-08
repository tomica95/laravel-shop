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
            $user = User::with('role')->get();
           
            return $user;
        }

    }

    public function insert_user(){
        //validacija 
        request()->validate([

            'firstName'=>'required|min:3',
            'lastName'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:3'

        ]);

        $user = new User;

        $user->insert_user();

        $allUsers = User::with('role')->get();

        return $allUsers;

       

    }
}
