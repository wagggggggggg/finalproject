<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

  public function getIndex() {
    // add post all index code
      $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();


      // end of addedd code
      return view('pages.welcome')->withPosts($posts);
      # process variable data or params
      # talk to the Model
      # compile or process data from the model if needed
      # pass that data to the correct view
  }

  public function getArchive() {
      return view('pages.archive');
  }

  public function getFaq() {
      return view('pages.faq');
  }


}
