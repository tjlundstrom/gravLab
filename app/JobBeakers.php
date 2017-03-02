<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobBeakers extends Model
{
    protected $fillable = [
    	'job_id',
    	'jobUnit_id',
    	'prefix',
    	'number',
    	'pre_weight_1',
    	'pre_weight_2',
    	'post_weight_1',
    	'post_weight_2',
    	'runNumber',
    	'description'
    ];

    public $table = "JobBeakers";

    public function jobUnit()
    {
    	return $this->belongsTo('App\JobUnit', 'jobUnit_id');
    }

    public function job()
    {
        return $this->belongsTo('App\Job', 'job_id');
    }
}
