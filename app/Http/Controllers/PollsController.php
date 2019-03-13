<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Poll;

use App\Models\PollAnswer;

use App\Models\UserVote;



class PollsController extends Controller
{
   public function insert_answer(){

        //user from session
        $user_id=session()->get('user')->id;
        
        //answer id from data in ajax
        $id_answer = request('id');

        $newAnswer =PollAnswer::find($id_answer);

        $poll_id = $newAnswer->poll_id;

        //pivot table which is used to see if user has voted and for which question
        $voting = UserVote::where([
            'user_id'=>$user_id,
            'poll_id'=>$poll_id
        ])->first();

        if(!$voting){

        $newAnswer->sum = $newAnswer->sum + 1;
        
        //update table poll_answers
        $newAnswer->save();

        $user_vote = new UserVote;

        $user_vote->user_id = $user_id;

        $user_vote->poll_id = $poll_id;
        
        //insert in pivot table
        $user_vote->save();

        $answer = PollAnswer::all();

        return $data = [
            'message' => "Thanks for voting!",
            'answers' => $answer
        ];


        }
        else
        {
            $answer = PollAnswer::all();
            
            return $data = [
                'message' => "You already voted, but you can see poll results",
                'answers' => $answer
            ];

            
        
        }

     

        
   }
}
