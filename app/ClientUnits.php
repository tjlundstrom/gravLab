<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientUnits extends Model
{
	protected $fillable = [
		'unitIdentifier',
		'unitModel',
		'permitNumber',
		'client_id'
	];

	public $table = "clientUnits";

	public function client()
	{
			return $this->belongsTo('App\Client');
	}
}
