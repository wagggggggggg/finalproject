@extends('main')

@section('title', '| Archive')

@section('content')
  <div class="row"><!--START OF ROW -->
    <div class="col-lg-12">
      <section class="text-center">
        <div class="jumbotron" role="heading">
          <div class="container">
            <h1>Archived Projects</h1>
            <p>Looking for even more inspiration for your project? Check out the archive for an overview of older projects which have been used in the older versions of your course.</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div class="row">
<!-- Table of old archived projets -->
      <div class="col-md-12">
        <div>
          <table class="table m-0" role="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Project</th>
                <th>Year</th>
                <th>Tutor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>Module Handbook System</td>
                <td>2016-2017</td>
                <td>Dave</td>
              </tr>
              <tr>
                <th>2</th>
                <td>Edge Hill Uni SU Website Remake</td>
                <td>2016-2017</td>
                <td>Dave</td>
              </tr>
              <tr>
                <th>3</th>
                <td>Navigation Optimisation</td>
                <td>2015-2016</td>
                <td>Dave</td>
              </tr>
              <tr>
                <th>4</th>
                <td>Performance Analysis of Edge Hill</td>
                <td>2015-2016</td>
                <td>Mark</td>
              </tr>
              <tr>
                <th>5</th>
                <td>Rota system for employment</td>
                <td>2015-2016</td>
                <td>Mark</td>
              </tr>
              <tr>
                <th>6</th>
                <td>What is information?</td>
                <td>2015-2016</td>
                <td>Mark</td>
              </tr>
              <tr>
                <th>7</th>
                <td>Accessibility in HTML</td>
                <td>2015-2016</td>
                <td>Mark</td>
              </tr>
              <tr>
                <th>8</th>
                <td>Responsive Grid Systems</td>
                <td>2014-2015</td>
                <td>Mark</td>
              </tr>
            </tbody>
          </table>
          </div>
      </div><!-- end col -->
    </div>
@endsection
