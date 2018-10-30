<?php

namespace App\Repositories\Interfaces;

interface PostRepositoryInterface{

	public function all();

	public function findById(int $id);

	public function findByIdAndSlug(int $id, string $slug);

	public function save(array $data = [], int $id = null);

	public function paginate(int $limit = null, int $pageNum = 1);

	public function delete(int $id);

}