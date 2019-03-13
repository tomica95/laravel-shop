<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollAnswer extends Model
{
    public function question(){

        return $this->belongsTo(Poll::class,'poll_id','id');
    }
}
