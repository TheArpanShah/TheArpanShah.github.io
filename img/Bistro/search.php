<!DOCTYPE html>
<html lang="en">
<head>
<title>Search Results</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">


<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/camera.js"></script>
<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>

<script type="text/javascript" src="search/search.js"></script>
<script>
$(document).ready(function() {
	/////// icons
	$(".social li").find("a").css({opacity:0.6});
	$(".social li a").hover(function() {
		$(this).stop().animate({opacity:1 }, 400, 'easeOutExpo');		    
	},function(){
	    $(this).stop().animate({opacity:0.6 }, 400, 'easeOutExpo' );		   
	}); 

	// camera
	$('#camera_wrap').camera({
		//thumbnails: true
		autoAdvance			: true,		
		mobileAutoAdvance	: true,
		height: '43%',
		hover: false,
		loader: 'none',
		navigation: true,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		pagination			: false,
		time: 7000,
		transPeriod: 1000,
		minHeight: '200px'
	});

}); //
$(window).load(function() {
	//

}); //
</script>		
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
	<![endif]-->    

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>      
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body class="subpage location">
<div id="main">

<header>
<div class="container">
<div class="row">
<div class="span12">
<div class="top1">
	<div class="logo_wrapper"><a href="index.html" class="logo"><img src="images/logo.png" alt=""></a></div>
</div>	
<div class="top2">
	<div class="txt1">8901 Marmora Road, Glasgow, D04 89GR.</div>
	<div class="txt2">+39 1234 567 890</div>
	<div class="txt3"><a href="index-5.html" class="button0"><span class="l"></span><span class="px">Online Reservation</span><span class="r"></span></a><a href="index-6.html" class="button0"><span class="l"></span><span class="px">location</span><span class="r"></span></a></div>
</div>
</div>	
</div>	
</div>	
</header>

<div id="slider_wrapper">
<div class="hl1"></div>	
<div id="slider">
<div class="container">
<div class="row">
<div class="span12">
<div class="slider_inner">
<div class="corner_left"></div>	
<div class="corner_right"></div>
<div class="slider_inner2">
<div id="camera_wrap">
	<div data-src="images/slide01.jpg">
		<div class="camera_caption fadeIn">
			<div class="txt1">India's Restaurant. Vegetarian, Non-Vegetarian & Tandoori Specialties.</div>						
		</div>     
	</div>
	<div data-src="images/slide02.jpg">
		<div class="camera_caption fadeIn">
			<div class="txt1">India's Restaurant. Vegetarian, Non-Vegetarian & Tandoori Specialties.</div>						
		</div>     
	</div>
	<div data-src="images/slide03.jpg">
		<div class="camera_caption fadeIn">
			<div class="txt1">India's Restaurant. Vegetarian, Non-Vegetarian & Tandoori Specialties.</div>						
		</div>     
	</div>	
</div>	
</div>	
</div>
</div>	
</div>	
</div>	
</div>
</div>

<div id="inner">
<div class="container">
<div class="row">
<div class="span12">
<div class="navbar navbar_">
	<div class="navbar-inner navbar-inner_">
		<a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="nav-collapse nav-collapse_ collapse">
			<ul class="nav sf-menu clearfix">
				<li><a href="index.html">Home</a></li>				
				<li><a href="index-1.html">About</a></li>	
				<li><a href="index-2.html">Menu</a></li>	
				<li><a href="index-3.html">Catering</a></li>				
				<li class="sub-menu sub-menu-1"><a href="index-4.html">Photo Gallery<em></em></a>
					<ul>
						<li><a href="index-4.html">INTERIOR</a></li>
						<li class="sub-menu sub-menu-2"><a href="index-4.html">EVENTS<em></em></a>
							<ul>
								<li><a href="index-4.html">lorem ipsum dolor</a></li>
								<li><a href="index-4.html">sit amet</a></li>
								<li><a href="index-4.html">adipiscing elit</a></li>
								<li><a href="index-4.html">nunc suscipit</a></li>
								<li><a href="404.html">404 page not found</a></li>
							</ul>
						</li>
						<li class="sub-menu sub-menu-2"><a href="index-4.html">FOOD<em></em></a>
							<ul>
								<li><a href="index-4.html">lorem ipsum dolor</a></li>
								<li><a href="index-4.html">sit amet</a></li>
								<li><a href="index-4.html">adipiscing elit</a></li>
								<li><a href="index-4.html">nunc suscipit</a></li>									
							</ul>
						</li>											
					</ul>						
				</li>																
				<li><a href="index-5.html">Reservation</a></li>											
			</ul>
		</div>
	</div>
</div>
</div>	
</div>	
</div>	
</div>

<div id="content">
<div id="content2">
<div class="container">
<div class="row">
<div class="span12">
	
	<h1>Search result:</h1>

	<div class="hl2"><span class="l"></span><span class="px"></span><span class="r"></span></div>
	
	<div class="row">
	<div class="span12 pad_bot1">
		<div class="pad1">
			<div id="search-results"></div>
		</div>
	</div>
</div>

	

	<div class="hl3"><span class="l"></span><span class="px"></span><span class="r"></span></div>

</div>	
</div>	
</div>		
</div>
</div>

<footer>
<div class="bot1">
<div class="container">
<div class="row">
<div class="span12 clearfix">
<div class="block1">
<div class="menu_bot">
    <ul id="menu_bot" class="clearfix">
      <li><a href="index.html">Home</a></li>
      <li><a href="index-1.html">About</a></li>
      <li><a href="index-2.html">Menu</a></li>
      <li><a href="index-3.html">Catering</a></li>
      <li><a href="index-4.html">Photo Gallery</a></li>
      <li><a href="index-5.html">Reservation</a></li>          
    </ul>
</div>
</div>
<div class="block2 clearfix">
<div class="search-form-wrapper clearfix">
	<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
		<input type="text" name="s" value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''">
		<a href="#" onClick="document.getElementById('search-form').submit()"></a>
	</form>
</div>	
</div>
</div>	
</div>	
</div>
</div>	
<div class="bot2">
<div class="container">
<div class="row">
<div class="span12">
	<div class="block1">
		<div class="copyright">Copyright © 2013. All rights reserved.</div>
	</div>
	<div class="block2 clearfix">
		<div class="txt1">Follow us:</div>
		<div class="social_wrapper">
			<ul class="social clearfix">
			    <li><a href="#"><img src="images/social_ic1.jpg"></a></li>
			    <li><a href="#"><img src="images/social_ic2.jpg"></a></li>
			    <li><a href="#"><img src="images/social_ic3.jpg"></a></li>			    
			</ul>
		</div>
	</div>
</div>	
</div>	
</div>
</div>
</footer>






	
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>