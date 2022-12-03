<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- style --}}
    @stack('before-style')
    @include('includes.guest.style')
    @stack('after-style')
</head>
<body>
    {{-- navbar --}}
    @include('includes.guest.navbar')

    @yield('content')

    {{-- footer --}}
    @include('includes.guest.footer')

    <!-- Scripts -->
    @stack('before-script')
    @include('includes.guest.script')
    @stack('after-script')
</body>
</html>
