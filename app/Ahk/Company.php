<?php

namespace App\Ahk;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * @package App\Ahk
 */
class Company extends Model
{
	protected $fillable = ['name', 'logo', 'name_of_contact_partner'];

	/**
	 * Get the industry of this company.
	 */
	public function industry()
	{
		return $this->belongsTo('App\Ahk\Industry');
	}

	/**
	 * Get the country of this company.
	 */
	public function country()
	{
		return $this->belongsTo('App\Ahk\Country');
	}

	/**
	 * Get the services this company requires
	 */
	public function requiresServices()
	{
		return $this->belongsToMany('App\Ahk\Service')
			->wherePivot('requires', true)
			->withTimestamps();
	}

	/**
	 * Get the services this company requires
	 */
	public function offersServices()
	{
		return $this->belongsToMany('App\Ahk\Service')
			->wherePivot('offers', true)
			->withTimestamps();
	}

	/**
	 * Get the services this company requires
	 */
	public function services()
	{
		return $this->belongsToMany('App\Ahk\Service')
			->withTimestamps();
	}
}
