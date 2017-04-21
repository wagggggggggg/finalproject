<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Session;

class PostController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create variable and store all the project posts
        // desc to show latest post
        $posts = Post::orderBy('id', 'desc')->paginate(5);

        // return a view and pass in the above variable

        return view('posts.index')->withPosts($posts);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the Data

        $this->validate($request, array(
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash',
          'body' => 'required'
        ));

        // store in the Database
        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;

        $post->save();

        //flash message

        Session::flash('success', 'The project was created!');

        // redirect to another page

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::find($id);
        return view('posts.show')->withPost($post);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save it as a variable

        $post = Post::find($id);

        // return the view and pass in var previously created

        return view('posts.edit')->withPost($post);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the data

        $this->validate($request, array(
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash',
          'body' => 'required'
        ));

        // Save the data to Database

        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');

        $post->save();

        // set flash data with success message

        Session::flash('success', 'This project was successfully saved.');
        // redirect with flash data to post.show

        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'This project was successfully deleted.');

        return redirect()->route('posts.index');

    }
}
