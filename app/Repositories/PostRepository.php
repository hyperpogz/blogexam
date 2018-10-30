<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Blog;

class PostRepository implements PostRepositoryInterface{

	private $post;

	public function __construct(Blog $post){
		$this->post = $post;
	}

	public function all(){
		return $this->post
			->orderBy('created_at', 'DESC')
			->get();
	}

	public function findById(int $id){
		return $this->post->findOrFail($id);
	}

	public function findByIdAndSlug(int $id, string $slug){
		return $this->post
			->where('id', $id)
        	->where('slug', $slug)
        	->first();
	}

	public function save(array $data = [], int $id = null){

		$file = $data['image'];

		if(is_object($file)){
			$fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).'-'.time().'.'.$file->getClientOriginalExtension();

			$destinationPath = public_path("/uploads");

			$file->move($destinationPath, $fileName);

			$data['image'] = $fileName;
		}

		$this->post->updateOrCreate(['id' => $id], $data);

	}

	public function paginate(int $limit = null, int $pageNum = null){
		return $this->post
			->orderBy('created_at', 'DESC')
			->paginate($limit, ['*'], 'page', $pageNum);
	}

	public function delete(int $id){
		$post = $this->post->findOrFail($id);
		$post->delete();
	}

}