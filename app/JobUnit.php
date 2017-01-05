<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobUnit extends Model
{
    protected $fillable = [
    	'clientUnit_id',
    	'job_id',
        'fuel',
        'load'
    ];

    public $table = "JobUnits";

    public function clientUnit()
    {
        return $this->belongsTo('App\ClientUnits', 'clientUnit_id');
    }

    public function job()
    {
      return $this->belongsTo('App\Job', 'job_id');
    }

    public function jobBeakers()
    {
        return $this->hasMany('App\JobBeakers');
    }
}
