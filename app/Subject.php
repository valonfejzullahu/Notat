<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $fillable = [
        'name', 'professor', 'department',
    ];

    protected $table = 'classes';

    public function people(){
        return $this->hasMany(User::class);
    }

}
