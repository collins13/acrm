@extends('layout')
@section('content')
<div class="container">
    <div class="row">
     
      <div class="col-md-8 order-md-1">
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
    </div>
  </div>

  @endsection

@push('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script src="/base/js/stripe.js"></script>
@endpush