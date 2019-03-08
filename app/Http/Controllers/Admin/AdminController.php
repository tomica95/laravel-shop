<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Watch;
use App\Models\Brand;
use App\Models\Role;


class AdminController extends Controller
{
    //
    public function index(){

        
        $data['users'] = User::all(); //vraca user-e

        $data['watches'] = Watch::all(); //vraca satove

        $data['categories'] = Brand::all(); //vraca brendove-categorije

        $data['roles'] = Role::all(); //vraca uloge

        return view('admin_panel.admin', $data);
    }
}
