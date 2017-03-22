<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.min.css')}}">
    </head>
    <body>
        <!-- code for navigation -->
        <!-- code for header -->

        <div class="container">
            @yield("content")
        </div>

        <!-- code for footer -->

        <script type="text/javascript" src="{{ URL::asset('js/app.min.js') }}"></script>
    </body>
</html>
