<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
    	'clientName',
    	'address',
    	'city',
    	'state',
    	'phoneNumber',
    	'contactName',
    	'contactPhoneNumber'
    ];

    /**
     * @return ClientUnits object. 
     * 
     */
    public function clientUnits()
    {
    		return $this->hasMany('App\ClientUnits');
    }

    public function job()
    {
            return $this->hasMany('App\Job');
    }
}
