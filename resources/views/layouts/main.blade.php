<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    @yield('css')
    <title>FDR-Z | {{ $title }}</title>
  </head>
  <body>

    @include('partials.navbar')

    @yield('konten')

    @include('partials.footer')

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
