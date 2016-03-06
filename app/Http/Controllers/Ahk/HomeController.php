<?php

namespace App\Http\Controllers\Ahk;
use App\Ahk\Repositories\Industry\IndustryRepository;

/**
 * Home controller.
 *
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   23/11/2015
 */

class HomeController extends BaseController
{
	/**
	 * @var IndustryRepository
	 */
	private $industryRepository;

	public function __construct(IndustryRepository $industryRepository)
	{
		parent::__construct();

		$this->industryRepository = $industryRepository;
	}

	/**
	 * Display the home resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function home()
	{
		$industries = $this->industryRepository->all()->get();

		return view('ahk.home', compact('industries'));
	}

	/**
	 * Display the about resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function about()
	{
		return view('ahk.about');
	}

	/**
	 * Display the health resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function health()
	{
		return view('ahk.health');
	}

	/**
	 * Display the companies resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function companies()
	{
		return view('ahk.companies');
	}


	/**
	 * Display the terms of use resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function termsOfUse()
	{
		return view('ahk.terms_of_use');
	}
}

