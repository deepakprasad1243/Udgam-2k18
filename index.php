<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html lang="en">
<head>
<title>UDGAM'18</title>
<link rel="icon" href="images/ulogo.png" />
<meta name="viewport" content="width=1024">
<!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
<meta charset="utf-8">


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<!---------------------------------------------------------------from web------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- animation -->
<link href="css/aos.css" rel="stylesheet" type="text/css" media="all" /><!-- //animation effects-css-->
<!-- //animation -->
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--------------------------------------------------------------end from web---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<link href="css-1/style.css" rel="stylesheet" type="text/css" media="all" />

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>


<!---------------------------------------------------------------from web-1------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>

	
	
	
<meta name="google-site-verification" content="nAWb8CHT2Nf3APJyGwoxYsJiXFCRiDl8wGKtQnhBhzE" />
     <link rel="icon" href="ulogo.png" type="image/x-icon">
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.5.1/pixi.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.6.5/dat.gui.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Indie+Flower');
@import url(https://fonts.googleapis.com/css?family=Covered+By+Your+Grace);


#head
{
    margin: 0;
    padding: 0;
	 
    overflow: hidden;
}
#background { 
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}




 .affix {
      top: 0; left :0;
      width: 100%;
      z-index: 9999 !important;
	  background-color:#120B28;
	  
  }

  .affix + .container{
      padding-top: 70px;
	  background-color:#009688;
	  
  }
  

@font-face {
    font-family: myFirstFont;
    src: url(fonts/samarn.ttf);
}


</style>
	


<!---------------------------------------------------------------end from web-1--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

</head>
<body>
	<!-- -banner -->
	<div class="w3-banner jarallax" >
		<div class="wthree-different-dot">
			<div class="head" id="t" style="background-color:#120B28" >
				<div class="container" data-spy="affix" data-offset-top="197">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo" >
									<h1 style="font-family: myFirstFont;"><a href="index.html">Udgam'18</a></h1>
								</div>

							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
								<li><a href="#top" class="scroll">Home</a></li>
								<li><a href="#about" class="scroll">About</a></li>
								<li><a href="#events" class="scroll">Events</a></li>
								<li><a href="#gallery" class="scroll">Gallery</a></li>
								
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">More</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
										<li><a href="#Coordinators" class="scroll">Coordinators</a></li>
										<li><a href="#sponsors" class="scroll">Sponsors</a></li>
										<li><a href="#artists" class="scroll">Artists</a></li>
										<li><a href="#feedback" class="scroll">Feedback</a></li>
										<li><a href="HIGH VOLTAGE/H_V.php" target="_blank">High Voltage</a></li>
										<li><a href="http://www.udgam.nitsikkim.ac.in/site_page/index.html" target="_blank" >UDGAM'17</a></li>
									</ul>
								</li>   
								
								<li><a href="#contact" class="scroll">Contact Us</a></li>
								
							  </ul>
							</div><!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
			<!-- banner -->
			<div class="banner" id="top">
			<video width="100%" id="myVideo"  autoplay loop >
                <source src="images/w_1_2.mp4" type="video/mp4" />
                <source src="images/w_1_2.ogg" type="video/ogg" />
                Your browser does not support the video tag.
                </video>
				<div class="container">
					<div class="slider">
						
						<script src="js/responsiveslides.min.js"></script>
						<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								// Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
											$('.events').append("<li>before event fired.</li>");
										},
										after: function () {
											$('.events').append("<li>after event fired.</li>");
										}
									 });				
								});
						</script>
						
					</div>
				</div>
			</div>
			<!-- //banner -->
		</div>
	</div>
	<!-- //w3-banner -->
	
	
	
	
	
	
	
	<!----------About Us----------------->
	<div class="banner-bottom" id="about">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">About Us<span>UDGAM is the annual cultural fest of NIT Sikkim</span></h3>
			<div>
			<p><b>National Institute of Technology Sikkim</b> is one of the 31 NITs, established in 2010 and has been declared as ‘An Institute of National Importance’. It is an autonomous institute functioning under the aegis of MHRD, Government of India.
Since its inception, the institute with its top-notch academic programs, high quality research work and extracurricular student activities, is setting new standards of technical education throughout the nation.
</p><br>
<p><b>Udgam </b>is the annual cultural fest and the marquee event of National Institute of Technology Sikkim. The fest aims to induce the hidden expertise towards the surface and to instill confidence in the youth to showcase their talents through various competitions & events organized during the fest spanning over three days.
</p><br>
<p><b>Udgam</b> began its journey in 2014 and we are most privileged to announce its 5th chapter - Udgam’18, which is scheduled to take place on 19th, 20th and 21st of April. Continuing with the tradition of providing an academically and culturally stimulating atmosphere, we hope to build Udgam’18 more magnificent.
</p><br>
			</div>
			
		</div>
	</div>

	<!-- sponsers -->
<div class="services jarallax" id="sponsors">
		<h3 class="heading-agileinfo" data-aos="zoom-in"><b>Sponsors<b><span class="thr">&nbsp </span></h3>
	<div class="container">
		
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-right">
				<div class="grid1">
                    <img src="images/HDFC.jpg" class="img-responsive" alt="">
                    
				</div>
			</div>
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-down">
				<div class="grid1">
					
					<img src="images/nhpc.png" class="img-responsive" alt="">
				</div>
			</div>
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-down">
				<div class="grid1">
					
					<img src="images/sbi.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-left">
				<div class="grid1">
					
					<img src="images/cyber.png" class="img-responsive" alt="">
				</div>
			</div>
		
		
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-right">
				<div class="grid1">
					
					<img src="images/chulyang.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="col-md-3 ser-1" data-aos="fade-up">
				<div class="grid1">
					
					<img src="images/indosaw.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-up">
				<div class="grid1">
					
					<img src="images/mandala.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-left">
				<div class="grid1">
					
					<img src="images/ravanglastar.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-right">
				<div class="grid1">
                    <img src="images/robosapiens.jpg" class="img-responsive" alt="">
                    
				</div>
			</div>
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-down">
				<div class="grid1">
					
					<img src="images/sciencedirect.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-down">
				<div class="grid1">
					
					<img src="images/scifi.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="col-md-3 col-xs-6 ser-1" data-aos="fade-left">
				<div class="grid1">
					
					<img src="images/sikkimexpress.jpg" class="img-responsive" alt="">
				</div>
			</div>
			<div class="clearfix"></div>
		
	</div>
</div>
<!-- //sponsers -->
	
	<!-- Gallery section -->
	<section class="portfolio-agileinfo" id="gallery">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">Gallery<span>Events Is A Professionally Managed Event</span></h3>
				<div class="gallery-grids">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_0172.jpg" class="lightninBox" data-lb-group="1">
								<img src="images/DSC_0172.jpg" class="img-responsive" alt="GALLERY IMAGE" />
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_0197.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_0197.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_6724.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_6724.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_9020.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_9020.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_6933.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_6933.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_8801.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_8801.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_0471.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_0471.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_0608.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_0608.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<!---------------------adding more images-------------------->
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_6584.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_6584.jpg" class="img-responsive" alt="GALLERY IMAGE" />
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_6606.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_6606.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_7149.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_7149.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_8210.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_8210.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						
						
						
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_8242.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_8242.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_8280.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_8280.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_8335.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_8335.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_8423.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_8423.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						
						
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_8419.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_8419.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_8369.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_8369.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_6133.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_6133.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="images/DSC_6601.jpg" class="  lightninBox" data-lb-group="1">
								<img src="images/DSC_6601.jpg" class="img-responsive" alt="GALLERY IMAGE"/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
									
								</div>
							</a>
						</div>
					<!--------------------------------------------------------------------->
						
						
						
						
						
						
						
						<div class="clearfix"> </div>
					</div>
				
			</div>
		</div>
</section>
<!-- /Gallery section -->
	<!-- previous artists -->
	<div class="clients-main jarallax" id="artists">
		<div class="container">
			<!-- Owl-Carousel -->
			<h3 class="heading-agileinfo" data-aos="zoom-in">PREVIOUS ARTISTS<span class="thr">Events Is A Professionally Managed Event </span></h3>
			<div class="cli-ent" data-aos="fade-down">
				<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="item g1">
										<div class="agile-dish-caption">
										<img class="lazyOwl" src="images/1.png" alt="" />
											<h4>Anand Mishra</h4>
											<span>Performer</span>
											
										</div>
										
										<div class="clearfix"></div>
										<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Anand Mishra is a young writer, poet and shayar. He has written a novel 'Destination of my life' which is coming very soon. He creates the surrounding of love and happiness. Now a days, He is very famous in Engineering and Management Colleges. He has performed in IIT (ISM) Dhanbad, BIT Mesra (Deoghar) and so more...</p>
									</div>
								</li>
								<li>
									<div class="item g1">
										<div class="agile-dish-caption">
										<img class="lazyOwl" src="images/3.png" alt="" />
											<h4>Prashant Tamang</h4>
											<span>Singer</span>
											
										</div>
										
										<div class="clearfix"></div>
										<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Prashant Tamang is a famous singer from Darjeeling, West Bengal (India). He sings Nepali as well as Hindi songs. He is the winner of Indian Idol Season 3 in 2007. He got about 10 times more votes in the finals and went on to win the contest.</p>
									</div>
								</li>
								<li>
									<div class="item g1">
										<div class="agile-dish-caption">
										<img class="lazyOwl" src="images/2.png" alt="" />
											<h4>Mingma Dorjee Lepcha</h4>
											<span>Dancer</span>
											
										</div>
										
										<div class="clearfix"></div>
										<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Mingma Dorjee Lepcha is an amazing classical dancer and one of the contestant of the dance reality show Dance Plus season 2. He hails from Kagyup village in Namchi, South Sikkim and his family includes his mother and a younger brother. When he dances on the floor, it's like a magic. So smooth, so flawless with his overloaded cuteness.</p>
									</div>
								</li>
							</ul>
						</div>
				</section>
			</div>
			<!--// Owl-Carousel -->
		</div>
	</div>

	
	
	
	<!-- event schedule -->
                <div class="event-time " id="events">
                    <div class="container">
						<h3 class="heading-agileinfo" data-aos="zoom-in">Events</h3>
                        <div class="testi-info">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#testi" aria-controls="testi" role="tab" data-toggle="tab">DAY 1</a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">DAY 2</a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">DAY 3</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="testi">
                                    <div class="eventmain-info">
                                        <div class="event-subinfo">
                                            <div class="col-md-6  w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right eventtxt-right" data-aos="fade-down">
                                                   <img src="images/quiz.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-right">
                                                    <h5>QUIZ</h5>

                                                    <p>Let your intellect shine.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> H2</h6>
                                                    <a href="#" data-toggle="modal" data-target="#quiz">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                    <img src="images/tug of war.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>TUG OF WAR</h5>

                                                    <p>Wanna show your physical strength?Then this is for you.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> NIT cricket ground</h6>
                                                    <a href="#" data-toggle="modal" data-target="#tugofwar">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
										<div class="clearfix"> </div>
                                        <div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right" data-aos="fade-down">
                                                   <img src="images/debate.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-left">
                                                    <h5>DEBATE</h5>

                                                   <p>Don’t raise your voice , improve your argument. 
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> H1</h6>
                                                    <a href="#" data-toggle="modal" data-target="#debate">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                  <img src="images/art competition.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>ART COMPETITION</h5>

                                                    <p>Paint your imagination with style. 
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> H4</h6>
                                                    <a href="#" data-toggle="modal" data-target="#art">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
										<div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right" data-aos="fade-down">
                                                   <img src="images/cricket.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-left">
                                                    <h5>SUPER OVER</h5>

                                                   <p>One Over, one chance. How many sixes can you hit? 
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Nit Sikkim cricket ground</h6>
                                                    <a href="#" data-toggle="modal" data-target="#super">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                  <img src="images/drama.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>DRAMA</h5>

                                                    <p>Bring out the actors,directors and managers within you 
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> MPH</h6>
                                                    <a href="#" data-toggle="modal" data-target="#drama">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
										<div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right" data-aos="fade-down">
                                                   <img src="images/click on udgam.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-left">
                                                    <h5>CLICK ON UDGAM</h5>

                                                   <p>CLick your best pic during UDGAM'18 
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Nit Sikkim campus</h6>
                                                    <a href="#" data-toggle="modal" data-target="#click">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                  <img src="images/facepainting.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>FACE PAINTING</h5>

                                                    <p>Get some new shades up your face.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Badminton Court</h6>
                                                    <a href="#" data-toggle="modal" data-target="#face">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
										
										
										
										
										
										
										
                                    </div>
								    
									
									
									
									
									
                                </div>
								
								
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="eventmain-info">
                                        <div class="event-subinfo">
                                            <div class="col-md-6  w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right eventtxt-right" data-aos="fade-down">
                                                   <img src="images/wall painting.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-right">
                                                    <h5>WALL PAINTING</h5>

                                                    <p>Art is anything you can get away with.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> NIT Campus</h6>
                                                    <a href="#" data-toggle="modal" data-target="#wall">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                    <img src="images/antakshari.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>ANTAKSHARI</h5>

                                                    <p>&nbsp
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> H4</h6>
                                                    <a href="#" data-toggle="modal" data-target="#antakshari">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
										<div class="clearfix"> </div>
                                        <div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right" data-aos="fade-down">
                                                   <img src="images/mimicry.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-left">
                                                    <h5>MIMICRY</h5>

                                                   <p>Good at mimicry ? Come prove it. 
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> H1</h6>
                                                    <a href="#" data-toggle="modal" data-target="#mimicry">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                  <img src="images/jam.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>J.A.M</h5>

                                                    <p>It's all about a minute.Do you think you are quick enough? 
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> H2</h6>
                                                    <a href="#" data-toggle="modal" data-target="#jam">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
										<div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right" data-aos="fade-down">
                                                   <img src="images/treasurehunt.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-left">
                                                    <h5>TREASURE HUNT</h5>

                                                   <p>Khoojo Khoojo Re Saathi.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Badminton court</h6>
                                                    <a href="#" data-toggle="modal" data-target="#treasure">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                  <img src="images/camera ne bna di jodi.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>CAMERA NE BNA DI JODI</h5>

                                                    <p>CRAFT THE PERFECT
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> MPH</h6>
                                                    <a href="#" data-toggle="modal" data-target="#camera">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
										<div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right" data-aos="fade-down">
                                                   <img src="images/arm wrestling.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-left">
                                                    <h5>ARM WRESTLING</h5>

                                                   <p>Battle of Arms.Come show your strength.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Academic Block</h6>
                                                    <a href="#" data-toggle="modal" data-target="#arm">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                  <img src="images/fake.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>FAKE ADVERTISEMENT</h5>

                                                    <p>Let your creativity,management and marketing skill find a platform.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>H2</h6>
                                                    <a href="#" data-toggle="modal" data-target="#fakead">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
										
										
										
										
										
										
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="eventmain-info">
                                        <div class="event-subinfo">
                                            <div class="col-md-6  w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right eventtxt-right" data-aos="fade-down">
                                                   <img src="images/virtual interview.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-right">
                                                    <h5>VIRTUAL PLACEMENT</h5>

                                                    <p>Mystery creates wonder and wonder is the basis of man's desire to understand.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> H4</h6>
                                                    <a href="#" data-toggle="modal" data-target="#virtual">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                    <img src="images/twist a tale.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>TWIST A TALE</h5>

                                                    <p>Ever felt that some stories could have different beginnings or endings?
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> H2</h6>
                                                    <a href="#" data-toggle="modal" data-target="#twist">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
										<div class="clearfix"> </div>
                                        <div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right" data-aos="fade-down">
                                                   <img src="images/article.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-left">
                                                    <h5>ARTICLE WRITING</h5>

                                                   <p>Do you have your literary works that needs to be exposed to the readers? 
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> H1</h6>
                                                    <a href="#" data-toggle="modal" data-target="#article">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
											<div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                  <img src="images/drama.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>DRAMA(Finale)</h5>

                                                    <p>Bring out the actors,directors and managers within you 
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> OPEN STAGE</h6>
                                                    <a href="#" data-toggle="modal" data-target="#drama">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            
                                            <div class="clearfix"> </div>
                                        </div>
										<div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right" data-aos="fade-down">
                                                   <img src="images/tambola.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-left">
                                                    <h5>TAMBOLA</h5>

                                                   <p>Try your luck and let the numbers decide your fate.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Academics</h6>
                                                    <a href="#" data-toggle="modal" data-target="#tambola">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right" data-aos="fade-up">
                                                  <img src="images/tigerfive.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left in-news" data-aos="fade-right">
                                                     <h5>TIGER FIVE</h5>

                                                    <p>Talk With Your Feet, Play With Your Heart.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span> Small Play Ground</h6>
                                                    <a href="#" data-toggle="modal" data-target="#tigerfive">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
										<div class="event-subinfo">
                                            <div class="col-md-6 w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right  eventtxt-right" data-aos="fade-down">
                                                   <img src="images/search.png" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-left">
                                                    <h5>THE SEARCH</h5>

                                                   <p>If you can get what is asked for.you will get most out of it.
                                                       </p>
                                                    <h6>
                                                        <span class="icon-event" aria-hidden="true">venue:</span>Nit Sikkim campus</h6>
                                                    <a href="#" data-toggle="modal" data-target="#search">view details</a><a href="#book" class="scroll">Register Now</a>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            
                                            <div class="clearfix"> </div>
                                        </div>
										
										
										
										
										
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     
    <!-- //event schedule -->
	
	
	
	
	
<!-- register events -->
	<div class="register-sec-w3l jarallax" id="book">
		<div class="container">
		<h3 class="heading-agileinfo" data-aos="zoom-in">Register An Event<span class="thr">Events Is A Professionally Managed Event</span></h3>
			<div class="book-appointment" data-aos="zoom-in">
				<form action="#" method="post">
					<div class="gaps">
						<p></p>
						<input type="text" name="Name" placeholder="Name" required="" />
					</div>
					<div class="gaps">
						<p></p>
						<input type="email" name="email" placeholder="Email" required="" />
					</div>
					<div class="gaps">
						<p></p>
						<input type="text" name="Number" placeholder="Phone Number" required="" />
					</div>
					<div class="gaps">
						<textarea name="Message" placeholder="Event name..." required=""></textarea>
					</div>
					<input type="submit" name="event" value="Register Now">
				</form>
				<?php
					if(isset($_POST['event']))
					{
						
						$name=mysqli_real_escape_string($con,$_POST['Name']);
                        $email=mysqli_real_escape_string($con,$_POST['email']);
                        $message=mysqli_real_escape_string($con,$_POST['Message']);
                        $number=mysqli_real_escape_string($con,$_POST['Number']);
						
						if($sql="INSERT INTO `event`(`Name`, `Email`, `Phone`, `Ename`) VALUES ('$name','$email','$number','$message')")
						{
							mysqli_query($con,$sql) or die("Something went wrong -> ".mysqli_error($con));
							

							echo ('<br><h4 class="agileinfo-tittle" Style="color:green;text-align:center;">THANKS FOR REGISTRATION.</h4>');
							echo ('<script>window.alert("THANKS FOR REGISTRATION.")</script>');
						}
						else
						echo ('<br><div class="contact-fields-w3ls">
							<p style="text-align:center;">Something went wrong . Try later.</p>
						           </div>');
						
					}
					
					
					
					
					
					?>
			</div>
			
		</div>
	</div>
	<!-- //register events -->



	 <!-- Team/coordinators -->
	<div class="team" id="Coordinators">
		<div class="container">
		    <h3 class="heading-agileinfo" data-aos="zoom-in">Coordinators<span class="thr">&nbsp</span></h3>
			<!--h3 class="agileinfo-tittle">Coordinators</h3-->
			<div class="team-row">
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/faculty.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>FACULTY</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal0">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/core.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>CORE&nbspTEAM</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal2">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/web.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>WEBSITE</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal1">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/technical.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>TECHNICAL</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal3">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="team-row">
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/event.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>EVENT&nbspMGMT</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal4">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/cultural.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>CULTURAL</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal5">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/hosp.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>HOSPITALITY</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal6">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/sponsorship.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>SPONSERSHIP</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal7">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="team-row">
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/create.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>CREATIVITY</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal8">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/content.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>CONTENT</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal9">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/shop.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>PROCUREMENT</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal10">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/wind.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>WIND&nbspUP</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal11">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="team-row">
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/app.png" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>APP&nbspDEVT.</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal12">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/account.png" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>ACCOUNTS</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal13">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/merchandise.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>MERCHANDISE</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal14">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/publicity.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>PUBLICITY</h4>
							
							<div class="social-icons-agileits-w3layouts">
							<div class="w3layouts_more">
								<a href="#" data-toggle="modal" data-target="#myModal15">Explore</a>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Team -->
	
	
	
	
	
	
	
	<!-- modal-coordinators -->
	
	
	<!-- modal 0-->
	<div class="modal about-modal fade" id="myModal0" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">FACULTY</h4>
					</div> 
	<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/pranab.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Dr. Pranab Kundu</h4>
							<p>coordinator<br>
							pranab@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
				
			</div>
			
					
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 0-->
		
		<!-- modal 1-->
	<div class="modal about-modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">WEBSITE COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/deepak.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>DEEPAK PRASAD</h4>
							<p>coordinator<br>
							+91-8972113084<br>
							B160026@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/supriyo.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Supriyo Banarjee</h4>
							<p>coordinator<br>
							7501118915<br>
							b160012@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
		
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 1-->
	
	
	<!-- modal 2-->
	<div class="modal about-modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">CORE TEAM</h4>
					</div> 
					<div class="modal-body">
					<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/sourav.jpg" class="img-responsive" alt="" />
                        <div class="wthree-team-caption">
							<h4>Sourav singh Rathore</h4>
							<p>President<br>
							9635044901<br>
							b140041@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/gaurav.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Gaurav Kumar</h4>
							<p>Vice-President<br>
							9472968512<br>
							b150139cs@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/abisek.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Abisek Dahal</h4>
							<p>Secretary<br>
							9749350655<br>
							b160022@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/meeraj.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Meraj Ahmad</h4>
							<p>Joint Secretary <br>
							9732040925<br>
							b160028@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
								<div class="clearfix"> </div>

			</div>
			
					
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 2-->
	
	
	<!-- modal 3-->
	<div class="modal about-modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">TECHNICAL COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/bimal.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Bimal Gautam</h4>
							<p>coordinator<br>
							8348145270<br>
							b160037@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/DSCN4567.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Mayank Josi</h4>
							<p>coordinator<br>
							8436445325<br>
							b160024@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
								<div class="clearfix"> </div>

			</div>
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images-1/t1.jpg" class="img-responsive" alt="" />
                        <div class="wthree-team-caption">
							<h4>Prateek Sharma</h4>
							<p>coordinator<br>
							9002171908<br>
							b160118@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
						
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 3-->
	
	<!-- modal 4-->
	<div class="modal about-modal fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">EVENT MANAGEMENT COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/diksha.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Diksha Soni</h4>
							<p>coordinator<br>
							7872663667<br>
							b160132@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/divyanshi.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Divyanshi Verma</h4>
							<p>coordinator<br>
							7478293335<br>
							b160062@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
			</div>
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/Mithun.jpg" class="img-responsive" alt="" />
                        <div class="wthree-team-caption">
							<h4>Mithun Singh</h4>
							<p>coordinator<br>
							7718291219<br>
							b160049@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/rishab.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Rishabh Mishra</h4>
							<p>coordinator<br>
							7076263915<br>
							b160052@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>			
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 4-->
	
	<!-- modal 5-->
	<div class="modal about-modal fade" id="myModal5" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">CULTURAL COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/aksheeta.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Aksheeta</h4>
							<p>coordinator<br>
							7478165915<br>
							b160032@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/hema2.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Hema</h4>
							<p>coordinator<br>
							8436130137<br>
							b160070@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
			</div>
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/prena.jpg" class="img-responsive" alt="" />
                        <div class="wthree-team-caption">
							<h4>Prerna Tamang</h4>
							<p>coordinator<br>
							7872253789<br>
							b160084@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>			
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 5-->
	
	
	<!-- modal 6-->
	<div class="modal about-modal fade" id="myModal6" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">HOSPITALITY COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images-1/t1.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Nim Lhamu Tmang</h4>
							<p>coordinator<br>
							7363821098<br>
							b160010@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images-1/t2.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Manish Kumar</h4>
							<p>coordinator<br>
							8371034023<br>
							b160010@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
			</div>
				<div class="clearfix"> </div>
			</div>			
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 6-->
	
	<!-- modal 7-->
	<div class="modal about-modal fade" id="myModal7" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">SPONSERSHIP COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/prince.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Prince Raj</h4>
							<p>coordinator<br>
							7478165929<br>
							b160088@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/suraj.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Suraj Kumar Giri</h4>
							<p>coordinator<br>
							9547840263<br>
							b160008@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
			</div>
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/priyanka.jpg" class="img-responsive" alt="" />
                        <div class="wthree-team-caption">
							<h4>Priyanka</h4>
							<p>coordinator<br>
							7076014856<br>
							b160083@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images-1/t2.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Dezong Lepcha</h4>
							<p>coordinator<br>
							9547644367<br>
							b160099@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/Diwakar.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Diwakar Sharma</h4>
							<p>coordinator<br>
							9958127530<br>
							b160113@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
				
				<div class="clearfix"> </div>
			</div>			
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 7-->
	
	<!-- modal 8-->
	<div class="modal about-modal fade" id="myModal8" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">CREATIVITY COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/soni.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Soni Reshmi</h4>
							<p>coordinator<br>
							8373065298<br>
							b160069@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/pritam.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Pritam</h4>
							<p>coordinator<br>
							8436486557<br>
							b160061@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
			</div>
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/sandeep.jpg" class="img-responsive" alt="" />
                        <div class="wthree-team-caption">
							<h4>Sandeep</h4>
							<p>coordinator<br>
							8906713946<br>
							b160031@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images-1/t2.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Jahir</h4>
							<p>coordinator<br>
							8967734880<br>
							b160055@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
				
				<div class="clearfix"> </div>
			</div>			
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 8-->
	
	<!-- modal 9-->
	<div class="modal about-modal fade" id="myModal9" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">CONTENT COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/anjum2.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Anjum</h4>
							<p>coordinator<br>
							8016142226<br>
							b160085@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/govardhan.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Goverdhan</h4>
							<p>coordinator<br>
							8936832422<br>
							b160075@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
								<div class="clearfix"> </div>

				
			</div>
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images-1/t1.jpg" class="img-responsive" alt="" />
                        <div class="wthree-team-caption">
							<h4>Prateek</h4>
							<p>coordinator<br>
							9593389950<br>
							b160011@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
					
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 9-->
	
	<!-- modal 10-->
	<div class="modal about-modal fade" id="myModal10" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">PROCUREMENT COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/aditi.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Aditi Anupam</h4>
							<p>coordinator<br>
							7076252336<br>
							b160040@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/bittu.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Bittu Jaiswal</h4>
							<p>coordinator<br>
							7076455854<br>
							b160029@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
								<div class="clearfix"> </div>

			</div>
			
			
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 10-->
	
	<!-- modal 11-->
	<div class="modal about-modal fade" id="myModal11" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">WIND UP COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/snehal.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Snehal M Panchal</h4>
							<p>coordinator<br>
							8967048167<br>
							b160050@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/kaushik.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Koshik Singh</h4>
							<p>coordinator<br>
							7501824564<br>
							b160004@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
								<div class="clearfix"> </div>

				
			</div>
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/prasun.jpg" class="img-responsive" alt="" />
                        <div class="wthree-team-caption">
							<h4>Prasun Kumar</h4>
							<p>coordinator<br>
							7274926212<br>
							b160130@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images-1/t2.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Vivek Kumar</h4>
							<p>coordinator<br>
							7431941029<br>
							b160122@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 11-->
		
	
	<!-- modal 12-->
	<div class="modal about-modal fade" id="myModal12" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">APP DEVELOPMENT COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/anshu.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Anshu Priya Jain</h4>
							<p>coordinator<br>
							8768902827<br>
							b160092@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/ravi.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Ravi Mishra</h4>
							<p>coordinator<br>
							8436445160<br>
							b160025@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
								<div class="clearfix"> </div>

				
			</div>
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/prashant.jpg" class="img-responsive" alt="" />
                        <div class="wthree-team-caption">
							<h4>Prashant</h4>
							<p>coordinator<br>
							7718391250<br>
							b160131@nitsikkim.ac.com</p>
							
						</div>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 12-->
	
	
	<!-- modal 13-->
	<div class="modal about-modal fade" id="myModal13" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">ACCOUNTS COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images-1/t1.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>K.Sai Lakshman</h4>
							<p>coordinator<br>
							7794059444<br>
							b160019@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images-1/t2.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Rinzing Bhutia</h4>
							<p>coordinator<br>
							9775920505<br>
							b160005@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
								<div class="clearfix"> </div>

				
			</div>
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 13-->
	
	<!-- modal 14-->
	<div class="modal about-modal fade" id="myModal14" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">MERCHANDISE COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/sanyam.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Sanyam Chauhan</h4>
							<p>coordinator<br>
							8972117473<br>
							b160051@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images/narbada.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Narbada</h4>
							<p>coordinator<br>
							8906257109<br>
							b160114@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
				
			</div>
			
			
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 14-->
	
	
	<!-- modal 15-->
	<div class="modal about-modal fade" id="myModal15" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document" style="width:60%;">
			<div class="modal-content">			
			<div class="team">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></button>
				<div class="modal-header"> 
										
						<h4 class="modal-title">PUBLICITY COORDINATORS</h4>
					</div> 
					<div class="modal-body">
        
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images/aman .jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Aman Yadav</h4>
							<p>coordinator<br>
							7431944193<br>
							b160136@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-down">
					<div class="thumbnail team-inner">
						<img src="images-1/t2.jpg" class="img-responsive" alt="" />
						<div class="wthree-team-caption">
							<h4>Mohit Dutt Mathur</h4>
							<p>coordinator<br>
							9474474270<br>
							b160003@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
								<div class="clearfix"> </div>

				
			</div>
			<div class="team-row">
				<div class="col-md-6 col-sm-12 col-xs-12 team-grids" data-aos="fade-up">
					<div class="thumbnail team-inner">
						<img src="images-1/t1.jpg" class="img-responsive" alt="" />
                        <div class="wthree-team-caption">
							<h4>Pranesh</h4>
							<p>coordinator<br>
							9593110144<br>
							b160103@nitsikkim.ac.in</p>
							
						</div>
					</div>
				</div>
				
				
				<div class="clearfix"> </div>
			</div>
			
	</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal 15-->
		
	
	<!-- //modal-coordinators -->
	
	
	
	
	
	
	

<!-- map -->
	
	
	<div style="width: 100%">
	<iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=400&hl=en&q=National%20Institute%20Of%20Technology%20Sikkim%2C%20Ravangla%2C%20Sikkim+(Your%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
	</iframe>
	</div>
	
<!-- //map -->
	<!-- footer -->
	
			
			
			
			
			
			
			<div class="footer">
			<div class="container">
			<div class="clearfix"> </div>
			
			
			<div class="contact-section" id="contact">
		
		<div class="clearfix"> </div>
			<h3 class="agileinfo-tittle" Style="color:white;">Contact Us</h3>
			<div class="col-md-4 address-left" data-aos="flip-right">
				<div class="address-grid">
					<h4>Contact <span>Info</span></h4>
					<div class="address-grids">
						<span class="fa fa-volume-control-phone" aria-hidden="true"></span>
						<div class="contact-right">
							<p>Telephone </p><span>+91-9749350655</span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-grids">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
						<div class="contact-right">
							<p>Mail </p><a href="mailto:info@example.com">udgam@nitsikkim.ac.in</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-grids">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
						<div class="contact-right">
							<p>Location</p><span>Ravangla , Burfung Block , South Sikkim.</span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="social-icons-agileits-w3layouts">
						<ul>
							<li><a href="https://www.facebook.com/udgam.nitsikkim/"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
							<li><a href="https://www.youtube.com/channel/UCTVBLqRVOcA976zyVfcqYKQ?view_as=subscriber"><span class="fa fa-youtube" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-8 address-right-w3-img" data-aos="flip-left">

			</div>
			<div class="clearfix"> </div>
			<div class="mail_grid_w3l" id="feedback">
			<h3 class="agileinfo-tittle" Style="color:white;">Feedback</h3>
				<form action="" method="post">
					<div class="col-md-6 contact_left_grid" data-aos="fade-right" >
						<div class="contact-fields-w3ls">
							<input type="text" name="Name" placeholder="Name" required="" style="color:green;">
						</div>
						<div class="contact-fields-w3ls">
							<input type="email" name="Email" placeholder="Email" required="" style="color:green;">
						</div>
						<div class="contact-fields-w3ls">
							<input type="text" name="Telephone" placeholder="Telephone" required="" style="color:green;">
						</div>
						<div class="contact-fields-w3ls">
							<input type="text" name="Subject" placeholder="Subject" required="" style="color:green;">
						</div>
					</div>
					<div class="col-md-6 contact_left_grid" data-aos="fade-left">
						<div class="contact-fields-w3ls">
							<textarea name="Message" placeholder="Message..." required="" style="color:green;"></textarea>
						</div>
						<input type="submit" value="Submit" name="feed">
					</div>
					
					<div class="clearfix"> </div>
                  <?php
					if(isset($_POST['feed']))
					{
						
						$name=mysqli_real_escape_string($con,$_POST['Name']);
                        $email=mysqli_real_escape_string($con,$_POST['Email']);
                        $message=mysqli_real_escape_string($con,$_POST['Message']);
                        $subject=mysqli_real_escape_string($con,$_POST['Subject']);
                        $number=mysqli_real_escape_string($con,$_POST['Telephone']);
						
						if($sql="INSERT INTO `feedback`(`Name`, `Email`, `Number`, `Subject`, `Message`) VALUES ('$name','$email','$number','$subject','$message')")
						{
							mysqli_query($con,$sql) or die("Something went wrong -> ".mysqli_error($con));
							

							echo ('<br><h4 class="agileinfo-tittle" Style="color:green;text-align:center;">THANKS FOR YOUR FEEDBACK.</h4>');
							echo ('<script>window.alert("thanks for the feedback!!")</script>');
						}
						else
						echo ('<br><div class="contact-fields-w3ls">
							<p style="text-align:center;">Something went wrong . Try later.</p>
						           </div>');
						
					}
					
					
					
					
					
					?>
				</form>
			</div>
		</div>
	</div>
			
			
			
			
			
			
			
			
		
			
			
			
			
			
			
			
	
			
			
			
			
			
			
	</div>
	<!-- //footer -->

<!-- js for portfolio lightbox -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio lightbox -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
<!-- //flexSlider -->

<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>

	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script><!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
<!-- animation effects-js files-->
	<script src="js/aos.js"></script><!-- //animation effects-js-->
	<script src="js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->
<?php include 'event.php'; ?>
</body>	
</html>