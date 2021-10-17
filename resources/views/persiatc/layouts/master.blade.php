<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    @include('persiatc.partials.head')
    @yield('css')
</head>

<body>
    @include('persiatc.partials.header')
    @yield('content')
    @include('persiatc.partials.returnToUp')
    @include('persiatc.partials.footer')
    @include('persiatc.partials.script')
    @yield('js')
</body>

</html>
