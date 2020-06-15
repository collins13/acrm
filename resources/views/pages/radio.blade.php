@extends('layout')

@section('content')
<div class="banner-area banner-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2><span>Our Fm Radio</span></h2>
                    <ul class="page-title-link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Fm Radio</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="parallax section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>FM Radio</h3>
            {{-- <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p> --}}
        </div><!-- end title -->


{{-- complete --}}
<div class="card">
   
    <div class="card-body">
      <p>
        We envisage to install 1000 FM stations around Africa, we are focusing more
        1kW. this require transmitter, antennae , cables, and mast.
        This can cover a radius of 50miles radius. However other regions might need a
        much smaller unit for 300watts. That should cover 10miles radius.<br>
        Once the infrastructure is up and running we can decide with local stakeholders,
        donors and other partners whether it should be studio operated or automated
        content flow through online, satellite pre-recorded programs.<br>
        The local stakeholders shall be in charge of local operations and related
        expenses. 
        These includes staff, utility bills and regular submission of reports.<br>
        We have list of completed projects and those that have been verified by our
        board and ready for funding. If you are interested in sponsoring one of these
        projects like click the one you wish to be partner. <br> For those that will sponsor
        50%-100% the station shall be named after their name.<br>
        <form action="">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="Check1">
                <label class="form-check-label" for="exampleCheck1">YES I wish to partner with you in adopting FM project.</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="Check2">
                <label class="form-check-label" for="exampleCheck1">Yes, I wish to donate to a project</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="Check13>
                <label class="form-check-label" for="exampleCheck1">Yes I wish to propose a project for consideration</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="Check4">
                <label class="form-check-label" for="exampleCheck1">Yes I wish to pray for the project </label>
              </div>
        </form>
     
      </p>
    </div>
  </div>

    </div>
</div>

<!-- Button trigger modal -->
<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="checkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Prayer Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('prayer') }}" method="POST" >
            @csrf
              <div class="row">
                  <div class="col-md-6">
                      <label for="name">Full Name</label>
                      <input type="text" name="name" id="name" class="form-control" required>
                  </div>

                  <div class="col-md-6">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-md-12">
                    <label for="parayer">Prayer</label>
                    <textarea name="message" id="message" cols="30" rows="10" required class="form-control"></textarea>
                  </div>
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
      
      </div>
    </div>
  </div>
@endsection
@push('scripts')
<script>
$(document).ready(function(){
    $("#Check1").click(function(){
        setTimeout(() => {
            window.location.href = '/partnership'
        }, 1000);
    })

     $("#Check2").click(function(){
        setTimeout(() => {
            window.location.href = '/donate'
        }, 1000);
    })

    $("#Check3").click(function(){
        setTimeout(() => {
            window.location.href = '/projects'
        }, 1000);
    })

    $("#Check4").click(function(){
        $("#checkModal").modal("show");
    })
})
</script>

    
@endpush