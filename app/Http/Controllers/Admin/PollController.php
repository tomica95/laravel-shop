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

    public function insert_poll(){

        $question = request('question');

        $activ = request('activ');

        request()->validate([
            'question'=>'required|min:2',
            'activ'=>'required|regex:^[0-1]{1}^'
        ]);

        $poll= new Poll;

        $poll->question = $question;

        $poll->active = $activ;

        $poll->save();

        $polls =Poll::all();

        return $polls;


    }
}
