<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Activity;

class UserController extends Controller
{
    public function delete_user(){

        $id=request('id');

        $user = User::find($id);

        $user_first_name = $user->first_name;
        $user->delete();

        

        if(!$user){
            
            abort(404);
        }
        else
        {
        
        $users = User::with('role')->get();

           
        $activity = new Activity;

        $activity->client = request()->server('HTTP_USER_AGENT');

        $activity->description = request()->session()->get('user')->email."-Deleted user with first name: ".$user_first_name;

        $activity->save();
           
            return $users;

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

        $activity = new Activity;

        $activity->client = request()->server('HTTP_USER_AGENT');

        $activity->description = request()->session()->get('user')->email."-Inserted user->(".request('firstName').")";

        $activity->save();

        $user = new User;

        $user->insert_user();

        $allUsers = User::with('role')->get();

        $activity = new Activity;

        $activity->client = request()->server('HTTP_USER_AGENT');

        $activity->description = request()->session()->get('user')->email."-Inserted user";

        $activity->save();

        return $allUsers;

       
    }

    public function show_user_update(){


        $id = request()->id;

        $user['korisnik'] = User::find($id);

        $user['uloga'] = Role::all();


        return $user;


    }

    public function update_user(){

        $first = request()->firstName;

        $last = request()->lastName;

        $email = request()->email;

        $pass = request()->password;

        $id_user = request()->id;

        $role_id = request()->role_id;



        $user = User::find($id_user);

        $user->first_name = $first;

        $user->last_name = $last;

        $user->email = $email;

        $user->password = $pass;

        $user->role_id = $role_id;

        $user->save();

        

        $activity = new Activity;

        $activity->client = request()->server('HTTP_USER_AGENT');

        $activity->description = request()->session()->get('user')->email."-Updated user->(".$user->first_name.")";

        $activity->save();


        return redirect('/admin');

        


    }
}
