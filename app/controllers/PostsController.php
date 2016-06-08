<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $posts = Post::all();
		// return View::make('posts.index')->with('posts',$posts);
		$posts = Post::paginate(2);
    	return View::make('posts.index')->with(array('posts' => $posts));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		$post->user_id = Auth::id();
		$post->title = Input::get('title');
		$post->body = Input::get('body');

	    // create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        Session::flash('errorMessage', 'Your Post was not successfully created. Please try again.');
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
	        if($post->save()) {
	        Session::flash('successMessage', 'Your Post has been successfully created!');
			return Redirect::action('PostsController@show',$post->id);
			}else {
			Session::flash('errorMessage', 'Error');
			return Redirect::back()->withInput();
			}
	    }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		if ($post != null) {
		return View::make('posts.show')->with('post',$post);
		}else {
			App::abort('404');
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		// dd($post);
		return View::make('posts.edit')->with(['post', $post]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->body = Input::get('body');

	    // create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        Session::flash('errorMessage', 'Your Post was not successfully updated. Please try again.');
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
	        if($post->save()) {
			Session::flash('successMessage', 'Your Post has been successfully created!');
			return Redirect::action('PostsController@show', $post->id);
			}else {
			Session::flash('errorMessage', 'Error');
			return Redirect::back()->withInput();
			}
			Session::flush();
	    }
	    Session::flush();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
	}


}
