<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    public $fillable=[
        'teams',
        'startTime',
        'prediction',
        'outcome',
        'league',
        'type',
        'status'
    ];
}
