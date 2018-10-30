<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use Validator;

class AdminController extends Controller
{
	protected $postRepo;

	public function __construct(PostRepository $postRepository){
		$this->postRepo = $postRepository;
	}

    public function index(){
		$posts = $this->postRepo->all();
		return view('admin.blog.index', compact('posts'));
	}

    public function create(){
        return view('admin.blog.create');
    }

    public function save(Request $request){

    	$rules = [
			'title' => 'required',
			'content' => 'required'
		];

		$validator = Validator::make($request->except(['_token', 'image', 'image_existing']), $rules);

		if($validator->fails()){
			return redirect('admin/post/'.($request->id ? 'edit/'.$request->id : 'create'))
				->withErrors(['message' => 'Error'])
				->withInput($request->except('_token'));
		}

        $this->postRepo->save([
        	'title' => $request->title,
        	'slug' => str_slug($request->title, '-'),
        	'users_id' => $request->users_id,
        	'content' => $request->content,
        	'image' => $request->file('image') ?: $request->image_existing
        ], $request->id ?? null);

        return redirect(route('admin.index'));
    }

    public function edit($id){
        $post = $this->postRepo->findById($id);

        return view('admin.blog.edit', compact('post'));
    }

    public function delete($id){

        $this->postRepo->delete($id);
	
		return redirect(route('admin.index'));

    }

}
