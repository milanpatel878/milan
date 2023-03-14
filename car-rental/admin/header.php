<?php
$mainurl="http://localhost/php6pmTTS/car-rental/admin/";
$baseurl="http://localhost/php6pmTTS/car-rental/admin/assets/";
?>
<!DOCTYPE html>
<html>
<head>
<title>Car Rental</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Car Rental Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo $baseurl ?>css/jquery.flipster.css">
<link href="<?php echo $baseurl ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $baseurl ?>css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link rel='stylesheet' href='<?php echo $baseurl ?>css/dscountdown.css' type='text/css' media='all' />
<link href="<?php echo $baseurl ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $baseurl ?>css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>
<body>

<!-- banner -->
<div class="banner-w3ls" id="home">
<!-- header -->
<div class="header-w3l-agile">
		<div class="header_left">
			<ul>
				<li><a href="car_rental@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>car_rental@gmail.com</a></li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+91 8980110081</li>
			</ul>
		</div>
		

		<!--dashboard-->
		<div class="header_left">
            <span class="dropdown">

              <button class="btn btn-warning ms-5 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                Welcome To : <?php echo $_SESSION["email"];?>
              </button>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                <li><a class="dropdown-item text-black" href="<?php echo $mainurl;?>change-password">Chgange Password <i class="bi bi-lock"></i></a></li>
                <li><a class="dropdown-item text-black" href="<?php echo $mainurl;?>?admin-logout" onclick="return confirm('Are you sure to Logout as admin ?')">Logout <i class="bi bi-power"></i></a></li>          
              </ul>
            </span>
			</div>


		<div class="clearfix"></div>
</div>
<br>

<br>
<!-- //header -->
	<div class="container">
		<div class="header-nav">
			
			<nav class="navbar navbar-default">
					<div class="navbar-header">
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					
						<h1><a  href="<?php echo $mainurl;?>"><span class="logo-c">C</span><i class="fa fa-car" aria-hidden="true"></i>Rental</a><p class="sub-cap">Drive to Any where
					</div>
					<br>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<center><h1><b><u>WELCOME TO ADMIN PANEL</u></b></h1><center>
					<ul class="nav navbar-nav navbar-left ">
							<li><a class="hvr-underline-from-center " href="<?php echo $mainurl;?>manageaboutus">Manage AboutUs</a></li>
							<li><a class="hvr-underline-from-center " href="<?php echo $mainurl;?>managedeal">Manage Deals</a></li>
							<li><a class="hvr-underline-from-center " href="<?php echo $mainurl;?>manageteam">Manage Team</a></li>
							<li><a class="hvr-underline-from-center " href="<?php echo $mainurl;?>manageslider">Manage Slider</a></li>
							<li><a class="hvr-underline-from-center " href="<?php echo $mainurl;?>managegallary">Manage LatestCars</a></li>
							<li><a class="hvr-underline-from-center " href="<?php echo $mainurl;?>managecontactus">Manage ContactUs</a></li>
							<li><a class="hvr-underline-from-center " href="<?php echo $mainurl;?>managefooter">Manage Footer</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>	
				</nav>
				
		</div>		
</div>
<br>
</div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

<!-- js -->
<script type="text/javascript" src="<?php echo $baseurl ?>js/jquery-2.1.4.min.js"></script>
<!--scripts--> 
<!-- Counter required files -->
		<script type="text/javascript" src="<?php echo $baseurl ?>js/dscountdown.min.js"></script>
		<script src="<?php echo $baseurl ?>js/demo-1.js"></script>
		<script>
			jQuery(document).ready(function($){						
				$('.demo2').dsCountDown({
					endDate: new Date("December 24, 2020 23:59:00"),
					theme: 'black'
					});								
			});
		</script>
	<!-- //Counter required files -->

	<!--//scripts--> 
<script type="text/javascript" src="<?php echo $baseurl ?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $baseurl ?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--banner Slider starts Here-->
						<script src="<?php echo $baseurl ?>js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
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
							<script src="<?php echo $baseurl ?>js/modernizr.custom.js"></script>
		
							
	<script src="<?php echo $baseurl ?>js/jquery.flipster.js"></script>
<script>

	$(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });


</script>	
<!--banner Slider starts Here-->
							 <!-- required-js-files-->
							<link href="<?php echo $baseurl ?>css/owl.carousel.css" rel="stylesheet">
							    <script src="<?php echo $baseurl ?>js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :5,
									itemsDesktop : [768,4],
									itemsDesktopSmall : [414,3],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination :false,
									
							      });
								  
							    });
							    </script>
								 <!--//required-js-files-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="<?php echo $baseurl ?>js/bootstrap.js"></script>
</body>
</html>