@extends('layout')

@section('content')
<div class="banner-area banner-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2><span>Our Community</span></h2>
                    <ul class="page-title-link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Community</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="parallax section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>COMMUNITY BROADCAST TERMINAL</h3>
            {{-- <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p> --}}
        </div><!-- end title -->


{{-- complete --}}
<div class="card">
   
    <div class="card-body">
      <p>
        This is very simple setup system widely used in mosques and many
heavily crowded open air marketplace in Uganda.<br><br>
The system comprise loud speakers, audio amplifier, small content play
out ipod and two microphones.<br><br>
The system is either auto operated remotely or one man show. In a
crowded open air market place, a kiosk is opened to house the amplifier
and a 20ft pole is erected outside to hold the loud speakers high up in
the air.<br><br>
On top of the hour news is played out, then followed with a one gospel
music then 5-10 five minutes of a message which is either pre recorded
or live. <br><br>The message can be a sermon,health topic,educational program
or foreign language teaching or a local leader passing a message.<br><br> Then
in between paid announcements are made. i.e. a school opening date,
lost child, found lost phone, vaccination exercise.<br><br>
The local stakeholder are responsible for the terminal.</p>
    <br>
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