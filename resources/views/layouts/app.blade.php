<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/input.css')}}">       
        <title>{{config('app.name')}}</title>

    </head>


    <body>
        
        @include('includes.navbar')

        <div class="container">



            @yield('content')

        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
