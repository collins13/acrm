@extends('layout')

@section('content')
<div class="banner-area banner-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2><span>Our Projects</span></h2>
                    <ul class="page-title-link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Projects</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="services" class="parallax section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Projects</h3>
            {{-- <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p> --}}
        </div><!-- end title -->


{{-- complete --}}
<div class="row">
  @foreach($projects as $project)
  @if($project->status >= 100)
  <div class="col-md-4 mb-3">
    <div class="service-widget">
        <div class="post-media wow fadeIn">
            <a href="/PuzzlePiece2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
            <img src="/storage/images/{{ $project->image }}" alt="" class="img-fluid img-rounded">
        </div>
        <div class="service-dit">
            <h3>{{ $project->name }}</h3>
            <p>{{ ($project->status >=100) ? "Completed" : $project->status."%" }}</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            {{-- <a href="#" class="btn btn-sm btn-outline-success btn-block">Fund This Project</a> --}}
        </div>
    </div>
  </div>
  @endif
  @endforeach
</div>
<br><hr>
<div class="row">
  @foreach($projects as $project)
  @if($project->status < 100)
      <div class="col-md-4 mb-3">
          <div class="service-widget">
              <div class="post-media wow fadeIn">
                  <a href="/base/uploads/service_01.jpg" data-rel="prettyPhoto[gal]"
                      class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="/storage/images/{{ $project->image }}" alt="" class="img-fluid img-rounded">
              </div>
              <div class="service-dit">
                  <h3>{{ $project->name }}</h3>
                  <p>Complete {{ $project->status }}%</p>
              </div>
              <div class="card-footer bg-transparent border-success">
                  <a href="{{ route('donate') }}"
                      class="btn btn-sm btn-outline-success btn-block">Fund This Project</a>
              </div>
          </div>
</div>
@endif
@endforeach
</div>
{{-- <div class="owl-services owl-carousel owl-theme">

    @foreach($projects as $project)
    @if($project->status >= 100)
    <div class="service-widget">
        <div class="post-media wow fadeIn">
            <a href="/PuzzlePiece2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
            <img src="/storage/images/{{ $project->image }}" alt="" class="img-fluid img-rounded">
        </div>
        <div class="service-dit">
            <h3>{{ $project->name }}</h3>
            <p>{{ ($project->status >=100) ? "Completed" : $project->status."%" }}</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            {{-- <a href="#" class="btn btn-sm btn-outline-success btn-block">Fund This Project</a> --}}
        {{-- </div>
    </div>
    @endif
    @endforeach

</div> --}}
{{-- ?end --}}



<br>

        {{-- <div class="owl-services owl-carousel owl-theme">

            @foreach($projects as $project)
            @if($project->status < 100)
            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="/PuzzlePiece2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="/storage/images/{{ $project->image }}" alt="" class="img-fluid img-rounded">
                </div>
                <div class="service-dit">
                    <h3>{{ $project->name }}</h3>
                    <p>Complete {{ $project->status."%" }}</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <a href="#" class="btn btn-sm btn-outline-success btn-block donate">Fund This Project</a>
                </div>
            </div>

            @endif
            @endforeach --}}
            

            <!-- end service -->

            <!-- end service -->
        </div>

        <hr class="hr1">
<h1 class="text-center">Send us proposal below form</h1><hr>
        <form action="{{ route('proposal') }}" method="post" role="form" class="php-email-form">
          @csrf
            <div class="row">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" required id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 form-group">
                <input type="text" name="name_org" required class="form-control" id="name_org" placeholder="Name of Organisation" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 form-group">
                <input type="text" name="p_adress" required class="form-control" id="p_adress" placeholder="Physical adress" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <br>
              <div class="col-md-3">
                <input type="text" name="t_no" required id="t_no" class="form-control" placeholder="Telephone No">
                <div class="validate"></div>
              </div>
              <br><br>
              <div class="col-md-3">
                <input type="text" name="m_no" required id="m_no" class="form-control" placeholder="Mobile No">
                <div class="validate"></div>
              </div>
              <br><br>
              <div class="col-md-3">
                <input type="text" name="town" required id="town" class="form-control" placeholder="Town/City">
                <div class="validate"></div>
              </div>
              <br><br>
              <div class="col-md-3">
                <input type="text" name="country" required id="country" class="form-control" placeholder="Country">
                <div class="validate"></div>
              </div>
              <br><br>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" required name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
         
            <div class="form-group">
              <textarea class="form-control" required name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Project description"></textarea>
              <div class="validate"></div>
            </div>
            
            <div class="text-center"><button type="submit" class="btn btn-success btn-block">Submit</button></div>
          </form>
    </div><!-- end container -->
</div><!-- end section -->


<!-- Button trigger modal -->  
  <!-- Modal -->
  <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
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
@endsection
@push('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script src="/base/js/stripe.js"></script>
<script>

$(document).ready(function(){
$("#project").click(function(){
    $("#projectModal").modal("show")
})

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