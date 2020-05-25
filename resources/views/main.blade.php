@extends('layout')

@section('content')

<div class="slider-area">
    <div class="slider-wrapper owl-carousel">
        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Welcome to  <span>ACRM</span> AFRICA FOR CHRIST RADIO MINISTRIES</h1>
                                <h2>we provide Christ centered free consultancy and guidance services to all Christian organizations and individual Christians who have been called to establish Radio stations for Africa. </h2>
                                <div class="slider-content-btn">
                                    <a class="btn11" href="{{ route('about') }}">Read More<div class="transition"></div></a>
                                    <a class="btn11" href="{{ route('contact') }}">Contact<div class="transition"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Welcome to  <span>ACRM</span> AFRICA FOR CHRIST RADIO MINISTRIES</h1>
                                <h2>Africa is largely unentered and the large populaon is unreached by the gospel of Christ. </h2>
                                <div class="slider-content-btn">
                                    <a class="btn11" href="#"><span>Read More</span><div class="transition"></div></a>
                                    <a class="btn11" href="#"><span>Contact</span><div class="transition"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Welcome to  <span>ACRM</span> AFRICA FOR CHRIST RADIO MINISTRIES</h1>
                                {{-- <h2>Africa is largely unentered and the large populaon is unreached by the gospel of Christ. </h2> --}}
                                <div class="slider-content-btn">
                                    <a class="btn11" href="#"><span>Read More</span><div class="transition"></div></a>
                                    <a class="btn11" href=""><span>Contact</span><div class="transition"></div></a>
                                </div>
                            </div>
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
                    <h2>Welcome to ACRM</h2>
                    <p>1. We receive & process requests from allover Africa for FMs & SDTs

                    <p class="text-justify"> We identify and verify presented projects to determine their viability and sustainability to professional and technical standards for the interest of the targeted community...</p>

                    <a class="btn11" href="{{ route('about') }}"><span>Learn More</span><div class="transition"></div></a>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <video width="500" height="300" controls autoplay>
						<source src="/Video Sample.mp4" type="video/mp4">
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
                        Africa is largely unentered and the large populaon is unreached by the gospel of Christ. The same populaon needs soul nurturing through connuous broadcasts and besides the gospel sharing  the populaon need constant teachings and educaonal programs through radio broadcasts addressing the issues of  Public health, sound sanitaon and hygiene
                    </p>

                    <a href="{{ route('services') }}" class="btn11"><span>Learn More</span><div class="transition"></div></a>
                </div><!-- end messagebox -->
            </div><!-- end col -->
            
            <div class="col-md-6">
                <div class="message-box">
                    <h2>Our Partnership</h2>
                    <p class="lead">
                        Many projects proposals that have not been completed needs partners and sponsors. You can adopt a project as the Holy Spirit shall guide you in support of evangelistic effort. Any information that you shall provide shall remain confidential and never shall we share with any other party.
                    </p>

                    <a href="{{ route('partnership') }}" class="btn11"><span>Learn More</span><div class="transition"></div></a>
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
                If you have a FM radio or CBT project proposal we are here for you. We shall offer you free consultancy services to you and your team.    </p>

<p class="leaf">shall do site survey, evaluate the project for free and compile a feasibility study that will show its sustainability. After that we shall post it for possible fund raising if the local applicant doesn’t have sufficient funds.</p>
        
        </div><!-- end title -->

        <div class="owl-services owl-carousel owl-theme">


            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="uploads/service_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="uploads/service_01.jpg" alt="" class="img-fluid img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Radio Bunia-Congo</h3>
                    <p>Complete 0%</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <a href="#" class="btn btn-sm btn-outline-success btn-block">Fund This Project</a>
                </div>
            </div>
            

            <div class="service-widget">
                <div class="post-media wow fadeIn">
                    <a href="uploads/service_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="uploads/service_01.jpg" alt="" class="img-fluid img-rounded">
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
                    <a href="uploads/service_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="uploads/service_01.jpg" alt="" class="img-fluid img-rounded">
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
                    <a href="uploads/service_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    <img src="uploads/service_01.jpg" alt="" class="img-fluid img-rounded">
                </div>
                <div class="service-dit">
                    <h3>Podcast Ethiopia</h3>
                    <p>Complete 0%</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <a href="#" class="btn btn-sm btn-outline-success btn-block">Fund This Project</a>
                </div>
            </div>
            

            <!-- end service -->

            <!-- end service -->
        </div><!-- end row -->

        <hr class="hr1">

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