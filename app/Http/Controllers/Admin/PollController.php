<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Poll;

class PollController extends Controller
{
    public function delete_poll(){


        $id = request('id');

        $poll = Poll::destroy($id);

        if(!$poll){

            abort(404);
        }
        else
        {
            return Poll::all();
        }


    }
}
