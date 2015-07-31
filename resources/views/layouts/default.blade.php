<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Workshop</title>
    <link href="{{ elixir('css/app.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="col-md-12">
        @yield('content')
      </div>
    </div>
  </body>
</html>
