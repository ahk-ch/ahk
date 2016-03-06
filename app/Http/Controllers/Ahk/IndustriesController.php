<?php

namespace App\Http\Controllers\Ahk;

use App\Ahk\Repositories\Article\ArticleRepository;
use App\Http\Requests;

class IndustriesController extends BaseController
{
	/**
	 * @var ArticleRepository
	 */
	private $articleRepository;


	/**
	 * CategoriesController constructor.
	 * @param ArticleRepository $articleRepository
	 */
	public function __construct(ArticleRepository $articleRepository)
	{
		parent::__construct();

		$this->articleRepository = $articleRepository;
	}

	/**
	 * Display a listing of the info resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function info()
	{
		return view('ahk.health.info');
	}

	/**
	 * Display a listing of the news resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function news()
	{
		$articles = $this->articleRepository->published()->paginate(6);

		return view('ahk.health.news', compact('articles'));
	}
}
