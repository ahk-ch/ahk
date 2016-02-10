<?php
/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   25/11/2015
 */

namespace App\Ahk\Repositories\User;


use App\Ahk\Role;
use App\Ahk\User;
use App\Http\Requests\Ahk\StoreUserRequest;

interface UserRepository
{

	/**
	 * Store a user on the storage
	 * @param array $data
	 * @return User|false
	 */
	public function store(array $data);

	/**
	 * Assign company representative role to the given user
	 * @param User $user
	 * @return User|bool
	 */
	public function assignCompanyRepresentativeRole(User $user);


	/**
	 * Assign a role to the given user
	 * @param User $user
	 * @param Role $role
	 * @return
	 */
	public function assignRole(User $user, Role $role);

	/**
	 * Check whether the given user has role of company representative
	 * @param User $user
	 * @return bool
	 */
	public function hasCompanyRepresentativeRole(User $user);


	/**
	 * Check whether the given user has role of company representative
	 * @param User $user
	 * @param $roleName
	 * @return User|false
	 */
	public function hasRole(User $user, $roleName);

	/**
	 * Enable user account
	 * @param $token
	 * @return User|false
	 */
	public function confirmEmail($token);
}