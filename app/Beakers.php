<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beakers extends Model
{
    protected $fillable = [
    	'prefix',
    	'id',
    	'size'
    ];

    public $timestamps = false;
}
