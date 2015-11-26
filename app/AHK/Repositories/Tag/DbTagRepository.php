<?php
/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   26/11/2015
 */

namespace App\AHK\Repositories\Tag;


use App\AHK\Repositories\DbRepository;
use App\AHK\Tag;
use App\AHK\User;
use Illuminate\Database\Eloquent\Collection;

class DbTagRepository extends DbRepository implements TagRepository {

	/**
	 * Get all tags
	 * @return Collection
	 */
	public function all()
	{
		return Tag::with('author');
	}

	/**
	 * Store a tag on the storage
	 * @param User $author
	 * @param array $fillable
	 * @return Tag|false
	 */
	public function store(User $author, array $fillable)
	{
		$tag = new Tag($fillable);

		$tag->assignAuthor($author);

		return $tag->save() ? $tag : false;
	}

	/**
	 * Update a tag given it id.
	 * @param $id
	 * @param array $fillable
	 * @return mixed
	 */
	public function updateById($id, array $fillable)
	{
		$tag = $this->getById($id);

		$tag->fill($fillable);

		return $tag->save() ? $tag : false;
	}

	/**
	 * Get a tag given its id
	 * @param $id
	 * @return Tag
	 */
	public function getById($id)
	{
		return Tag::find($id);
	}
}