<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Watch;

class AdminController extends Controller
{
    //
    public function index(){

        
        $data['users'] = User::all();

        $data['watches'] = Watch::all();


        return view('admin_panel.admin', $data);
    }
}
