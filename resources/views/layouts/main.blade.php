<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css') }}/bootstrap.css">

    {{-- Local CSS --}}
    <link rel="stylesheet" href=" {{ asset('css') }}/styles.css">
    <link rel="shortcut icon" href="{{ asset('img') }}/favicon.ico" type="image/x-icon" sizes="">

    {{-- Font Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    <title>Hablog | {{ $title }} </title>
</head>

<body class="bg-white">
    @include('partials.navbar')

    <div class="my-4">
        @yield('container')
    </div>

    @include('partials.footer')


    <script src="{{ asset('js') }}/bootstrap.bundle.js"></script>
    <script src="{{ asset('js') }}/script.js"></script>

</body>

</html>
