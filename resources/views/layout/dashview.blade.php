<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Kanggotan</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/2.0.9/tippy.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/node-snackbar@latest/dist/snackbar.min.css" />
    <link href="{{ asset('css/mainDashboard.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
<main>

@yield('content')


</main>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <script src="https://unpkg.com/tippy.js@6"></script> --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/node-snackbar@latest/src/js/snackbar.min.js"></script>
<script src="{{asset('js/mainDashboard.js')}}"></script>

      
  </body>
</html>
