<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('includes.head')
</head>
<body>
  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      @include('includes.navbar')
    </nav>

    @yield('content')


    <footer>
      @include('includes.footer')
    </footer>
  </div>

  @stack('scripts')

</body>
</html>
