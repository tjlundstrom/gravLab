<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 * Description of Job
 *
 * @author taynock
 */
class Job extends Model {
    protected $fillable = [
        'jobNumber',
        'clientID',
        'jobTitle',
        'jobType',
        'jobDescription'
    ];
}
