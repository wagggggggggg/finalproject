@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')

<div class="row">

  <div class="col-md-12">
    <div class="jumbotron" role="post title">
      <h1>{{ $post->title }}</h1><!-- pulling in post variable into the list of projects -->
    </div>

  <div class="panel panel-default">
    <div class="panel-body" role="post-body">
      <p>{{  $post->body }}</p><!-- pulling in the body of the post -->
    </div>
  </div>
  </div>

</div>
<hr>
<!-- gets the comments -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <h2>Comments</h2>
        @foreach($post->comments as $comment)<!-- for each loop using the comment associated on the postand display the posts-->
        <div class="comment">
          <div>
            <!-- created at name and comment -->
          <h4>{{ $comment->name }}</h4>
          <p class="author-date">{{ $comment->created_at }}</p>
          </div>
        <div class="comment-content">
            {{ $comment->comment }}
        </div>
      </div>
      @endforeach
      </div>
    </div>
  </div>
</div>
<hr>
<div class="row">
  <div class="panel panel-default">
    <div class="panel-body">
      <h2>Please feel free to leave a comment. Your tutor will reply in 3 working days.</h1>
        <div id="comments-form" class="col-md-12">
          <form method="POST" action="{{ route('comments.store', $post->id) }}"> <!-- store comments -->
            <div class="col-md-6">
      <div class="form-group">
        <label name="name">Name:</label>
        <input id="name" name="name" class="form-control">
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label name="email">Email:</label>
        <input id="email" name="email" class="form-control">
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label name="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4" class="form-control"></textarea>
      </div>
      <input type="submit" value="Add Comment" class="btn btn-success btn-lg btn-block">
      <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    </div>
    </form>

  </div>
</div>
</div>

</div>


@endsection
