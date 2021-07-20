@extends('layout')

@section('content')
<div class="banner-area banner-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2><span>Partnership</span></h2>
                    <ul class="page-title-link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Parnership</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="services" class="parallax section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Partnership</h3>
            <p class="lead">Many projects proposals that have not been completed needs partners and sponsors. You can adopt a project as the Holy Spirit shall guide you in support of evangelistic effort.

                Any information that you shall provide shall remain confidential and never shall we share with any other party.</p>
        </div><!-- end title -->

        <hr class="hr1">
{{-- <h1 class="text-center">Send us proposal below form</h1><hr> --}}
        <form action="{{ route('new_partnership') }}" method="post" role="form" class="php-email-form">
          @csrf
            <div class="row">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" required placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 form-group">
                <input type="text" name="name_org" class="form-control" required id="name_org" placeholder="Name of Organisation" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 form-group">
                <input type="text" name="p_adress" class="form-control" required id="p_adress" placeholder="Physical adress" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-3">
                <input type="text" name="t_no" id="t_no" class="form-control" required placeholder="Telephone No">
                <div class="validate"></div>
              </div>
              <div class="col-md-3">
                <input type="text" name="m_no" id="m_no" class="form-control" required placeholder="Mobile No">
                <div class="validate"></div>
              </div>
              <div class="col-md-3">
                <input type="text" name="town" id="town" class="form-control" required placeholder="Town/City">
                <div class="validate"></div>
              </div>
              <div class="col-md-3">
                <input type="text" name="country" id="country" class="form-control" required placeholder="Country">
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" required placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            {{-- <div class="col-md-6 form-group" style="background-color: white; height:30px;">
              <div id="card-element">
							  <!-- Elements will create input elements here -->
							</div>

							<!-- We'll put the error messages in this element -->
							<div id="card-errors" role="alert"></div>

							<!-- <button id="submit">Pay</button> -->
            </div>

							<br> --}}
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Project description"></textarea>
              <div class="validate"></div>
            </div>

            <div class="text-center">
              <hr class="mb-4">
							<button type="submit" class="btn btn-primary btn-lg btn-block">Continue </button>
            </div>
          </form>
    </div><!-- end container -->
</div><!-- end section -->
@endsection

@push('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script src="/base/js/stripe.js"></script>

@endpush
