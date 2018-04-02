<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - @yield('title', 'Home')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>
<body>

   @include('layouts/partials/_nav',['age'=> 18])
    {{-- ceci est un commentaire --}}
   @verbatim
        {{'ne pas interpreter'}}
   @endverbatim

   @yield('container')

   @stack('script.footer')
</body>
</html>
