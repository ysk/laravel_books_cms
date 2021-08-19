<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $dates = [
        'published'
    ];

    function user(){
        return $this->belongsTo('App\User');
    }
}
