<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Post $postModel)
	{
		//$posts = Post::all();
		//dd($posts);
		//$posts = Post::latest('published_at')->get();
		
		//$posts = Post::latest()
		//	->where('published_at', '<=', Carbon::now())
		//	->get();

		$posts = $postModel->getPublishedPosts();
		return view('post.index', ['posts' => $posts]);
	}

	public function unpublished(Post $postModel)
	{
		$posts = $postModel->getUnPublishedPosts();
		return view('post.index', ['posts' => $posts]);
	}

	public function getPostById(Post $postById)
	{
		$post = $postById;
		return view('post.details', ['post' => $post]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
