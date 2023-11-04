<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slicing</title>
    <link rel="icon" href="{{ asset('img/logosm.png') }}">

    @include('includes.user.style')
    @stack('css')

</head>

<body>

    @include('includes.user.navbar')

    @yield('content')

    @include('includes.user.footer')

    @include('includes.user.script');
    @stack('js')

</body>

</html>
