<!Doctype html>
<html>
  <head>
      <link rel="stylesheet" href="{{asset('css/event.css')}}">

      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
      <style>body{overflow: hidden;}</style>
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
  </body>
</html>
