@extends('main')

@section('title', '| All Projects')

@section('content')

  <div class="row">
      <div class="col-md-10">
        <h1>List of Projects</h1>
      </div>

      <div class="col-md-2">
        <a href="{{ route('posts.create')}}" class="btn btn-lg btn-block btn-default btn-h1-spacing button-padding" style="width: 200px;">Create New Project</a><!-- CRUD create a post -->
      </div>
      <div class="col-md-12">
        <hr>
      </div>
  </div> <!-- end of the row -->

  <div class="row" role="table of projects">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Project Content</th>
          <th>Created At</th>
          <th>View/Edit</th>
        </thead>

        <tbody>

          @foreach ($posts as $post)<!-- for each post get the posts ID, title, body created at date and display in table -->

            <tr>
              <th>{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
              <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
              <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
            </tr>

          @endforeach

        </tbody>
      </table>
      <!-- pagination -->
      <div class="text-center">
        {!! $posts->links(); !!}
      </div>
    </div>
  </div><!-- end row -->


@endsection
