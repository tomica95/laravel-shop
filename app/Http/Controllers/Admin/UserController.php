<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    //
    public function users(){

        $users['users']=User::all();


        return view('admin_panel.admin',$users);
    }
}
