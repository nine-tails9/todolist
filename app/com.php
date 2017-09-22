<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class com extends Model
{
    //
    public function task(){

    	return $this->belongsTo(Task::class);

    }
}
