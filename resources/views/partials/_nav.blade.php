<!-- Default Bootstrap nav bar -->
<nav class="navbar navbar-default navbar-inverse">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">Project Bazaar</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" role="nav">
    <!-- Show the navigation tabs that are active -->
    <ul class="nav navbar-nav">
      <li class="{{ Request::is('project') ? "active" : ""}}"><a href="/project">Projects</a></li>
      <li class="{{ Request::is('archive') ? "active" : ""}}"><a href="/archive">Archive</a></li>
      <li class="{{ Request::is('faq') ? "active" : ""}}"><a href="/faq">FAQ</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- If user logged in, this part of the navigation will be visible -->
      @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <!-- Register blade view has been removed so un-wanted users are not able to register -->
        <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
      @else
        <!-- end else loop -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <!-- Takes user to Project Posts page -->
          <li><a href="{{ route('posts.index') }}">Project Management</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="{{ url('/logout') }}">Logout</a></li>
        </ul>
      </li>
    @endif
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav><!-- end nav -->
