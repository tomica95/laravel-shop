<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Watch;
use App\Models\Brand;
use App\Models\Role;
use App\Models\Poll;
use App\Models\PollAnswer;
use App\Models\Activity;


class AdminController extends Controller
{
    //
    public function index(){

        
        $data['users'] = User::with('role')->get(); //return back users

        $data['watches'] = Watch::all(); //return back watches

        $data['categories'] = Brand::all(); //return back categories

        $data['roles'] = Role::all(); //return back roles

        $data['polls'] = Poll::all(); //return back polls

        $data['answers'] = PollAnswer::with('question')->get();

        $data['activities'] = Activity::all();

        return view('admin_panel.admin', $data);
    }

    public function sort_desc(){

        $activities = Activity::orderBy('updated_at','desc')->get();

        return $activities;

    }
}
