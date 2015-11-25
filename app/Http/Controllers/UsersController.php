<?php

namespace App\Http\Controllers;

use App\AHK\Repositories\User\UserRepository;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests;
use App\Http\Requests\StoreUserRequest;
use Laracasts\Flash\Flash;

class UsersController extends BaseController {
	/**
	 * @var UserRepository
	 */
	private $userRepository;

	/**
	 * Create a new authentication controller instance.
	 * @param UserRepository $userRepository
	 */
	public function __construct(UserRepository $userRepository)
	{
		parent::__construct();

		$this->middleware('guest', ['except' => 'getLogout']);

		$this->userRepository = $userRepository;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param StoreUserRequest $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreUserRequest $request)
	{
		$userStored = $this->userRepository->store($request);

		dd();
		if ( ! $userStored )
		{
			Flash::error(trans('ahk_messages.unable_to_store_user'));

			return redirect()->back();
		}

		Flash::success(trans('ahk_messages.user_created'));

		return redirect()->route('home_path');
	}
}
