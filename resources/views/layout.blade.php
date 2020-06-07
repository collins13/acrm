<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>AFRICA FOR CHRIST RADIO MINISTRIES</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="/base/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/base/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/base/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/base/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/base/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/base/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="/base/js/modernizer.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="right-top">
						<div class="social-box">
							<ul>
								<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
							<ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="left-top">
						<div class="email-box">
							<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> mogusu@gmail.com</a>
						</div>
						<div class="phone-box">
							<a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i> +254 722 508899</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="navbar-header">
					<a class="navbar-brand" href="{{ url('/') }}">ACRM</a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li><a class="active" href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li><a href="{{ route('services') }}">Our Services</a></li>
                        <li><a href="{{ route('projects') }}">Projects</a></li>
                        <li><a href="{{ route('partnership') }}">Partnership</a></li>
                        <li><a href="{{ route('donate') }}">Donate</a></li>
                        {{-- <li><a href="pricing.html">Pricing</a></li> --}}
						<li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
	
@yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">

				<div class="col-md-6 col-lg-3 mr-5">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Useful links</h3>
                        </div>

                        <ul class="footer-links hov">
                            <li><a href="{{ url('/') }}">Home <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="{{ route('about') }}">About us <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="{{ route('services') }}">Our Services <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="{{ route('projects') }}">Projects <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="{{ route('partnership') }}">Partnership <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="{{ route('contact') }}">Contact <span class="icon icon-arrow-right2"></span></a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
             
				<div class="col-md-6 col-lg-3 mr-5">
					<div class="widget footer-contact clearfix">
						<div class="widget-title">
                            <h3>Contact Us</h3>
                        </div>
						
						<ul>
							<li>Enoch Mogusu</li>
							<li>Phone: <a href="#">+254 722 508899  </a></li>
							<li>Email: <a href="#">mogusu@gmail.com </a></li>
						</ul>
						
					</div>
                </div>
                
                <div class="col-md-6 col-lg-3">
					<div class="widget footer-contact clearfix">
                        <div class="widget-title">
                            <h3>Social links</h3>
                        </div>
						<ul class="social-list">
							<li><a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://linkedin.com/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							
						</ul>
						
					</div>
				</div>
				
				
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; <?= date('Y') ?> <a href="#">AFRICA FOR CHRIST RADIO MINISTRIES</a>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="/base/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="/base/js/custom.js"></script>
    <script src="/base/js/portfolio.js"></script>
    <script src="/base/js/hoverdir.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function(){
            
            @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
            @endif
            @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
            @endif
            @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
            @endif
            @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
            @endif
        })
    </script>
@stack('scripts')
</body>
</html>