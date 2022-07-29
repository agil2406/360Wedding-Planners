<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title')  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  @include('includes.styling')

</head>

<body>
 


  <main id="main" class="main">
    @include('includes.navbar')
    @yield('content')

  </main><!-- End #main -->

  @include('includes.footer')
  @include('includes.script')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>
