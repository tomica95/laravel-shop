<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Poll;
use App\Models\PollAnswer;

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

        request()->validate([
            'question'=>'required|min:2'
            
        ]);

        $poll= new Poll;

        $poll->question = $question;

        $poll->save();

        $polls =Poll::all();

        return $polls;

    }

    public function poll_for_update(){

        $id = request('id');

        $poll = Poll::find($id);

        return $poll;

    }

    public function update_poll(){

        request()->validate([
            'update-question'=>'required|min:2',
            'update-active'=>'required|regex:^[0-1]{1}^'
        ]);

        $id = request('id');

        $question = request('update-question');

        $active = request('update-active');


        //if user wants to change question to active, put question which was active to inactive
        if($active == 1)
        {
            $poll_active = Poll::where([
                'active'=>'1'
            ])->first();
    
            $poll_active->active = 0;
    
            $poll_active->save();

            $poll = Poll::find($id);

            $poll->question = $question;

            $poll->active = $active;

            $poll->save();

        }
        else
        {
            //for case when all poll are inactive

            $poll = Poll::find($id);

            $poll->question = $question;

            $poll->active = $active;

            $poll->save();
        }
      
        return redirect()->back();

    }

    public function insert_answer(){

       $id_question = request('id');

       $answer = request('answer');

       request()->validate([
           
            'id'=>'required|integer',
            'answer'=>'required|min:2'
       ]);

       $answer_new = new PollAnswer;

       $answer_new->answer = $answer;

       $answer_new->poll_id = $id_question;

       $answer_new->save();

       return PollAnswer::with('question')->get();

       

       

    }
}
