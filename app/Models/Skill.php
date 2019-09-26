<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    protected $fillable = [
        'name',
    ];

    protected $table = 'skills';


    public function employees()
    {
        return $this->belongsToMany('App\Models\Skill');
    }
}
