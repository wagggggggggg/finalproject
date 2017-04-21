@extends('main')

@section('title', '| Project Bazaar')

@section('content')
    <div class="row"><!--START OF ROW -->
      <div class="col-lg-12">
        <section class="text-center">
          <div class="jumbotron" role="Project Bazaar">
            <div class="container">
            </div>
            <h1 class="projectbazaar">Project Bazaar</h1>
            <p>Welcome to Project Bazaar! This web application has been designed and developed for a final year project at Edge Hill University. Get involved and use it to smash your upcoming final year project.</p>
          </div>
        </section>
      </div>
    </div>
    <div class="row">
      <!-- The following content list the panels on the welcome screen, showing the user what project bazaar has to offer -->
        <div class="container">
          <div class="row">
            <div class="col-lg-4" role="projects">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="/project"><h3 class="panel-title">Find projects for this year and older</h3></a></li>
                </div>
                <div class="panel-body">
                  Cant decide a topic for your project? Simply use the projects tab and check out the current projects posted by your lecturers!
                </div>
              </div>
            </div>

            <div class="col-lg-4" role="FAQ">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="/faq"><h3 class="panel-title">FAQ and all about help</h3></a></li>
                </div>
                <div class="panel-body">
                  Head over to the FAQ if you are un-sure on how to use this web application or have no clue when it comes to your final project!
                </div>
              </div>
            </div>

            <div class="col-lg-4" role="comment">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="/project"><h3 class="panel-title">Interact with tutors and comment!</h3></a></li>
                </div>
                <div class="panel-body">
                    Chat back and forth with your tutor! Ask them if this topic is suitable for you, or simply drop them a message with your queries!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end row -->
@endsection
