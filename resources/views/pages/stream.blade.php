@extends('layout')


@section('content')
<div class="banner-area banner-bg-1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner">
					<h2><span>Live Streaming</span></h2>
					<ul class="page-title-link">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ route('stream') }}">Live Stream</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="about" class="section wb">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="message-box container">
					<h3>COMING SOON!</h3>
				</div>
			</div>

			{{-- <div class="col-md-6">
				<div class="post-media wow fadeIn">
				</div>
			</div> --}}
		</div>

		<hr class="hr1">


	</div><!-- end container -->
</div><!-- end section -->

@endsection
