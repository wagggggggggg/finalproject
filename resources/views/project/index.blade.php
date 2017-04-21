@extends('main')

@section('title', "| Projects")

@section('content')
<!-- PAGE HEADING -->
<div class="row"><!--START OF ROW -->
  <div class="col-lg-12">
    <section class="text-center">
      <div class="jumbotron" role="heading">
        <div class="container">
          <h1>Projects</h1>
          <p>Navigate through the projects to help you with your dissertation. Pick a topic and message your tutor, or simply use these project ideas for a starter.</p>
        </div>
      </div>
    </section>
  </div>
</div>


<!-- FOR loop for every post in database output the posts in a list of twelve columns -->
  @foreach ($posts as $post)


  <div class="row">

    <div class="col-md-12" role="post">
      <!-- for each post get the posts title, created at date, body content and slug and output into fields respectively -->
      <h3>{{ $post->title }}</h3>

      <h6>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h6>

      <p>{{ substr($post->body, 0, 250) }}{{  strlen($post->body) > 250 ? '...' : ""}}</p><!-- ... elipses if content more tha 250 characters -->

      <a href="{{ url('project/'.$post->slug) }}" class="btn btn-default">Read More</a> <!-- read more button takes user to the slug which is the url of that project-->
      <hr>
    </div>

  </div>

  @endforeach

  <div class="row">

    <div class="col-md-12">

      <div class="text-center">
        <!-- PAGE PAGINATION -->

        {!! $posts->links() !!}

      </div>

    </div>

  </div>


@endsection
