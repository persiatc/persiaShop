<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'فروشگاه اینترنتی'}}</title>
    <link rel="stylesheet" href="{{asset('persiatc/assets/vendor/fontawesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('persiatc/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('persiatc/assets/css/mediaq.css')}}">
    @yield('css')
</head>

<body>

    @yield('content')
    @include('persiatc.partials.returnToUp')
    @include('persiatc.partials.footer')
    @include('persiatc.partials.script')
    @yield('js')
</body>

</html>
