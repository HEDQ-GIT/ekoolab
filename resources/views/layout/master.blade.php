<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    @yield('title')

    <!-- Styles -->
    <link href="{{ asset('/css/vendor.min.css') }}" rel="stylesheet">
    <link href="{{ elixir("css/app.min.css") }}" rel="stylesheet">

    {{--@yield('head-scripts')--}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('header-scripts')
</head>
<body>

@include('common.header')

@yield('content')

@include('common.footer')

<!-- Scripts -->
<script src="{{ asset('/js/vendor.min.js') }}"></script>
@yield('body-scripts')
</body>
</html>