<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class BlogController extends Controller
{
	public $postRepository;

	public function __construct(PostRepository $postRepository){
		$this->postRepository = $postRepository;
	}

    public function index(){
        $posts = $this->postRepository->paginate(5);
        return view('blog.index', compact('posts'));
    }

    public function archive(){
        $posts = $this->postRepository->paginate(5);
        return view('blog.archive', compact('posts'));
    }

    public function show($id, $slug){

        $post = $this->postRepository->findByIdAndSlug($id, $slug);

        if(is_null($post)) return abort(404);

        return view('blog.single', compact('post'));

    }

}
