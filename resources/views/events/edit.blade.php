<!Doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" href="{{asset('css/event.css')}}">
      <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
      <link href="{{ asset('css/customizer.css') }}" rel="stylesheet">
      <script type="text/javascript">
          var baseUrl = "<?php echo asset('/'); ?>";
          var event = "<?php echo $event->slug; ?>";
      </script>
  </head>

  <body  class="text-center">

      @if(Auth::check() && $event->user_id == Auth::user()->id)
        @include('events.customizer')
        <div class="preview">
          <iframe src="{{asset('event/'.$event->slug)}}"></iframe>
        </div>
      @endif


      <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/customizer.js')}}"></script>
  </body>
</html>
