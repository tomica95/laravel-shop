<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Poll;
use App\Models\PollAnswer;
use App\Models\Activity;

class PollController extends Controller
{
    public function delete_poll(){


        $id = request('id');

        $poll = Poll::destroy($id);

        $activity = new Activity;

        $activity->client = request()->server('HTTP_USER_AGENT');

        $activity->description = request()->session()->get('user')->email."-Delete poll question with ID(".$id.")";

        $activity->save();

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

        $activity = new Activity;

        $activity->client = request()->server('HTTP_USER_AGENT');

        $activity->description = request()->session()->get('user')->email."- Insert poll question ->".$question;

        $activity->save();

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
    
            if($poll_active){

                $poll_active->active = 0;
    
                 $poll_active->save();

             }

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

        $activity = new Activity;

        $activity->client = request()->server('HTTP_USER_AGENT');

        $activity->description = request()->session()->get('user')->email." - Updated question with id:(".$id.")";

        $activity->save();
      
        return redirect()->back();

    }

    public function insert_answer(){

       $id_question = request('id');

       $answer = request('answer');

       request()->validate([
           
            'id'=>'required|integer',
            'answer'=>'required|min:2'
       ]);

        $activity = new Activity;

        $activity->client = request()->server('HTTP_USER_AGENT');

        $activity->description = request()->session()->get('user')->email." Inserted answer for question with id:(".$id_question.")";

        $activity->save();

       $answer_new = new PollAnswer;

       $answer_new->answer = $answer;

       $answer_new->poll_id = $id_question;

       $answer_new->save();

       return PollAnswer::with('question')->get();

       

       

    }

    public function delete_answer(){

        $id_answer = request('id');

        $answer = PollAnswer::find($id_answer);

        $odgovor = $answer->answer;

        $answer->delete();

        $activity = new Activity;

        $activity->client = request()->server('HTTP_USER_AGENT');

        $activity->description = request()->session()->get('user')->email."Deleted answer ->".$odgovor;

        $activity->save();

        if(!$answer){

            abort(404);
        }
        else
        {
            return PollAnswer::with('question')->get();
        }


        
    }

    public function answer_for_update(){

        $id = request('id');

        $answer = PollAnswer::find($id);

        return $answer;
    }

    public function update_answer(){

        $id = request('id');

        request()->validate([

            'update-answer'=>'required|min:2'
        ]);

        $answer_value = request('update-answer');

        $answer = PollAnswer::find($id);

        $answer->answer = $answer_value;

        
        $answer->save();

        $activity = new Activity;

        $activity->client = request()->server('HTTP_USER_AGENT');

        $activity->description = request()->session()->get('user')->email."- Updated answer ->".request('update-answer');

        $activity->save();

        return redirect()->back();

        

    }
}
