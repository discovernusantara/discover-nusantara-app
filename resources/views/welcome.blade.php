<!DOCTYPE html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ asset('/img/fav.png') }}">
		<title>TRIP</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset('/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{ asset('/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{ asset('/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{ asset('/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{ asset('/css/main.css')}}">
        </head>
        <style>
            .column img {
				margin-top: 8px;
				vertical-align: middle;
            }
			#custom-trip{
				background: #ffffff;
				border-radius: 20px;
				width: 70%;
				height: 400px;
				margin-top: 100px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				padding: 30px;
			}
			.shadow-bg:hover{
				transition: 0.5s;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			h3 {
				overflow: hidden;
				text-align: center;
			}

			h3:before,
			h3:after {
				background-color: rgb(129, 129, 129);
				content: "";
				display: inline-block;
				height: 1px;
				position: relative;
				vertical-align: middle;
				width: 50%;
			}

			h3:before {
				right: 0.5em;
				margin-left: -50%;
			}

			h3:after {
				left: 0.5em;
				margin-right: -50%;
			}
        </style>
		<body>
			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<!-- Start Header Area -->
				<header class="default-header">
					<nav class="navbar navbar-expand-lg  navbar-light">
						<div class="container">
							  <a class="navbar-brand" href="index.html">
							  	<img src="{{ asset('/img/logo.png')}}" alt="" width="250px" height="30px">
							  </a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="text-white lnr lnr-menu"></span>
							  </button>

							  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							    <ul class="navbar-nav">
									<li><a href="#home">Home</a></li>
									<li><a href="#about">Package</a></li>									
									<li><a href="#secvice">Partner</a></li>
									<li><a href="#gallery">Gallery</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul>
							  </div>						
						</div>
					</nav>
				</header>
				<!-- End Header Area -->				
			</section>

			<section class="" style="margin-top: -50px;">
				<div class="" style="background: url(img/slider3.jpg);background-size: cover; height: 600px;">
					<div style="background: #0000003a; height: 600px">
						
					</div>
				</div>
			</section>
			
			<div class="container" style="margin-top: -450px;">
				<p align="center"><img src="{{ asset('/img/logo.png')}}" alt="" width="400" height="50"></p>
				<p align="center" style="color: white; ">Discover whole indonesia</p>
			</div>

			<div class="container" id="custom-trip">
				<table>
					<tr>
						<td>
							<form style="float:left; width: 50%;">
									<table style="border-left: 2">
										<tr>
											<td colspan="2">
												<div class="form-group">
														<label for="exampleFormControlSelect1" style="font-weight: bold;">Destination</label>
														<select class="form-control" id="exampleFormControlSelect1">
														<option>Jakarta</option>
														<option>Bandung</option>
														<option>Raja Ampat</option>
														<option>Yogyakarta</option>
														<option>Lombok</option>
														</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-group">
														<label for="exampleFormControlInput1">Check In</label>
														<input type="date" class="form-control" id="exampleFormControlInput1" placeholder="28-02-2019">
												</div>
											</td>
											<td>
												<div class="form-group">
														<label for="exampleFormControlInput1">Check In</label>
														<input type="date" class="form-control" id="exampleFormControlInput1" placeholder="28-02-2019">
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="form-group">
														<label for="exampleFormControlSelect1" style="font-weight: bold;">Hotels</label>
														<select class="form-control" id="exampleFormControlSelect1">
														<option>Jakarta</option>
														<option>Bandung</option>
														<option>Raja Ampat</option>
														<option>Yogyakarta</option>
														<option>Lombok</option>
														</select>
												</div>
											</td>
											<td>
												<div class="form-group">
														<label for="exampleFormControlInput1">Person</label>
														<input type="number" class="form-control" id="exampleFormControlInput1" value="1" min="1" max="20">
												</div>
											</td>
										</tr>
										<tr>
											<td colspan="2"><button class="btn primary-btn" style="width: 100%;">BELI</button></td>
										</tr>
									</table>
								</form>
						</td>
						<td style="padding: 20px;" colspan="2" rowspan="2">
							<div id="promo">
									<div id="carouselExampleControls"  style=" margin-left: 30px;" class="carousel slide" data-ride="carousel" style="margin-right: 100px;">
										<div class="carousel-inner">
											<div class="carousel-item active">
											<img class="d-block" src="{{asset('/img/20%.jpg')}}" alt="First slide" width="460" height="300">
											</div>
											<div class="carousel-item">
											<img class="d-block" src="{{asset('/img/80%.jpg')}}" alt="Second slide" width="460" height="300">
											</div>
											<div class="carousel-item">
											<img class="d-block" src="{{asset('/img/50%.jpg')}}" alt="Third slide" width="460" height="300">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
							</div>
						</td>
					</tr>
				</table>
			</div>

			<div class="container" style="margin: auto; margin-top: 50px; width: 73%; ">
				<h3 align="center" style="margin-top: 20px; margin-bottom: 20px;">TRAVELING PACKAGE</h3>
				@for ($i=0; $i<=7; $i++)
				<div class="card shadow-bg" style="width: 23%; float:left; margin: 10px;">
					<img class="card-img-top" src="http://borobudurpark.com/wp-content/uploads/2017/02/borobudur1-1024x683.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 style="float: left;">Borobudur</h5>
						<p class="card-text" style="color: #15AAFF; float: right">Rp.999999</p>                      
						<p class="card-text" style="margin-top: 30px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum impedit modi necessitatibus architecto.</p>
						<p class="card-text" style="float: left;">	                        
							<i class="fa fa-user" style="color:#15AAFF " aria-hidden="true"></i> 1 - 10 Orang
						</p>
						<p class="card-text" style="float: right;">
							Vehicle: <i class="fa fa-plane" style="color:#15AAFF " aria-hidden="true"></i>
							<i class="fa fa-bus" style="color:#15AAFF " aria-hidden="true"></i>
						</p>
					</div>
				</div>
				@endfor
			</div>
           
			<!-- End about Area -->

			<div class="container" style="width: 73%;">
				<h3 align="center" style="margin-top: 900px;">Payment Partner</h3>
				<table style="width: 80%; margin: auto;">
					<tr>
						<td>
							<h4>t-money</h4>
							<p>Telkom Money (disebut juga t-money) adalah produk layanan keuangan digital berupa uang elktronik dari PT Telekomunikasi Indonesia. Fungsi dari t-money adalah sebagai medium yang memungkinkan pengguna untuk melakukan transaksi, pengiriman uang, penarikan uang, membayar tagihan, dan lain sebagainya.</p>
						
						</td>
						<td>
							<img src="http://www.indonesia-wifi.com/wp-content/uploads/2018/06/t-money-1a.jpg" alt="">
						</td>
					</tr>
				</table>
			</div>
			
			
			<!-- Start project Area -->
			<section class="project-area section-gap" id="project" style="margin-top: 0px">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-30 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Nusantara Gallery</h1>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex">
						<div class="active-works-carousel mt-40 col-lg-8">
							<div class="item">
								<img class="img-fluid" src="{{ asset('/img/why.jpg')}}" alt="">
							</div>
							<div class="item">
								<img class="img-fluid" src="{{ asset('/img/why.jpg')}}" alt="">
							</div>
							<div class="item">
								<img class="img-fluid" src="{{ asset('/img/why.jpg')}}" alt="">
							</div>
							<div class="item">
								<img class="img-fluid" src="{{ asset('/img/why.jpg')}}" alt="">
							</div>
							<div class="item">
								<img class="img-fluid" src="{{ asset('/img/why.jpg')}}" alt="">
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End project Area -->


			<!-- Start feature Area -->
			<!-- <section class="feature-area section-gap" id="secvice">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Some Features that Made us Unique</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4 col-md-6 ">
							<div class="single-feature mb-30">
								<div class="title d-flex flex-row pb-20">
									<span class="lnr lnr-user"></span>
									<h4><a href="#">Expert Technicians</a></h4>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>							
							</div>							
						</div>
						<div class="col-lg-4 col-md-6 ">
							<div class="single-feature mb-30">
								<div class="title d-flex flex-row pb-20">
									<span class="lnr lnr-license"></span>
									<h4><a href="#">Professional Service</a></h4>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>							
							</div>							
						</div>
						<div class="col-lg-4 col-md-6 ">
							<div class="single-feature mb-30">
								<div class="title d-flex flex-row pb-20">
									<span class="lnr lnr-phone"></span>
									<h4><a href="#">Great Support</a></h4>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>							
							</div>							
						</div>
						<div class="col-lg-4 col-md-6 ">
							<div class="single-feature">
								<div class="title d-flex flex-row pb-20">
									<span class="lnr lnr-rocket"></span>
									<h4><a href="#">Technical Skills</a></h4>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>							
							</div>							
						</div>
						<div class="col-lg-4 col-md-6 ">
							<div class="single-feature">
								<div class="title d-flex flex-row pb-20">
									<span class="lnr lnr-diamond"></span>
									<h4><a href="#">Highly Recomended</a></h4>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>							
							</div>							
						</div>
						<div class="col-lg-4 col-md-6 ">
							<div class="single-feature">
								<div class="title d-flex flex-row pb-20">
									<span class="lnr lnr-bubble"></span>
									<h4><a href="#">Positive Reviews</a></h4>
								</div>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>							
							</div>							
						</div>																					
					</div>
				</div>	
			</section> -->
			<!-- End feature Area -->


			<!-- Start gallery Area -->
			<!-- <section class="gallery-area" id="gallery">
				<div class="container-fluid">
					<div class="row no-padding">
						<div class="active-gallery">
							<div class="item single-gallery">
								<img src="{{ asset('/img/g1.jpg')}}" alt="">
							</div>	
							<div class="item single-gallery">
								<img src="{{ asset('/img/g2.jpg')}}" alt="">
							</div>	
							<div class="item single-gallery">
								<img src="{{ asset('/img/g3.jpg')}}" alt="">
							</div>	
							<div class="item single-gallery">
								<img src="{{ asset('/img/g4.jpg')}}" alt="">
							</div>	
							<div class="item single-gallery">
								<img src="{{ asset('/img/g5.jpg')}}" alt="">
							</div>	
							<div class="item single-gallery">
								<img src="{{ asset('/img/g6.jpg')}}" alt="">
							</div>																		
						</div>
					</div>
				</div>	
			</section> -->
			<!-- End gallery Area -->
			
			
			<!-- Start faq Area -->
				<!-- <section class="faq-area section-gap" id="faq">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-60 col-lg-8">
								<div class="title text-center">
									<h1 class="mb-10">Frequently Asked Questions</h1>
									<p>Who are in extremely love with eco friendly system.</p>
								</div>
							</div>
						</div>							
						<div class="row d-flex align-items-center">
							<div class="counter-left col-lg-3 col-md-3">
								<div class="single-facts">
									<h2 class="counter">5962</h2>
									<p>Projects Completed</p>							
								</div>
								<div class="single-facts">
									<h2 class="counter">2394</h2>
									<p>New Projects</p>							
								</div>
								<div class="single-facts">
									<h2 class="counter">1439</h2>
									<p>Tickets Submitted</p>							
								</div>												
								<div class="single-facts">
									<h2 class="counter">933</h2>
									<p>Cup of Coffee</p>							
								</div>
							</div>	
							<div class="faq-content col-lg-9 col-md-9">
								<div class="single-faq">
									<h2 class="text-uppercase">
										Are your Templates responsive?
									</h2>
									<p>
										“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
									</p>
								</div>
								<div class="single-faq">
									<h2 class="text-uppercase">
										Does it have all the plugin as mentioned?
									</h2>
									<p>
										“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
									</p>
								</div>
								<div class="single-faq">
									<h2 class="text-uppercase">
										Can i use the these theme for my client?
									</h2>
									<p>
										“Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior.
									</p>
								</div>												
							</div>									
						</div>
					</div>
				</section> -->
			<!-- End faq Area -->
			
			
			<!-- Start Video Area -->
			<!-- <section class="video-area pt-40 pb-40">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="video-content">
						<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="play-btn"><img src="{{ asset('/img/play-btn.png')}}" alt=""></a>
						<div class="video-desc">
							<h3 class="h2 text-white text-uppercase">Being unique is the preference</h3>
							<h4 class="text-white">Youtube video will appear in popover</h4>
						</div>
					</div>
				</div>
			</section> -->
			<!-- Start Video Area -->
			
			
			<!-- Start logo Area -->
			<!-- <section class="logo-area">
				<div class="container">
					<div class="row">
						
					</div>
				</div>	
			</section> -->
			<!-- End logo Area -->
			
							
			<!-- start contact Area -->		
			<!-- <section class="contact-area section-gap" id="contact">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">If you need, Just drop us a line</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>										
					<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
						<div class="row">	
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
						
							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							<button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
							<div class="alert-msg">								
						</div>
						</div></div>
					</form>						
					
				</div>	
			</section> -->
			<!-- end contact Area -->		
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            		<p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">

										<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="d-flex flex-row">

											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
				                          	
											<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
										</div>		
										<div class="info"></div>
										</form>
								</div>
								</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->			

			<script src="{{ asset('/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="{{ asset('/js/vendor/bootstrap.min.js')}}"></script>
			<script src="{{ asset('/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{ asset('/js/jquery.magnific-popup.min.js')}}"></script>	
			<script src="{{ asset('/js/owl.carousel.min.js')}}"></script>			
			<script src="{{ asset('/js/jquery.sticky.js')}}"></script>
			<script src="{{ asset('/js/slick.js')}}"></script>
			<script src="{{ asset('/js/jquery.counterup.min.js')}}"></script>
			<script src="{{ asset('/js/waypoints.min.js')}}"></script>		
			<script src="{{ asset('/js/main.js')}}"></script>	
		</body>
	</html>