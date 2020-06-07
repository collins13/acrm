@extends('layout')

@section('content')
<div class="banner-area banner-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2><span>Our Portfolio</span></h2>
                    <ul class="page-title-link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Portfolio</a></li>
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

<div class="owl-services owl-carousel owl-theme">

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
        </div>
    </div>
    @endif
    @endforeach
    
    

    <!-- end service -->

</div><!-- end row -->
{{-- ?end --}}



<br>

        <div class="owl-services owl-carousel owl-theme">

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
                    <a href="#" class="btn btn-sm btn-outline-success btn-block" id="project">Fund This Project</a>
                </div>
            </div>

            @endif
            @endforeach
            

            <!-- end service -->

            <!-- end service -->
        </div><!-- end row -->

        <hr class="hr1">
<h1 class="text-center">Send us proposal below form</h1><hr>
        <form action="{{ route('proposal') }}" method="post" role="form" class="php-email-form">
          @csrf
            <div class="row">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 form-group">
                <input type="text" name="name_org" class="form-control" id="name_org" placeholder="Name of Organisation" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 form-group">
                <input type="text" name="p_adress" class="form-control" id="p_adress" placeholder="Physical adress" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <br>
              <div class="col-md-3">
                <input type="text" name="t_no" id="t_no" class="form-control" placeholder="Telephone No">
                <div class="validate"></div>
              </div>
              <br><br>
              <div class="col-md-3">
                <input type="text" name="m_no" id="m_no" class="form-control" placeholder="Mobile No">
                <div class="validate"></div>
              </div>
              <br><br>
              <div class="col-md-3">
                <input type="text" name="town" id="town" class="form-control" placeholder="Town/City">
                <div class="validate"></div>
              </div>
              <br><br>
              <div class="col-md-3">
                <input type="text" name="country" id="country" class="form-control" placeholder="Country">
                <div class="validate"></div>
              </div>
              <br><br>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
         
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Project description"></textarea>
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
@endsection
@push('scripts')
<script>

$(document).ready(function(){
$("#project").click(function(){
    $("#projectModal").modal("show")
})
})
</script>
  
@endpush