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
       <style>
        
        
        ul.nav_1 li a {

    color: #000;
    font-size: 18px;
    font-weight: 501;

}
        
        </style>
       
       
       
       
       
           <!-- header -->

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
                   
                   <!--TITRE LOGO-->
                    <a class="navbar-brand logo" href="index.php">EXCHANGE STUDENT</a>
                </div>
                
                
                
                
                
                <!--/.navbar-header-->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
                    <ul class="nav navbar-nav">
                       
                         <?php
                            if(!isset($_SESSION['email'])){  
                         echo '<li class="dropdown">
                            <a href="login.php"><i class="fa fa-user"></i><span>Login</span></a>
                        </li>';
                            }
                        ?>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i><span>Courses</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="courses.php">Courses Categories</a></li>
                                <li><a href="courses.php">Courses list</a></li>
                                <li><a href="course_detail.php">Courses detail</a></li>
                            </ul>
                        </li>
                        
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar"></i><span>Events</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="events.php">Event1</a></li>
                                <li><a href="events.php">Event2</a></li>
                                <?php
                        if(isset($_SESSION['email'])){
                                echo '<li><a href="deconnexion.php">déconnexion</a></li>';
                        }
                        ?>
                            </ul>
                        
                        </li>
                   
                           
                <!------------profile------------>
                              
                           
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span>English</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span><i class="flags us"></i><span>English</span></span></a></li>
                                <li><a href="#"><span><i class="flags newzland"></i><span>French</span></span></a></li>
                            </ul>
                        </li>
                        
                        
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><span>Search</span></a>
                            <ul class="dropdown-menu search-form">
                                <form>
                                    <input type="text" class="search-text" name="s" placeholder="Search...">
                                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                                </form>
                            </ul>
                        </li>
                        
                        
                       
                        
                        
                <!------------profile------------>        
                         <?php
                        
                        
                        if(isset($_SESSION['email'])){
                         echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span><B>'.strtoupper($_SESSION['nom']).' '.strtoupper($_SESSION['prenom']).'</B></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="compte_user/index.php">MY PROFIL</a></li>
                        
                                <li><a href="deconnexion.php">LOGOUT</a></li>
                            </ul>
                        
                        </li>
                        
                        
                        <li class="dropdown">
                            <a href="deconnexion.php"><i class="fa fa-sign-out"></i><span>LOGOUT</span></a>
                        </li>';
                        }
                        ?>
                        
                       
                        <!------------profile------------>
                        
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        
           
           
           
           <nav class="navbar nav_bottom" role="navigation">
            <div class="container navbar2">
           
                     <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                
                   
                   <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav nav_1">
                        <li><a href="index.php">Home</a></li>
                        
                           
                           
                           
                           
                           <!--new-->
                           <?php
                        
                         if(isset($_SESSION['email'])){
                             
                             
                             
                           echo  
                       
                            '<li class="dropdown">
                            <a href="#" class="dropdown-toggle back" data-toggle="dropdown">EXCHANGE<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="admission.php">STAGE</a></li>
                                <li><a href="admission.php">ETUDE</a></li>
                            </ul>
                        </li>';
                              
                         }
                        
                        ?>
                          
                          <style>
                        
                        
                              .back{
                                  background-color: forestgreen;
                              }
                              
                              
                        
                        
                        
                        </style>
                                                   <li><a href="about.php">About</a></li>

                         <!--  <li class="dropdown mega-dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admissions<span class="caret"></span></a>
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="container-fluid">
                                     Tab panes -->
                                    <!--<div class="tab-content">
                                        <div class="tab-pane active" id="men">
                                            <ul class="nav-list list-inline">
                                                <li><a href="admission.php"><img src="images/t7.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="admission.php"><img src="images/t8.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="admission.php"><img src="images/t9.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="admission.php"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="admission.php"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="women">
                                            <ul class="nav-list list-inline">
                                                <li><a href="admission.php"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="admission.php"><img src="images/t2.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="admission.php"><img src="images/t3.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="admission.php"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="admission.php"><img src="images/t5.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="admission.php"><img src="images/t6.jpg" class="img-responsive" alt=""/></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Nav tabs 
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#men" role="tab" data-toggle="tab"><b>STAGE</b></a></li>
                                    <li><a href="#women" role="tab" data-toggle="tab"><b>ETUDE SUPERIEUR</b></a></li>
                                </ul>
                            </div>
                        </li>
                        -->
                        
                        
                        
                        
                        <li><a href="faculty.php">Faculty</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="terms.php">Terms of use</a></li>
                                <li><a href="shortcodes.php">Shortcodes</a></li>
                                <li><a href="faq.php">Faq</a></li>
                            </ul>
                        </li>
                        
                        
                        <li><a href="services.php">Services</a></li>
                        <li><a href="features.php">Features</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="activities.php">activities</a></li>
                        <li class="last"><a href="contact.php">Contacts</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- banner -->
        
                    
                      
                        
                            <!-- header -->
   
    
    
    </body>



</html>
