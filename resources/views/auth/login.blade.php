@extends('layouts.app')
@section('content')
<!-- Header -->
    <section id="header">
        <div class="inner">
            <span class="icon major fa-cloud"></span>
            <h1>Hi, Welcome to <strong>Kampreto.</strong><br/></h1>
            <p>Get honest feedback from your Coworkers and Friends anonomously<br>
            Dapatkan feedback yang jujur ​​dari rekan kerja dan teman Anda secara anonymous</p>
            <ul class="actions">
                <li><a href="#one" class="button scrolly">Start</a></li>
            </ul>
        </div>
    </section>
<!-- Two -->
<section id="one" class="main style1">
    <div class="container">
        <div class="row 150%">
            <div class="6u$ 12u$(medium)">
                <span class="image fit"><img src="{{ URL::to('images/Kampreto.gif') }}" alt="Kampreto Image" /></span>
            </div>
            <div class="6u 12u$(medium) important(medium)">
                <section>
                    <h4>Already have an account? Login</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <div>
                                <input type="email" name="email" value="" placeholder="Email" value="{{ old('email') }}" required>
                            </div>
                            @if ($errors->has('email'))
                                <span style="color: red;margin-bottom: -18px;display: block;">{{ $errors->first('email') }}</span>
                            @endif
                            <br>
                            <div>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            @if ($errors->has('password'))
                                <span style="color: red;margin-bottom: -18px;display: block;">{{ $errors->first('password') }}</span>
                            @endif
                            <br>
                            <div class="6u 12u$(small)">
                                <input id="demo" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} >
                                <label for="demo">Remember me?</label>
                            </div>
                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="submit" value="Login" class="special" /></li>
                                    <li>New?<a href="{{ url('/') }}"> Create new account</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection