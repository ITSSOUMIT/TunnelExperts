<!DOCTYPE html>
<html> 

<head>
		<!-- meta tag -->
		<meta charset="utf-8">
		<title>Home | Tunnel Experts</title>
		<meta name="description" content="">
		<!-- responsive tag -->
		<?php include('stylesheet.php'); ?>
		
	</head>
	<body class="defult-home">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
	   	<div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="assets/images/logo-te.png" alt="Tunnel Experts&#174;"></div>
                </div>
            </div>              
        </div>
		<!--Preloader area end here-->
			
		<!-- Main content Start -->
		<div class="main-content">

			<?php include('header.php'); ?>

			<!-- Slider Start -->
			<div id="rs-slider" class="rs-slider rs-slider-style2 rs-slider-style4">
			    <div class="bend niceties">
			        <div id="nivoSlider" class="slides">
			            <img src="assets/images/slider/style1/h3-1.jpg" alt="" title="#slide-1" />
			            <img src="assets/images/slider/style1/h3-2.jpg" alt="" title="#slide-2" />
			        </div>
			        <!-- Slide 1 -->
			        <div id="slide-1" class="slider-direction">
			           <div class="container">
			           		<div class="content-part text-center">
			           		    <h1 class="sl-title">
								   Welcome to Tunnel Experts®
			           		    </h1>
								<span class="sl-subtitle">Keeping your operations on track</span>
			           		</div>
			           </div>
			        </div>
			        <!-- Slide 2 -->
			        <div id="slide-2" class="slider-direction">
			        	<div class="container">
		        			<div class="content-part text-center">
								<h1 class="sl-title">
									A leading & socially resource supplier of waterproofing & other construction materials. 
			           		    </h1>
		        			</div>
			        	</div>
			        </div>
			    </div>
			</div>
			<!-- Slider End -->

			<div class="rs-services services-style2 md-pb-0">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-lg-3">
							<div class="services-box">
								<div class="services-icon">
									<a href="#">
										<img class="dance_hover" src="assets/images/services/style2/iso.png" alt="Images">
									</a>
								</div>
								<div class="services-content">
									<h3 class="title"><a href="#">ISO Certified Company</a></h3>
									<p class="services-txt">  
										Tunnel Experts® is an ISO 9001:2015 certified company located in central INDIA with advantageous geographical location.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="services-box services-yellow-box">
								<div class="services-icon">
									<a href="#">
										<img class="dance_hover" src="assets/images/services/style2/quality.png" alt="Images">
									</a>
								</div>
								<div class="services-content">
									<h3 class="title"><a href="#">Quality</a></h3>
									<p class="services-txt">  
										Tunnel Experts® products are mainly distinguished for its superior QUALITY along with efficient technical services.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="services-box">
								<div class="services-icon">
									<a href="#">
										<img class="dance_hover" src="assets/images/services/style2/customer.png" alt="Images">
									</a>
								</div>
								<div class="services-content">
									<h3 class="title"><a href="#">100% Customer Satisfaction</a></h3>
									<p class="services-txt">  
										Tunnel Experts® serves with unmatched quality, dedicated work force in order to achieve 100% customer satisfaction.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="services-box services-yellow-box">
								<div class="services-icon">
									<a href="#">
										<img class="dance_hover" src="assets/images/services/style2/360.png" alt="Images">
									</a>
								</div>
								<div class="services-content">
									<h3 class="title"><a href="#">Works on 360 Degree</a></h3>
									<p class="services-txt">  
										Leverage agile frameworks to provide a robust synopsis for high 
										level overviews iterative approaches to corporate.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- About Start -->
			<div class="rs-about about-style1 bg1 pt-120 pb-120 md-pt-80 md-pb-80">
				<div class="container">
					<div class="row y-middle">
						<div class="col-12 pl-50 md-pl-15">
							<div class="sec-title">
								<h2 class="title pb-20">
									Tunnel Experts®
								</h2>
								<p class="desc pb-37">
									We are a leading and socially responsible supplier of waterproofing material, which has wide usage in civil, mechanical and environmental engineering applications today. Providing quality and perfection in all its product offerings has been the sole objective ever since our establishment in the year 1990. We have carved a special niche for ourselves in this highly competitive industry by committing ourselves to innovation and excellence to grow in terms of Size, Domain, Goodwill & Credibility.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About End -->

		</div> 
		<!-- Main content End -->
	 
		<?php include('footer.php'); ?>

		<!-- start scrollUp  -->
		<div id="scrollUp">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->

		<?php include('js.php'); ?>

        <script>
            var element = document.getElementById("head-home");
            element.classList.add("current-menu-item");
        </script>
	</body>
</html>