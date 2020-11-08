<?php
session_start();

if(isset($_SESSION['email'])) {
 
if($_SESSION["type"] == "admin") { 
    
    header("location:espace_admin/index.php"); 

}

}
include 'connexion.php';

?>
<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>EXCHANGE STUDENT BIG FILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    
    <link href="csss/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="csss/style.css" rel="stylesheet" type="text/css" media="all" />
    
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
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });

    </script>
</head>

<body>
    <script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();

    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();

    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();

    </script>
    <script>
        (function(v, d, o, ai) {
            ai = d.createElement("script");
            ai.defer = true;
            ai.async = true;
            ai.src = v.location.protocol + o;
            d.head.appendChild(ai);
        })(window, document, "../../../../vdo.ai/core/w3layouts/vdo.ai.js");

    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-125810435-1');

    </script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-30027142-1', 'w3layouts.com');
        ga('send', 'pageview');

    </script>

    <body>
       
       
       
       
       
       
           <!-- header -->

       <?php


                include 'includes/header.php';
?>

        <!-- banner -->
        
                 
                    
                       
                          
        <!-------------------the 1---------->                     
                         
                         <!-------------------the 1---------->                     
                               
                                                                                                       
        <!-------------------the 2---------->                     
                                             
                                                                   
                                                                   
                                                                     
                      
                      
                      
                           
                             
                               
                                   
                            <!-- header -->

 <div class="content">
			<!--about-->
			<!---728x90--->

			<div class="about-w3">
				<div class="container">
					<h2 class="tittle">About Us</h2>
					<div class="about-grids">
						<div class="col-md-6 about-grid">
						 <h4>Curabitur vehicula eros eget porta iaculis.</h4>
							 <p>Vivamus id magna pretium, pretium orci nec, vestibulum enim. Vivamus sed massa porttitor, lacinia tortor a, luctus mi. 
							 Donec sit amet justo sit amet risus malesuada venenatis id ac lacus.Pellentesque sed urna sed dui fermentum vulputate. Nulla facilisi. Mauris eget risus non quam convallis semper non ut turpis.</p>
							<ul class="grid-part">
								<li><i class="glyphicon glyphicon-ok-sign"> </i>Praesent vestibulum molestie lacus</li>
								<li><i class="glyphicon glyphicon-ok-sign"> </i>Donec sagittis interdum tellusplacerat adipiscing</li>
								<li><i class="glyphicon glyphicon-ok-sign"> </i>Nulla consectetur adipiscing</li>
							</ul>
						 </div>
						<div class="col-md-6 video-grid">
							<iframe src="https://player.vimeo.com/video/78554725?color=741731&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>          
			</div>          
   
        
        
        
        
        
        <!--footer-->
           <?php


                include 'includes/footer.php';
?>
    
    <script src="js/jquery.countdown.js"></script>
        <script src="js/script.js"></script>
    
    
    
    </body>



</html>
