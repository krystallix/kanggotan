<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Kanggotan</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">    
    
    @include('includes.public.link')


  </head>
  <body>
    
    @include('includes.public.header')
 
<main>

@yield('content')

  @include('includes.public.footer')

</main>


@include('includes.public.js')
@yield('js')
      
  </body>
</html>
