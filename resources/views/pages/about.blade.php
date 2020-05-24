@extends('layout')


@section('content')
<div class="banner-area banner-bg-1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner">
					<h2><span>About Us</span></h2>
					<ul class="page-title-link">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ route('about') }}">About Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="about" class="section wb">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="message-box">
					<h4>About Us</h4>
					<h2>Welcome to ACRM</h2>
					<div class="section-title" style="text-align: left;">
						<p>1. We receive & process requests from allover Africa for FMs & SDTs</p>
					   <p> 2. We identify and verify presented projects to determine their viability and sustainability to professional and technical standards for the interest of the targeted community</p>
					
					   <p>3. We do site survey and acertain technical parameters, management, sustainability, local government licensing and we address any challenge pertaining to the a particular projec</p>
					   
					   <p>4.We list all those projects for funding from within and without</p>
					   
					   <p>5.We implement those projects, commission them, train technical support stuff with terms and conditions of services and operation contract agreement entered into.</p>
					   
					   <p>6. We periodically monitor the progress and operations of these stations and terminals</p>
					  </div>

				</div><!-- end messagebox -->
			</div><!-- end col -->

			<div class="col-md-6">
				<div class="post-media wow fadeIn">
					<video width="500" height="600" controls>
						<source src="/Video Sample.mp4" type="video/mp4">
						<source src="movie.ogg" type="video/ogg">
					  </video>
				</div><!-- end media -->
			</div><!-- end col -->
		</div><!-- end row -->

		<hr class="hr1"> 

	
	</div><!-- end container -->
</div><!-- end section -->

@endsection