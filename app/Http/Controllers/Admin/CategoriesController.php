<?php

namespace App\Http\Controllers\Admin;

use App\AHK\Repositories\Category\CategoryRepository;
use App\Http\Requests;

class CategoriesController extends BaseController {
	/**
	 * @var CategoryRepository
	 */
	private $categoryRepository;

	/**
	 * CategoriesController constructor.
	 * @param CategoryRepository $categoryRepository
	 */
	public function __construct(CategoryRepository $categoryRepository)
	{
		parent::__construct();

		$this->categoryRepository = $categoryRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$categories = $this->categoryRepository->all()->paginate(10);

		return view('admin.articles.categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.articles.categories.create');
	}

}
