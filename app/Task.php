<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public function com(){

    	return $this->hasMany(com::Class);
    }
}
