<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('includes.head')
</head>
<body>
  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark">
      @include('includes.navbar')
    </nav>
    <div class="content">
      @yield('content')
    </div>


    <footer>
      @include('includes.footer')
    </footer>
  </div>

  @include('includes.scripts')

</body>
</html>
