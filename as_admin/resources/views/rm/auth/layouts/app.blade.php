<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="/images/logo.png">
    <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">
{{--    <link rel="stylesheet" href="{{ mix('css/rm/main.css') }}">--}}
    @yield('css')
</head>
<body class="hold-transition">
@yield('content')
{{--<script src="{{ mix('js/vendor.js') }}"></script>--}}
{{--<script src="{{ mix('js/rm/main.js') }}"></script>--}}
{{--<script src="{{ mix('js/common/auth.js') }}"></script>--}}
@yield('js')
</body>
</html>
