<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'id',
        'email',
        'name',
        'level',
        'date',      
    ];
}