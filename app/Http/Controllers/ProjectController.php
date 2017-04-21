<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;


class ProjectController extends Controller
{

    public function getIndex() {
      $posts = Post::paginate(5);

      return view('project.index')->withPosts($posts);
    }

    public function getSingle($slug) {

      // fetch from the database based on slug

      $post = Post::where('slug', '=', $slug)->first();

      // return the view and pass in the post object

      return view('project.single')->withPost($post);

    }
}
