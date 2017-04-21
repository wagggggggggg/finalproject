@extends('main')

@section('title', '| Create New Project')

@section('content')

<div class="row">
  <div class="col-md-8 col-md-offset-2" role="create"><!-- Creating a new project post form -->
    <h1>Create New Project</h1>
    <hr>
    <form method="POST" action="{{ route('posts.store') }}"><!-- route to store posts -->
      <div class="form-group">
        <label name="title">Title:</label>
        <input id="title" name="title" class="form-control"><!-- input id associated with title -->
      </div>
      <div class="form-group">
        <label name="slug">URL:</label>
        <input id="slug" name="slug" class="form-control"><!-- input id associated with slug -->
      </div>
      <div class="form-group">
        <label name="body">Project:</label>
        <textarea id="body" name="body" rows="12" class="form-control"></textarea><!-- input id associated with body -->
      </div>
      <input type="submit" value="Create Project" class="btn btn-default btn-lg btn-block">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
  </div>
</div>


@endsection
