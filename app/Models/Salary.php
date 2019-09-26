<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{

    protected $fillable = [
        'salary','date',
    ];

    protected $table = 'salaries';

    public function employees()
    {
        return $this->hasMany('App\Models\Employee');
    }

}
