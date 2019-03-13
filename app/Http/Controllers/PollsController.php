<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Poll;

use App\Models\PollAnswer;

class PollsController extends Controller
{
   public function insert_answer(){

        $id_answer = request('id');

        $newAnswer =PollAnswer::find($id_answer);

        $newAnswer->sum = $newAnswer->sum + 1;

        $newAnswer->save();

        $answer = PollAnswer::all();

        return $answer;

    

        
   }
}
