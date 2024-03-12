
@extends ('home')

@section('header')
<!-- Header Area -->
<header class="header" >
		
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="img/navlogo.png" alt="logo of Nepal Futsal Manager"></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="active"><a href="index.html">Home</a>
                                            
                                        </li>
                                        <li><a href="/aboutus">About Us </a></li>
                                        <li><a href="futsal.html">Futsals </a></li>
                                        <li><a href="bookfutsal.html">Book Futsal</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        
                        <div class="col-lg-1 col-6">
                            <div class="get-quote">
                                
                                <li><a href="#" class="btn">Login </a>
                                    <ul class="dropdown">
                                        <li><a href="#">User</a></li>
                                        <li><a href="#">Futsal</a></li>
                                        <li><a href="#">Staff</a></li>
                                    </ul>
                                </li>
                                    
                                
                            </div>
                            
                        </div>
                        <div class="col-lg-1 col-6">
                            <div class="get-quote">
                            <li><a href="#" class="btn">Register</a>
                            <ul class="dropdown">
                                <li><a href="#">User</a></li>
                                <li><a href="#">Futsal</a></li>
                                <li><a href="#">Staff</a></li>
                            </ul>
                            </li>

                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

@endsection

@section('footer')
<!-- Footer Area -->
<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Your one stop platform for seamless futsal bookings and comprehensive management tools, revolutionizing the futsal experience in Nepal</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Futsals</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Book Futsal</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
												
										</ul>
									
									
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Contact us during following hours</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024  |  All Rights Reserved by <a href="#" target="_blank">Nepal Futsal Manager</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
@endsection

@section('helpsidebar')
<!-- side help area -->
<ul class="pro-features">
			<a class="get-pro" href="#">Help?</a>
			<li class="title">For Futsals</li>
			<li>Register Futsal and Manager your futsal</li>
			<li class="title">For User</li>
			<li>Just Register, Login and Start.</li>


			<div class="button">
				<a href="#" target="_blank" class="btn">Contact Us</a>
				<a href="#" target="_blank" class="btn">Book Futsal</a>
			</div>
		</ul>
@endsection
