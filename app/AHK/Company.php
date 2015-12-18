<?php

namespace App\AHK;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $fillable = ['name', 'logo', 'name_of_contact_partner'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function industries()
	{
		return $this->hasMany('App\AHK\Industry');
	}
}
