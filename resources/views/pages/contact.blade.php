@extends('layout')

@section('content')
<div class="banner-area banner-bg-1">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="banner">
				<h2><span>Contact Us</span></h2>
				<ul class="page-title-link">
					<li><a href="#">Home</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>

<div id="contact" class="section wb">
<div class="container">
	<div class="section-title text-center">
		<h3>Get in touch</h3>
		<p class="lead">Let us give you more details about the special offer  you want with  us. Please fill out the form below. </p>
	</div><!-- end title -->

	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="contact_form">
				<div id="message"></div>
				<form id="contactform" class="row" action="contact.php" name="contactform" method="post">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
						</div>
						<div class="text-center cont-btn">
							<button type="submit" value="SEND" id="submit" class="btn11"><span>Submit</span></button>
						</div>
					</div>
				</form>
			</div>
		</div><!-- end col -->
	</div><!-- end row -->
	
	<div class="row">
		<div class="offset-md-1 col-sm-10 col-md-10 offset-sm-1 pd-add">
			<div class="address-item">
				<div class="address-icon">
					<i class="icon icon-location2"></i>
				</div>
				<h3>Headquarters</h3>
				<p>Enoch Mogusu</p>
			</div>
			<div class="address-item">
				<div class="address-icon">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				<h3>Email Us</h3>
				<p>mogusu@gmail.com</p>
			</div>
			<div class="address-item">
				<div class="address-icon">
					<i class="icon icon-headphones"></i>
				</div>
				<h3>Call Us</h3>
				<p>+254 722 508899 </p>
			</div>
		</div>
	</div><!-- end row -->
	
</div><!-- end container -->
</div><!-- end section -->
@endsection