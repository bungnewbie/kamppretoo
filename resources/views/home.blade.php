@extends('layouts.app')

@section('content')

<!-- Header -->
    <section id="header">

        <div class="inner">
        <span class="icon major fa-cloud"></span><br>
        <a class="button" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('form').submit();" >Logout</a><br><br>
        <form id="form" method="POST" action="{{ route('logout') }}" style="display: none;">
        @csrf
        </form>
            <h1>Hi, Welcome <strong>{{ Auth::user()->name }}</strong><br/>Scroll down & view your message</h1>
            <p>Copy & bagikan url ini:<br>
                <a href="#">http://localhost:8000/send/{{ Auth::user()->url_token }}</a>
            <br>
            </p>
            <ul class="actions">
                <li><a href="#three" class="button scrolly">Lihat</a></li>
            </ul>
        </div>
    </section>

<!-- Three -->
    <section id="three" class="main style1 special">
        <div class="container">
            <header class="major">
                <h2>Daftar pesan anda</h2>
            </header>
            <p>Semua pesan yang dikirim untuk anda</p>
            <div class="row 150%">
                @foreach ($messages as $value)
                    <div class="4u 12u$(medium)">
                        <pre><code><p>{{ $value->messages }}</p></code></pre>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if (session('msg'))
        <script type="text/javascript">
            alert('{{ session('msg') }}');
        </script>
    @endif

@endsection
