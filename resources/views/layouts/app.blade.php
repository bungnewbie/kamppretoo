<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Welcome to Kampreto</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script type="text/javascript" src="{{ URL::to('js/ie/html5shiv.js') }}"></script> --}}
    <link rel="stylesheet" href="{{ URL::to('css/main.css') }}" />
    {{-- <link rel="stylesheet" href="{{ URL::to('css/ie8.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ URL::to('css/ie9.css') }}" /> --}}
</head>
<body>

    @yield('content')

<!-- Footer -->
    <section id="footer">
        <ul class="icons">
            <li><a href="https://www.twitter.com/Rizkhal98" target="_blank" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/iikhal.lamaau" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="https://www.instagram.com/_uchok/?hl=id" target="_blank" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="https://www.github.com/bungnewbie" target="_blank" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
        </ul>
        <ul class="copyright">
            <li>{{ date('Y') }} &copy; Rizkhal All Right Reserve</li><li>Hand Created & Made With Love</li>
        </ul>
    </section>

    <!-- Scripts -->
    <script src="{{ URL::to('js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ URL::to('js/skel.min.js') }}"></script>
    <script src="{{ URL::to('js/util.js') }}"></script>
   {{-- <script src="{{ URL::to('js/ie/respond.min.js') }}"></script> --}}
    <script src="{{ URL::to('js/main.js') }}"></script>
</body>
</html>
