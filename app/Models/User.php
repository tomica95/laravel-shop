<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Activity;

use App\Models\Watch;

class User extends Model
{

    public function role(){

        return $this->belongsTo(Role::class,'role_id','id');
    }

    public function watch_cart(){

        return $this->belongsToMany(Watch::class);
    }
    
    

    public function insert_user(){

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

    }
    
}