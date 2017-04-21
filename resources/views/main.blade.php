<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')<!-- includes the head.blade file on all parts of the application -->
  </head>

  <body>

    @include('partials._nav')<!-- includes the nav file on all parts of the application -->

    <div class="container">

      @include('partials._messages')<!-- includes the flash messages within each section of project bazaar -->

      @yield('content')<!-- display content within this section-->

      @include('partials._footer')<!-- includes the footer file on all parts of the application -->

    </div> <!-- end of .container -->

      @include('partials._javascript')

      @yield('scripts')
  </body>
</html>
