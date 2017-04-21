@extends('main')

@section('title', '| Edit Project')

@section('content')

<div class="row">

  <div class="col-md-12" role="edit">

  <form method="POST" action="{{ route('posts.update', $post->id) }}"><!-- update the form -->
        <div class="form-group">
          <label for="title">Title:</label>
          <textarea type="text" class="form-control input-lg" id="title" name="title" rows="1" style="resize:none;">{{ $post->title }}</textarea>
        </div>
        <div class="form-group">
          <label for="slug">URL:</label>
          <textarea type="text" class="form-control input-lg" id="slug" name="slug" rows="1" style="resize:none;">{{ $post->title }}</textarea>
        </div>
        <div class="form-group">
          <label for="body">Body:</label>
          <textarea type="text" class="form-control input-lg" id="body" name="body" rows="10">{{ $post->body }}</textarea>
        </div>
  </div><!-- end the edit form end col -->

</div>


<div class="row"><!-- start of row -->
    <div class="col-md-6" role="URL">
        <dl class="dl-horizontal">
          <label>URL:</label>
          <p><a href="{{ url('project/'.$post->slug) }}">{{ url('project/'.$post->slug) }}</a></p>
        </dl>
    </div>

    <div class="col-md-6">
      <dl class="dl-horizontal">
        <label>Created at:</label>
        <p>{{ date('M j, Y h:i:sa', strtotime($post->created_at)) }}</p><!-- created at date of project pulling in post variable -->
      </dl>
      <dl class="dl-horizontal">
        <label>Last updated:</label>
        <p>{{ date('M j, Y h:i:sa', strtotime($post->updated_at)) }}</p><!-- updated at date of project pulling in post variable -->
      </dl>
    </div>
</div><!-- end of row -->

<div class="row">
  <div class="col-md-6">
    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-block">Back</a><!-- return to posts -->
  </div>
  <div class="col-md-6">
    <button type="submit" class="btn btn-success btn-block">Save</button>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
      {{ method_field('PUT') }}
  </div>
  </form>
</div><!-- end row -->


@endsection
