<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Watch;

use App\Models\User;

class CartController extends Controller
{
    public function insert($watch_id){

        $watch = Watch::find($watch_id);

        $user_id = request()->session()->get('user')->id;

        if ($watch->user_cart->contains($user_id))
        {
            abort(403);
        }
        $watch->user_cart()->attach($user_id);


        return $watch->user_cart;
        return redirect()->back();


        

    }
}
