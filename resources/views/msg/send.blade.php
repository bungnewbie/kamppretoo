@extends('layouts.app')
@section('content')

<!-- Header -->
    <section id="header">
        <div class="inner">
            <span class="icon major fa-cloud"></span>
            <h1>Hi, Welcome to <strong>Kampreto.</strong><br/></h1>
            <p>Kirim pesan anda ke <strong>{{ Auth::user()->name }}</strong> <br>Data anda akan kami jaga rahasiakan<br> Penerima pesan tidak tahu kalau anda yang mengrimkan pesan</p>
            <ul class="actions">
                <li><a href="#msg" class="button scrolly">Kirim Pesan</a></li>
            </ul>
        </div>
    </section>

<!-- One -->
	<section id="msg" class="main style1">
				<div class="container">
					<header class="major special">
						<h2>Kirim Pesan</h2>
						<p>Pesan anda akan di kirim ke</p>
					</header>

					<section>
						<h4>Masukan Pesan</h4>
						<form method="POST" action="{{ route('store') }}">
							@csrf
							<div class="row uniform 50%">
								<div class="12u$">
									<textarea name="messages" placeholder="Masukan pesan anda" rows="6" required></textarea>
								</div>
								<div class="12u$">
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
			</section>
			@if (session('msg'))
		        <script type="text/javascript">
		            alert('{{ session('msg') }}');
		        </script>
		    @endif
@endsection