<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function image()
    {
        return $this->belongsToMany('App\Student');
    }

   
}
