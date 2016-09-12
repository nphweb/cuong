<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>demo</title>
        <link rel="stylesheet" href="{{URL::asset('css/style/style.css')}}">
        <script src="{{URL::asset('js/jquery/jquery-3.0.0.min.js')}}"></script>
        {{--bootstrap--}}
        @yield('bootstrap')
        {{--end bootstrap--}}

        {{--uikit--}}
        <link rel="stylesheet" href="{{URL::asset('css/uikit.almost-flat.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/uikit.gradient.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/uikit.min.css')}}">
        <script src="{{URL::asset('js/uikit.min.js')}}"></script>
        {{--end uikit--}}
    </head>
    <body>
        @yield('content')
    </body>
</html>