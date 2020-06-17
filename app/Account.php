<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	public function transactions()
	{
		return $this->belongsToMany('App\Transaction');
	}
}
