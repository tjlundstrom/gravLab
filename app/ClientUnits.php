<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientUnits extends Model
{
	protected $fillable = [
		'id',
		'unitModel',
		'permitNumber'
	];

	public function client()
	{
			return $this->belongsTo('App\Client');
	}
}
