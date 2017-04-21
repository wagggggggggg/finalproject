@extends('main')

@section('title', '| FAQ')

@section('content')
<!-- PAGE HEADING -->
<div class="row"><!--START OF ROW -->
  <div class="col-lg-12">
    <section class="text-center">
      <div class="jumbotron" role="heading">
        <div class="container">
          <h1>Frequently Asked Questions</h1>
          <p>Stuck on your final project or how to use this web application? You have come to the right place. Use the menu below and get cracking on your project!</p>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- Following code is accordions from bootstrap containing FAQ questions for students -->
  <div class="col-md-12">
    <h3>How do I use Project Bazaar?</h3>
    <!-- DEFAULT BOOTSTRAP -->
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne"><!--This is the heading text -->
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            How do I see the list of projects? <!--Heading text -->
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne"> <!-- content collapsed in the accordion, this follows down throughout the accordions -->
        <div class="panel-body">
          To see a list of projects head over to the projects tab
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            How do I see older archived projects for my course?
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
           To see a list of archived projects head over to the archive tab. From here you will be able to see what year the project was and what tutor set it.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            How do I comment on a project?
          </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
        <div class="panel-body">
          To comment on a project, head over to the projects tab and select one. Leave a comment using the form and provide your name and email address. This is so the tutor knows whos commented and can reply to you. You don't even have to sign in or have an account.
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="col-md-12">
    <h3>What is a project?</h3>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
            What is a final project?
          </a>
        </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">
          A final project, commonly known as a dissertation on other degrees is probably one of the biggest pieces of work a student can do on a degree. You are more than likely currently working on your final project or starting soon if you are using Project Bazaar! The final year project is the culmination of the degree – it gives students a chance to demonstrate all they have learned. The project module is very different from other modules. Although students are supervised, the onus is on the student to define the problem boundaries, to investigate possible solutions, and to present the results in writing, verbally and in action. Apart from an initial briefing session there are no formal lectures to attend. Teaching consists of regular individual/small group meetings to discuss progress. For assessment, students submit reports of their progress and final results, and give in-person presentations and demonstrations of their work.
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="col-md-12">
    <h3>Tips and Advice</h3>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTen">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseOne">
            Don't know who to pick as my supervisor
          </a>
        </h4>
      </div>
      <div id="collapseTen" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTen">
        <div class="panel-body">
          The project supervisor and not finding a suitable one can be an issue for a student before embarking on the project. Sazini, (2017) states that for a student to succeed in a project the supervisor is key. The best selective supervisor is the one that has a productive working relationship with the student. Making sure the supervisor is the best possible person to help with the particular project title. Their intimate knowledge of the topic itself and the academic field surrounding it will be indispensable throughout the duration of the project and writing process. Project supervision is an important aspect that influences the students experience with the final year project. Effective project supervision enables not only the student to complete the project but also enjoy the work (Pillai, 2011).
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingEleven">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseTwo">
            Worrying concerns/anxitey/stressed
          </a>
        </h4>
      </div>
      <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
        <div class="panel-body">
          The final project can be a very stressful time, it is important to remain calm and speak to any appropiate representative at the university. If you are feeling worried go and see your supervisor.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTweleve">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTweleve" aria-expanded="false" aria-controls="collapseThree">
            Time management and planning
          </a>
        </h4>
      </div>
      <div id="collapseTweleve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTweleve">
        <div class="panel-body">
           It is very important to keep to time management when completing your final year project, especially so as you will have work from other modules to complete. Buy a diary, a calender anything to keep you organised.
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="col-md-12">
    <h3>How to do a Literature Review</h3>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingThirteen">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="true" aria-controls="collapseOne">
            Starting your Literature Review
          </a>
        </h4>
      </div>
      <div id="collapseThirteen" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThirteen">
        <div class="panel-body">
          To find out more information about starting a literature review visit <a href="http://getalifephd.blogspot.co.uk/2011/10/writing-literature-review-six-steps-to.html">here</a>.
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

@endsection
