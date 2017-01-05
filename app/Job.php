<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    protected $fillable = [
        'number',
        'client_id',
        'title',
        'type',
        'description'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function jobUnits()
    {
        return $this->hasMany('App\JobUnit');
    }

    public function jobBeakers()
    {
        return $this->hasMany('App\JobBeakers');
    }
}
