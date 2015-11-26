<?php

namespace App\Http\Controllers\Admin;

use App\AHK\Category;
use App\AHK\Notifications\Flash;
use App\AHK\Repositories\Category\CategoryRepository;
use App\Http\Requests;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use Illuminate\Support\Facades\Auth;

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
		$category = new Category();

		return view('admin.articles.categories.create', compact('category'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param StoreCategoryRequest $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreCategoryRequest $request)
	{
		$categoryStored = $this->categoryRepository->store($request, Auth::user());

		if ( ! $categoryStored )
		{
			Flash::error(trans('admin.unable_to_store_category'));

			return redirect()->back();
		}

		Flash::success(trans('admin.category_created'));

		return redirect()->route('admin.articles.categories.edit', $categoryStored);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$category = $this->categoryRepository->getById($id);

		return view('admin.articles.categories.edit', compact('category'));
	}

	/**
	 * Update the specified category in storage.
	 *
	 * @param $id
	 * @param UpdateCategoryRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update($id, UpdateCategoryRequest $request)
	{
		$categorySaved = $this->categoryRepository->updateById($id, $request->only('name'));

		if ( ! $categorySaved )
		{
			Flash::error(trans('admin.something_went_wrong'));

			return redirect()->back();
		}

		Flash::success(trans('admin.category_updated'));

		return redirect()->route('admin.articles.categories.edit', $categorySaved);
	}
}
