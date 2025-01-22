<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Wibukoding</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="flex flex-col min-h-screen">
    @include('fe.layouts.navbar')

    @yield('content')

    @include('fe.layouts.footer')
</body>
</html>
