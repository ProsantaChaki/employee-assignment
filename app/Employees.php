<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //
    protected $fillable = [
        'name',
        'emoplyee_no',
        'designation_id',
        'department',
        'company',
        'salary',
        'joining_date',
        'termination_date',
    ];
}
