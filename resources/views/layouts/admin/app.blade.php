<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/logosm.png') }}" type="image/x-icon">
    <title>Dashboard</title>

    @include('includes.admin.style')
    @stack('css')
</head>

<body style="background-color: #f4f4f4">

    <div id="app">
        <div class="main-wrapper main-wrapper-2">
            <div class="navbar-bg"></div>

            @include('includes.admin.navbar')

            @include('includes.admin.sidebar')

            @yield('content')

            @include('includes.admin.footer')


        </div>
    </div>

    @include('includes.admin.script')
    @stack('js')
</body>

</html>
