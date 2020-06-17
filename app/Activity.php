<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'holder_id',
		'from_account_number',
		'to_account_number',
		'description',
		'transaction_amount',
		'transaction_type',
		'available_balance',
	];

}
