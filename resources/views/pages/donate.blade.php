




@extends('layout')
@section('content')


<div class="banner-area banner-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2><span>Our Donations</span></h2>
                    <ul class="page-title-link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Donations</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
	{{-- <div class="card-header">
	  
	</div> --}}
	<div class="card-body">
		<div class="container">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
				  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Paypal and card Method</a>
				  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Direct Bank transfer</a>
				  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Other Methods</a>
				</div>
			  </nav>
			  <div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<h5 class="ml-3 mt-3"><u>Select your method to donate</u></h5>
					<div class="row">
						<div class="col-ms-6 ml-4 mt-5">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="paypal" id="paypal" value="option1">
								<label class="form-check-label" for="exampleRadios1">
									<i class="fa fa-paypal" aria-hidden="true"> PAYPAL</i> 
								</label>
							  </div>
						</div>
						<div class="col-ms-6 ml-4 mt-5">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="paypal" id="card-pay" value="option2">
								<label class="form-check-label" for="exampleRadios1">
									<i class="fa fa-credit-card" aria-hidden="true"> Card Donation method</i> 
								</label>
							  </div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="card mt-4">
						<div class="card-body">
							<h3>Bank Details</h3>
						  <p>
							Account name: ENOCH M  MACHORA
						  </p>
						  <p>
							Bank of America
						  </p>
						  <p>
							Account number.: 291029440557
						  </p>
						  <p>
							ACH routing number: 081904808
						  </p>
						  <p>
							Address: 3853 Cheryl CT, 
							AURORA, IL 60504
						  </p>
						</div>
					  </div>
				</div>
				<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					<h3 class="mt-4 ml-4">Coming soon</h3>
				</div>
			  </div>
		<div class="row mb-5 mt-5">
			@foreach ($plans as $plan)
			<div class="col-md-4">
				<div class="card mt-4 mt-4" style="width: 18rem;">
					{{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
					<div class="cash">
						<h1 class="text-center mt-4 mb-4 mr-4 ml-4" style="font-size: 40px;" >$ {{ $plan->amount }}</h1>
					</div>
					<div class="card-body">
					<h5 class="card-title text-center h3">{{ $plan->title }}</h5><hr>
					<p class="card-text">
						<ul>
							<li>Project Development</li>
							<li>Project Partnership</li>
							<li>Project Completion</li>
							<li>N/A</li>
						</ul>
					</p>
					<a href="#" class="btn btn-primary btn btn-block donate" data-amount="{{ $plan->amount }}" >Donate Now</a>
					</div>
				</div>
			</div><br>
			@endforeach
			
		</div>
	</div>
	</div>
  </div>




  <!-- Modal -->
  <div class="modal fade" id="cardMethod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog modal-lg" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Payment Method</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> <i class="fa fa-id-card"> Card Payment</i> </a>
				{{-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class="fa fa-paypal"></i> PayPal</a> --}}
				{{-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a> --}}
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				  <form class="needs-validation" novalidate id="payment-form" method="POST" action="{{ route('charge') }}">
					  @csrf
							  <div class="mb-3">
								<label for="username">Full Name</label>
								<input type="text" name="name" class="form-control" required >
							  </div>
					  
							  <div class="mb-3">
								<label for="email">Email <span class="text-muted"></span></label>
								<input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com" required>
							  </div>
  
							  <div class="mb-3">
								  <label for="amount">Amount Donating <span class="text-muted"></span></label>
								  <input type="text" class="form-control amont" id="amont" name="amont" required placeholder="eg, 100" required>
								</div>
								  <br>
						   
							  <div id="card-element">
								<!-- Elements will create input elements here -->
							  </div>
							
							  <!-- We'll put the error messages in this element -->
							  <div id="card-errors" role="alert"></div>
							
							  <!-- <button id="submit">Pay</button> -->
							  <hr class="mb-4">
							  <button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Donate </button>
							</form>
			  </div>
			  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		  <style>
			.content {
  
				margin-top: 5px;
				
				text-align: center;
				
				}
		  </style>
		  <div class="flex-center position-ref full-height">
  
	
  
			<div class="content">
  
				<h1></h1>
  
				  
  
				<table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo"></a></td></tr></table>
  
  
  
				{{-- <a href="{{ route('payment') }}" class="btn btn-success">Pay $100 from Paypal</a> --}}
  
			</div>
			<form action="{{ route('payment') }}" method="POST">
			  @csrf
			  <div class="mb-3">
				<label for="username">Full Name</label>
				<input type="text" name="name" class="form-control" required >
			  </div>
			
			  <div class="mb-3">
				<label for="email">Email <span class="text-muted"></span></label>
				<input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com" required>
			  </div>
			
			  <div class="mb-3">
				<label for="amount">Amount Donating <span class="text-muted"></span></label>
				<input type="text" class="form-control amont" id="amont" name="amont" required placeholder="eg, $100" required>
				</div>
				<br>
				<button type="submit" class="btn btn-success">Pay from Paypal</button>
			</form>
  
		</div>
		</div>
			  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
			</div>
		</div>
		<div class="modal-footer">
		  {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button> --}}
		</div>
	  </div>
	</div>
  </div>

<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="cardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Card Payment</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			
			<form action="/charge" method="post" id="payment-form">
				<div class="form-row">
				  <label for="card-element">
					Credit or debit card
				  </label>
				  <div id="card-element">
					<!-- A Stripe Element will be inserted here. -->
				  </div>
			  
				  <!-- Used to display form errors. -->
				  <div id="card-errors" role="alert"></div>
				</div>
			  
				<button>Submit Payment</button>
			  </form>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>

  
  <!-- Modal -->
  <div class="modal fade" id="paypal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Donation</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<style>
				.content {
	  
					/* margin-top: 2px; */
					
					text-align: center;
					
					}
			  </style>
			  <div class="flex-center position-ref full-height">
	  
		
	  
				<div class="content">
	  
					<h1></h1>
	  
					  
	  
					<table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo"></a></td></tr></table>
	  
	  
	  
					{{-- <a href="{{ route('payment') }}" class="btn btn-success">Pay $100 from Paypal</a> --}}
	  
				</div>
				<form action="{{ route('payment') }}" method="POST">
				  @csrf
				  <div class="mb-3">
					<label for="username">Full Name</label>
					<input type="text" name="name" class="form-control" required >
				  </div>
				
				  <div class="mb-3">
					<label for="email">Email <span class="text-muted"></span></label>
					<input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com" required>
				  </div>
				
				  <div class="mb-3">
					<label for="amount">Amount Donating <span class="text-muted"></span></label>
					<input type="text" class="form-control amont" id="amont" name="amont" required placeholder="eg, 100" required>
					</div>
					<br>
					<button type="submit" class="btn btn-success">Pay from Paypal</button>
				</form>
	  
			</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
		</div>
	  </div>
	</div>
  </div>


  {{-- card --}}
  <div class="modal fade" id="cardMethod1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		    <form class="needs-validation" novalidate id="payment-form" method="POST" action="{{ route('charge') }}">
				@csrf
						<div class="mb-3">
						  <label for="username">Full Name</label>
						  <input type="text" name="name" class="form-control" required >
						</div>
				
						<div class="mb-3">
						  <label for="email">Email <span class="text-muted"></span></label>
						  <input type="email" class="form-control" id="email" name="email" required placeholder="you@example.com" required>
						</div>

						<div class="mb-3">
							<label for="amount">Amount Donating <span class="text-muted"></span></label>
							<input type="text" class="form-control amont" id="amont" name="amont" required placeholder="eg, $100" required>
						  </div>
							<br>
					 
						<div id="card-element">
						  <!-- Elements will create input elements here -->
						</div>
					  
						<!-- We'll put the error messages in this element -->
						<div id="card-errors" role="alert"></div>
					  
						<!-- <button id="submit">Pay</button> -->
						<hr class="mb-4">
						<button type="submit" class="btn btn-primary btn-lg btn-block" type="submit">Continue </button>
					  </form>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>
@endsection
@push('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script src="/base/js/stripe.js"></script>
{{-- <script src="https://js.stripe.com/v3/"></script> --}}
<script>
$(document).ready(function(){

	$("#card").click(function(){
		window.location.href = '/stripe'
	})

	// $(".donate").click(function(){
	// 	var amt = $(this).data("amount")
	// 	$("#payModal").modal("show")
	// 	$(".amont").val(amt)
	// })
	$("#paypal").click(function(){
		$("#paypal1").modal("show")
	})

	$("#card-pay").click(function(){
		$("#cardMethod").modal("show")
	})
})
</script>

    
@endpush