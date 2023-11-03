<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/logosm.png') }}" type="image/x-icon">

    <title>@yield('title')</title>
    <style>
        #app,
        html {
            background-color: #f2f2f2;
        }
    </style>
    @include('includes.admin.style')
</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    @include('includes.admin.script')
</body>

</html>
