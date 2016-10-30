<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials._head')
</head>

<body>

  @include('partials._nav')

  <div class="container">

    @yield('content')

  </div> <!-- container -->

  @include('partials._footer')

</body>

</html>