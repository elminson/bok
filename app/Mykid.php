<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mykid extends Model
{

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'dob',
		'number',
		'balance',
		'active',
		'holder_id',
		'parent_user_id',
		'created_at',
		'updated_at',
	];

}
