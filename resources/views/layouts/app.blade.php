<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
  	<script type="text/javascript" src="{{ asset('/js/app.js')}}"></script>
  </head>

  <body>

      @include('inc.navbar')

            <div class="margin">
                @yield('content')
            </div>


  </body>
</html>
