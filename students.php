<?php
session_start();

if(isset($_SESSION['email'])) {
  
if($_SESSION['type'] == "admin") { 
    
    header("location:espace_admin/index.php"); 

}

}
include 'connexion.php';

?>
<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>STUDENTS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script><script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
<?php


                include 'includes/header.php';
?>



<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Student</h3>
  		<p class="description">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php"php>Home</a></li>
                <li class="current-page">Student</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<!---728x90--->

	<div class="admission">
	   <div class="container">
	   	 <div class="faculty_top">
	   	  <div class="col-md-4">
	   	  	<figure class="team_member">
	   	  		<img src="images/fc.jpg" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="course_detail.php">Lorem Ipsum</a></h3>
	   	  			<p class="person-deg1"><a href="mailto%40example.php">info(at)Learn.com</a></p>
	   	  			<span class="person-deg1">1207</span>
	   	  			<div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="col-md-4">
	   	  	<figure class="team_member">
	   	  		<img src="images/fc1.jpg" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="course_detail.php">Lorem Ipsum</a></h3>
	   	  			<p class="person-deg1"><a href="mailto%40example.php">info(at)Learn.com</a></p>
	   	  			<span class="person-deg1">1207</span>
	   	  			<div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="col-md-4">
	   	  	<figure class="team_member">
	   	  		<img src="images/fc2.jpg" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="course_detail.php">Lorem Ipsum</a></h3>
	   	  			<p class="person-deg1"><a href="mailto%40example.php">info(at)Learn.com</a></p>
	   	  			<span class="person-deg1">1207</span>
	   	  		    <div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
	   	  			    </ul>
	   	  		    </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="clearfix"> </div>
	   	 </div>
		 <!---728x90--->

	   	 <div class="faculty_top">
	   	  <div class="col-md-4">
	   	  	<figure class="team_member">
	   	  		<img src="images/fc3.jpg" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="course_detail.php">Lorem Ipsum</a></h3>
	   	  			<p class="person-deg1"><a href="mailto%40example.php">info(at)Learn.com</a></p>
	   	  			<span class="person-deg1">1207</span>
	   	  			<div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="col-md-4">
	   	  	<figure class="team_member">
	   	  		<img src="images/fc4.jpg" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="course_detail.php">Lorem Ipsum</a></h3>
	   	  			<p class="person-deg1"><a href="mailto%40example.php">info(at)Learn.com</a></p>
	   	  			<span class="person-deg1">1207</span>
	   	  		    <div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="col-md-4">
	   	  	<figure class="team_member">
	   	  		<img src="images/fc5.jpg" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="course_detail.php">Lorem Ipsum</a></h3>
	   	  			<p class="person-deg1"><a href="mailto%40example.php">info(at)Learn.com</a></p>
	   	  			<span class="person-deg1">1207</span>
	   	  			<div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="clearfix"> </div>
	   	 </div>
	   	 <div class="faculty_bottom">
	   	  <div class="col-md-4">
	   	  	<figure class="team_member">
	   	  		<img src="images/fc6.jpg" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="course_detail.php">Lorem Ipsum</a></h3>
	   	  			<p class="person-deg1"><a href="mailto%40example.php">info(at)Learn.com</a></p>
	   	  			<span class="person-deg1">1207</span>
	   	  			<div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="col-md-4">
	   	  	<figure class="team_member">
	   	  		<img src="images/fc7.jpg" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="course_detail.php">Lorem Ipsum</a></h3>
	   	  			<p class="person-deg1"><a href="mailto%40example.php">info(at)Learn.com</a></p>
	   	  			<span class="person-deg1">1207</span>
	   	  		   <div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="col-md-4">
	   	  	<figure class="team_member">
	   	  		<img src="images/fc8.jpg" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="course_detail.php">Lorem Ipsum</a></h3>
	   	  			<p class="person-deg1"><a href="mailto%40example.php">info(at)Learn.com</a></p>
	   	  			<span class="person-deg1">1207</span>
	   	  		    <div class="person-social">
	   	  				<ul class="social-person">
	   	  					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   	  					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
	   	  			    </ul>
	   	  		  </div>
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="clearfix"> </div>
	   	 </div>
	     <ul class="pagination">
	   	 	<li class="active"><a href="#">1</a></li>
	   	 	<li><a href="#">2</a></li>
	   	 </ul>
	  </div>
	</div>
	<!---728x90--->

   <?php


                include 'includes/footer.php';
?>
</body>

    
    
    
</html>	