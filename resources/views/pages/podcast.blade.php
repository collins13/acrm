@extends('layout')

@section('content')
<div class="banner-area banner-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2><span>Our Podcast</span></h2>
                    <ul class="page-title-link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Podcast</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="parallax section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>PODCAST DEVELOPMENT</h3>
            {{-- <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p> --}}
        </div><!-- end title -->


{{-- complete --}}
<div class="card">
   
    <div class="card-body">
      <p>
        This is building and content resource management where local FM
        stations/churches /professionals can record 5min/13min programs in
        high quality and well researched topics. Then these programs are
        collected and edited to required standards before uploaded to archives of
        asset management for easy downloading and easy playout.,<br>
        This can be accessed by anyone for free from online app that is mobile
        friendly. This asset management system shall be used as a resource for
        content supply for FM stations and CBT. The podcast production is
        managed by Central administration. Of Africa For Christ Radios of Sun
        Ministries.</p>
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
          <form action="">
              <div class="row">
                  <div class="col-md-6">
                      <label for="name">Full Name</label>
                      <input type="text" name="name" id="name" class="form-control">
                  </div>

                  <div class="col-md-6">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-md-12">
                    <label for="parayer">Prayer</label>
                    <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
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