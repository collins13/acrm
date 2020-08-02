@extends('layout')

@section('content')

<div class="slider-area">
    <div class="slider-wrapper owl-carousel">
        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2">
                        <div class="slider-content-area">
                            <div class="slide-text" style="margin-top:20px;">
                                <h1 class="homepage-three-title">Welcome to <span> AFRICA FOR CHRIST FM RADIO
                                        PROJECTS</span></h1>
                                <p style="text-align: justify; color:white">We provide Christ centered free consultancy
                                    and guidance services to all Christian organizations and individual Christians who
                                    have been called to establish Radio stations in Africa.
                                    will be a witness in sharing Jesus and to reach millions of God's people with the
                                    everlasting Gospel through FM radio& podcasts.</p>

                                <div class="slider-content-btn">
                                    <a class="btn11 btn-sm" href="{{ route('about') }}">AFRICA FOR
                                        CHRIST<div class="transition"></div></a>
                                    <a class="btn11 btn-sm" href="{{ route('contact') }}">VIDEO<div
                                            class="transition"></div></a>
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="col-lg-8 col-md-8 mt-5" style="margin-top: 40px;">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: 70px;">
                            <div class="carousel-inner" style=" z-index: 1;">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/storage/slider/{{ $slider1->image1 ? $slider1->image1 : ""}}" height="500" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/storage/slider/{{ $slider1->image2 ? $slider1->image2 : ""}}" height="500" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/storage/slider/{{ $slider1->image3 ? $slider1->image3 : ""}}" height="500" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2">
                        <div class="slider-content-area">
                            <div class="slide-text" style="margin-top:30px;">
                                <h1 class="homepage-three-title">Welcome to <span> AFRICA FOR CHRIST FM RADIO
                                        PROJECTS</span></h1>
                                <p style="text-align: justify; color:white">
                                    Africa is largely unentered and the large population is unreached by the gospel of
                                    Christ. The same population needs soul nurturing through continuous broadcasts and
                                    besides the gospel sharing the population need constant teachings and educational
                                    programs through radio broadcasts addressing the issues of Public health, sound
                                    sanitation and hygiene,
                                </p>
                                <div class="slider-content-btn">
                                    <a class="btn11 btn-sm" href="{{ route('radio') }}"><span>FM RADIO
                                            STATIONS</span>
                                        <div class="transition"></div>
                                    </a>
                                    <a class="btn11 btn-sm"
                                        href="{{ route('community') }}"><span>COMMUNITY B.
                                            TERMINALS</span>
                                        <div class="transition"></div>
                                    </a>
                                    {{-- <a class="btn11" href="{{ route('podcast') }}"><span>PODCAST
                                        DEVELOPMENT</span>
                                    <div class="transition"></div></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-4 col-xs-4" style="margin-top: 35px;">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" style=" z-index: 1;">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/storage/slider/{{ $slider2->image1 ? $slider2->image1 : ""}}" height="500" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/storage/slider/{{ $slider2->image2 ? $slider2->image2 : ""}}" height="500" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/storage/slider/{{ $slider2->image3 ? $slider2->image3 : ""}}" height="500" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-3 col-xs-3">
                        <div class="slider-content-area">
                            <div class="slide-text" style="margin-top:60px;">
                                <h1 class="homepage-three-title">Welcome to <span> AFRICA FOR CHRIST FM RADIO
                                        PROJECTS</span></h1>
                                {{-- <h2>Africa is largely unentered and the large populaon is unreached by the gospel of Christ. </h2> --}}
                                <p style="text-align: justify; color:white; float:left">
                                    We envisage to have 1000+ FM stations for Christ, one FM every region in Africa and
                                    one community sound broadcast terminal (SBT) every village.
                                    We are looking for Christ centered organizations, Christian churches, individual men
                                    and women of high calling who are either ready to establish FM Radio stations in
                                    their region for the above mission only, or are ready to establish Sound Broadcast
                                    Terminal (SBT) in their region for the above mission only or are ready and willing
                                    to support any of the above project either in their village or far away region.

                                </p>
                                <div class="slider-content-btn">
                                    <a class="btn11 btn-sm"
                                        href="{{ route('projects') }}"><span>PROJECT APPROVED</span>
                                        <div class="transition"></div>
                                    </a>
                                    <a class="btn11 btn-sm" href="{{ route('projects') }}"><span>NEW
                                            PROPOSAL</span>
                                        <div class="transition"></div>
                                    </a>
                                    <a class="btn11 btn-sm"
                                        href="{{ route('partnership') }}"><span>PARTNER WITH US</span>
                                        <div class="transition"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-4 col-xs-4" style="margin-top: 70px;">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" style=" z-index: 1;">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/storage/slider/{{ $slider3->image1 ? $slider3->image1 : ""}}" height="500" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/storage/slider/{{ $slider3->image2 ? $slider3->image2 : ""}}" height="500" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/storage/slider/{{ $slider3->image3 ? $slider3->image3 : ""}}" height="500" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about" class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                    <h4>About Us</h4>
                    <h2>Welcome to AFRICA FOR CHRIST FM RADIO PROJECTS</h2>
                    <p class="text-justify">
                        SAMARITAN LAYMEN MINISTRIES we are faith based organization registered and based in New Jersey,
                        USA. We have a technical office in Dallas TX and in Nairobi Kenya. It is beyond doubt that in
                        Africa FM radio is the best media to reach millions of listeners. We support Christian
                        organizations and Individuals to establish FM radio stations in their communities for
                        advancement and sharing of the Gospel of Jesus Christ...
                    </p>
                    {{-- <p>1. We receive & process requests from allover Africa for FMs & SDTs

                    <p class="text-justify"> We identify and verify presented projects to determine their viability and sustainability to professional and technical standards for the interest of the targeted community...</p> --}}

                    <a class="btn11" href="{{ route('about') }}"><span>Learn More</span>
                        <div class="transition"></div>
                    </a>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <video width="500" height="300" controls autoplay>
                        <source src="/storage/images/{{ $video->name }}" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                    </video>
                </div><!-- end media -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="hr1">

        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                    <h2>Our Services</h2>
                    <p class="lead">
                        Africa is largely unentered and the large population is unreached by the gospel of Christ. The
                        same population needs soul nurturing through continuous broadcasts and besides the gospel
                        sharing the population need constant teachings and educational programs through radio broadcasts
                        addressing the issues of Public health, sound sanitation and hygiene
                    </p>

                    <a href="{{ route('services') }}" class="btn11"><span>Learn More</span>
                        <div class="transition"></div>
                    </a>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="message-box">
                    <h2>Our Partnership</h2>
                    <p class="lead">
                        Many projects proposals that have not been completed needs partners and sponsors. You can adopt
                        a project as the Holy Spirit shall guide you in support of evangelistic effort. Any information
                        that you shall provide shall remain confidential and never shall we share with any other party.
                    </p>

                    <a href="{{ route('partnership') }}" class="btn11"><span>Learn More</span>
                        <div class="transition"></div>
                    </a>
                </div><!-- end messagebox -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->


<div id="services" class="parallax section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Projects</h3>
            <p class="lead">
                If you have a FM radio or CBT project proposal we are here for you. We shall offer you free consultancy
                services to you and your team. </p>

            <p class="leaf">shall do site survey, evaluate the project for free and compile a feasibility study that
                will show its sustainability. After that we shall post it for possible fund raising if the local
                applicant doesn’t have sufficient funds.</p>

        </div><!-- end title -->
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
                                <a href="{{ route('projects') }}"
                                    class="btn btn-sm btn-outline-success btn-block">Fund This Project</a>
                            </div>
                        </div>
        </div>
        @endif
        @endforeach
    </div>
    <div class="owl-services owl-carousel owl-theme">
{{-- 
        @foreach($projects as $project)
            @if($project->status < 100)

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
                        <a href="{{ route('projects') }}"
                            class="btn btn-sm btn-outline-success btn-block">Fund This Project</a>
                    </div>
                </div>
            @endif
        @endforeach --}}



        {{-- <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="/PuzzlePiece2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="/PuzzlePiece2.jpg" alt="" class="img-fluid img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Radio Lira-Uganda</h3>
                    <p>Complete 0%</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <a href="#" class="btn btn-sm btn-outline-success btn-block">Fund This Project</a>
                </div>
            </div>
            

            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="/PuzzlePiece2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="/PuzzlePiece2.jpg" alt="" class="img-fluid img-rounded">
                </div>
                <div class="service-dit">
                    <h3>RadioKindu-Congo</h3>
                    <p>Complete 0%</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <a href="#" class="btn btn-sm btn-outline-success btn-block">Fund This Project</a>
                </div>
            </div>
            
            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="/PuzzlePiece2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="/PuzzlePiece2.jpg" alt="" class="img-fluid img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Podcast Ethiopia</h3>
                    <p>Complete 0%</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <a href="#" class="btn btn-sm btn-outline-success btn-block">Fund This Project</a>
                </div>
            </div> --}}


        <!-- end service -->

        <!-- end service -->
    </div><!-- end row -->

    {{-- <hr class="hr1"> --}}

    <div class="text-center">
        <a href="{{ route('projects') }}" class="btn11"><span>View Our Projects</span></a>
    </div>
</div><!-- end container -->
</div><!-- end section -->

{{-- 
<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_03.png');">
    <div class="container">
        <div class="section-title text-center">
            <h3>Testimonials</h3>
            <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about ACRM</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
                    <div class="testimonial clearfix">
                        
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">
                            <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                            <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                        </div>
                        <div class="testi-meta">
                            <h4>Jacques Philips <small>- Designer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                            <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                        <div class="testi-meta">
                            <h4>Venanda Mercy <small>- Newyork City</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->
                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                            <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                        </div>
                        <div class="testi-meta">                                
                            <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                            <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                        </div>
                        <div class="testi-meta">                                
                            <h4>Jacques Philips <small>- Designer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                            <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                        <div class="testi-meta">                                
                            <h4>Venanda Mercy <small>- Newyork City</small></h4>
                        </div>
                        <!-- end testi-meta -->
                    </div><!-- end testimonial -->
                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="hr1">

        <div class="row logos">
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="uploads/logo_01.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="uploads/logo_02.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="uploads/logo_03.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="uploads/logo_04.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="uploads/logo_05.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 wow fadeInUp">
                <a href="#"><img src="uploads/logo_06.png" alt="" class="img-repsonsive"></a>
            </div>
        </div><!-- end row -->

    </div><!-- end container -->
</div><!-- end section --> --}}


@endsection
