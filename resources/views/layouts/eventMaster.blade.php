<!Doctype html>
<html>
  <head>
      <link rel="stylesheet" href="{{asset('css/event.css')}}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
  </head>

  <body  class="text-center">



      @yield('content')

      <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
  </body>
</html>
