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

    public function insert_user(){
        //validacija 
        request()->validate([

            'firstName'=>'required|min:3',
            'lastName'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:3'

        ]);

        $role_id = request('role_id');

        $firstName = request('firstName');

        $lastName = request('lastName');

        $email = request('email');

        $password = request('password');

        $newUser = new User;


        $newUser->first_name = $firstName;

        $newUser->last_name = $lastName;

        $newUser->email = $email;

        $newUser->password = $password;

        $newUser->role_id = $role_id;

        $newUser->save();

        $allUsers = User::all();

        return $allUsers;

       

    }
}
