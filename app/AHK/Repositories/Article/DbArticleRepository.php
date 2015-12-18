<?php
/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   26/11/2015
 */

namespace App\AHK\Repositories\Article;


use App\AHK\Article;
use App\AHK\Industry;
use App\AHK\Repositories\DbRepository;
use App\AHK\User;
use Illuminate\Database\Eloquent\Collection;

class DbArticleRepository extends DbRepository implements ArticleRepository
{

	/**
	 * Get all articles
	 * @return Collection
	 */
	public function all()
	{
		return Article::with('author', 'industry', 'tags');
	}

	/**
	 * Store an article on the storage
	 * @param User $author
	 * @param array $fillable
	 * @param Industry $industry
	 * @return Article|false
	 */
	public function store(User $author, array $fillable, Industry $industry)
	{
		$article = new Article($fillable);

		$article->assignAuthor($author);

		$article->assignIndustry($industry);

		return $article->save() ? $article : false;
	}

	/**
	 * Update an article given it id.
	 * @param $articleId
	 * @param array $fillable
	 * @param Industry $industry
	 * @return mixed
	 * @internal param $id
	 */
	public function updateById($articleId, array $fillable, Industry $industry)
	{
		$article = $this->getById($articleId);

		$article->fill($fillable);

		$article->assignIndustry($industry);

		return $article->save() ? $article : false;
	}

	/**
	 * Get an article given its id
	 * @param $id
	 */
	public function getById($id)
	{
		return Article::with('author', 'industry', 'tags')
			->where('articles.id', $id)->first();
	}

	/**
	 * Update the tags of an article
	 * @param $id Article id
	 * @param array $tagIds
	 * @return Article|false
	 */
	public function updateTagsById($id, array $tagIds)
	{
		$article = $this->getById($id);

		$article->tags()->sync($tagIds);

		return $article->save() ? $article : false;
	}

	/**
	 * Return published articles
	 * @return mixed
	 */
	public function published()
	{
		return Article::with('author', 'industry', 'tags')->where('publish', true);
	}

	/**
	 * Return unpublished articles
	 * @return mixed
	 */
	public function unpublished()
	{
		return Article::with('author', 'industry', 'tags')->where('publish', false);
	}
}