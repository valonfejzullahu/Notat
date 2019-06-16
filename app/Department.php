<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function classes(){
        return $this->hasMany(Subject::class);
    }
}
