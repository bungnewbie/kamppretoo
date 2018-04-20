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

        <!-- One -->
            <section id="one" class="main style1">
                <div class="container">
                    <div class="row 150%">
                        <div class="6u 12u$(medium)">
                            <span class="image fit"><img src="{{ URL::to('images/Kampreto.gif') }}" alt="Kampreto Image" /></span>
                        </div>
                        <div class="6u$ 12u$(medium) important(medium)">
                            <section>
                                <h4>New? Create new account</h4>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div>
                                        <div>
                                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" required>
                                        </div>
                                        @if ($errors->has('name'))
                                            <span style="color: red;margin-bottom: -18px;display: block;">{{ $errors->first('name') }}</span>
                                        @endif
                                        <br>
                                        <div>
                                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                        </div>
                                        @if ($errors->has('email'))
                                            <span style="color: red;margin-bottom: -18px;display: block;">{{ $errors->first('email') }}</span>
                                        @endif
                                        <br>
                                        <div>
                                            <input type="password" name="password" id="password" value="" placeholder="Password" value="" required>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span style="color: red;margin-bottom: -18px;display: block;">{{ $errors->first('password') }}</span>
                                        @endif
                                        <br>
                                        <div>
                                            <input type="password" name="password_confirmation" id="password" value="" placeholder="Confirm password" required>
                                        </div>
                                        <input type="hidden" name="url_token">
                                        <br>
                                        <div class="12u$">
                                            <ul class="actions">
                                                <li><input type="submit" value="Register" class="special" /></li>
                                                <li>Already have an account?<a href="{{ url('/login') }}"> Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            
            @if (session('msg'))
                <script type="text/javascript">
                    alert('{{ session('msg') }}');
                </script>
            @endif
@endsection
