<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Activity;

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

            $activity = new Activity;

            $activity->client = request()->server('HTTP_USER_AGENT');

            $activity->description = 'User try to registered with email - '.$user->email;

            $activity->save();
            
            return redirect()->back()->with('Message','Try again');
           

        }
        else
        {
            $activity = new Activity;

            $activity->client = request()->server('HTTP_USER_AGENT');

            $activity->description = 'User registered with email - '.$user->email;

            $activity->save();
            
            request()->session()->put('user',$user);
        
            

        }


        return redirect('/')->with('Message','Successfully registered');

    }

    public function login(){

        $user = User::where([
            'email'=>request()->email,
            'password'=>md5(request()->password)
        ])->first();
        
        if($user){

            request()->session()->put('user',$user);

            $activity = new Activity;

            $activity->client = request()->server('HTTP_USER_AGENT');

            $activity->description = 'User loged in with email -'.$user->email.' and with role -'.request()->session()->get('user')->role->name;

            $activity->save();
        
            return redirect('/');
        }


        return redirect()->back()->with('Message','Email or password incorect');

 
    }

    public function logout(){

        if(request()->session()->has('user')){

            $user_email = request()->session()->get('user')->email;

            request()->session()->forget('user');

            $activity = new Activity;

            $activity->client = request()->server('HTTP_USER_AGENT');

            $activity->description = 'User logged out with email - '.$user_email;

            $activity->save();

            request()->session()->flush();
        }

        return redirect('/');
    }
}
