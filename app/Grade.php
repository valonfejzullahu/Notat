<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function student(){
        return $this->hasOne(User::class);
    }

    public function professor(){
        return $this->hasOne(User::class);
    }

    public function class(){
        return $this->hasOne(Subject::class);
    }
}
