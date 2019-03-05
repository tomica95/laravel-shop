<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AuthController extends Controller
{
    //
    public function show(){



        return view('pages.login');
    }


    public function register(){

        request()->validate([
            'firstName'=>'required|min:3|max:15',
            'lastName'=>'required|min:3|max:20',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:100|confirmed'
        ]);

        $user = new User;

        $user->first_name = request()->firstName;

        $user->last_name = request()->lastName;

        $user->email = request()->email;

        $user->password = md5(request()->password);

        $user->role_id = "2";

        $is_register = $user->save();

        if(!$is_register){

            
            return redirect()->back()->with('Message','Try again');

        }


        return redirect()->back()->with('Message','Successfully registered');

    }

    public function login(){

        $user = User::where([
            'email'=>request()->email,
            'password'=>md5(request()->password)
        ])->first();
        
        if($user){

            request()->session()->put('user',$user);
        
            return redirect('/');
        }


        return redirect('/login');


        
    }
}
