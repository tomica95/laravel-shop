<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Poll extends Model
{
    public function answers(){

        return $this->hasMany(PollAnswer::class,'poll_id','id');
    }
}
