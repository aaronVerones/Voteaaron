<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endorsement extends Model
{
    protected $fillable = [
        'type',
        'individual_name',
        'group_name',
        'position',
        'number_of_members',
        'message', //input as html formatted text. echo with {!! !!}
        'logo', //url for logo
        'status',
    ];

    
}
