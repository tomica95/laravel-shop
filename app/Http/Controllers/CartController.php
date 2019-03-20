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


       
        return redirect()->back();

    }

    public function show(){

        $id_user = request()->session()->get('user')->id;

        $user = User::find($id_user)->with('watch_cart')->first();
        $data['products'] = $user->watch_cart;

        $data['price']=$user->watch_cart->sum('price');

        $data['number']=$user->watch_cart->count('watch_id');

        return $data;

    }

    public function delete(){

        $id_user = request()->session()->get('user')->id;

        $user = User::find($id_user)->with('watch_cart')->first();

        foreach($user->watch_cart as $watch){

            $user->watch_cart()->detach($watch->id);

        }

        return redirect('/');
    }
}
