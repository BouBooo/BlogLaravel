<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- WYSIWIG -->
    <script src="https://cdn.tiny.cloud/1/7uabbpgwo2xxf7clxrykhtxen8eh2h4upl73dtoa72ar3s7k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <title>Blog</title>
  </head>
  <body>
    @include('incs.header')

    <div class="container justify-content-center mt-3">
      @include('incs.flash-message')
    </div>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/907683f3ba.js"></script>
  </body>
</html>