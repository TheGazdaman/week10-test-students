<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function detention () 
    {
        return $this->hasMany('App\Detention');
    }
    
}
