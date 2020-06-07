




@extends('layout')
@section('content')


<div class="banner-area banner-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2><span>Our Donation Plans</span></h2>
                    <ul class="page-title-link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Donation Plans</a></li>
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
<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class="fa fa-paypal"></i> PayPal</a>
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
								<input type="text" class="form-control amont" id="amont" name="amont" required placeholder="you@example.com" required>
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
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
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

	$(".donate").click(function(){
		var amt = $(this).data("amount")
		$("#payModal").modal("show")
		$(".amont").val(amt)
	})
})
</script>

    
@endpush