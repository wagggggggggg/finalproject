@extends('main')

@section('title', '| View Project')

@section('content')


<div class="row">
  <div class="col-md-12">
    <h1>{{ $post->title }}</h1>

    <p class="lead">{{ $post->body }}</p>

  </div>

</div>

<div class="row">

  <div class="col-md-6">
    <dl class="dl-horizontal">
      <dl class="dl-horizontal">
        <label>URL:</label>
        <p><a href="{{ url('project/'.$post->slug) }}">{{ url('project/'.$post->slug) }}</a></p>
      </dl>
    </div>
    <div class="col-md-6">

      <label>Created At:</label>
      <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p><!-- created at date of project pulling in post variable -->
    </dl>

    <dl class="dl-horizontal">
      <label>Last Updated:</label>
      <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p><!-- updated at date of project pulling in post variable -->
    </dl>
  </div>

</div>

<div class="row">

  <div class="col-sm-6">
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-block" role="edit">Edit</a><!-- direct user to posts.edit-->
  </div>

  <div class="col-sm-6">
    <form method="POST" action="{{ route('posts.destroy', $post->id) }}"><!-- using posts.destory delete the post id -->
      <input type="submit" value="Delete" class="btn btn-danger btn-block">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
      {{ method_field('DELETE') }}
    </form>﻿
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
  <br>
  <a href="{{ route('posts.index') }}" class="btn btn-success btn-block">Back to Projects</a>
  </div>
</div>


@endsection
