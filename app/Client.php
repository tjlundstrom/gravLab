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
}
