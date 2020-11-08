<?php
session_start();

if(isset($_SESSION['email'])) {
    header("location:index.php");
}



include 'connexion.php';

?>
<!DOCTYPE HTML>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />



<head>
<title>LOGIN</title>
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
  		<h3>Login</h3>
  		<p class="description">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Login</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<!---728x90--->
















	  	
	  	



<div class="courses_box1">
  
  
   <div class="bg_1">
	  <div class="container">
	  
	  	<div class="login1">
	  
          <div class="container">
	   	  <form class="login" action="verification_login.php" method="post">
	    	<p class="lead">Welcome Back!</p>
	    	
	    	
	    
	    	
		    <div class="form-group">
			    <input autocomplete="off" type="text" name="email" class="required form-control" placeholder="enter your email" required>
		    </div>
		    <div class="form-group">
			    <input autocomplete="off" type="password" class="password required form-control" placeholder="Password" name="password" required>
		    </div>
			

		    <div class="form-group">
		    	<input type="checkbox" name="remember" value="true"> Remember Me
		    	<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="envoyer" value="Log In">
		    </div>
	        <p>Don not have an account? <a href="register.php" title="Sign Up">Sign Up</a></p>
		 
		 
              
		 </form>
	   </div>
</div>
	</div>
	
	</div>
</div>
	
	<!---728x90--->

   <style>
    
       .login1{
           
           
background-color: #fbfbfb;

padding: 0px;

    padding-top: 0px;
    padding-bottom: 0px;

padding-top: 10px;

padding-bottom: 10px;

margin: -14px;

    margin-top: -14px;

margin-top: 6px;

margin-top: 9px;

padding-top: 28px;

padding-bottom: 46px;

border: 30px solid #f8ce6c;
       }
    
    
    </style>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <?php


                include 'includes/footer.php';
?>
</body>



</html>	