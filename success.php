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
<title>SUCCESS !!!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />



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
  		<h3>Successfully addmission</h3>
  		<p class="description">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Admissions</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<!---728x90--->

         
         
         
         
         
         
         
     <div class="suc">    
         
     
	   	  <div class="alert alert-success" role="alert">
  <h2 class="alert-heading"><strong><p align="center"><i class="fa fa-check"> </i> Successfully well done!</p></strong></h2>
  <p align="center">your condidature has been created successfully you can now log in When they have been checked successfully, your account will shortly be activated.<br/></p>
  <hr>
  <p class="mb-0" align="center">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
  <p align="center">you can go to your account <a href="compte_user/index.php"><strong>click here</strong></a>           </p>
</div>
	   	  </div>
    
    
    <style>
    
        .suc{
            padding: 9px;

margin: 15px;

    margin-bottom: 15px;

margin-bottom: 200px;
            
            
            
        }
    
    
    </style>
<!--	   	  
<div class="alert alert-success" role="alert">	   	  
	<div class="jumbotron">
  <h1>Hello, world!</h1>
  <p>...</p>
  
</div>   	  
</div>   	  
	   	  
	<div class="alert alert-success">
  <a href="#" class="alert-link">...</a>
</div>   	  
	   	  
	   -->
         
         	    
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	 
	<!---728x90--->

     <?php


                include 'includes/footer.php';
?>
</body>
</html>	