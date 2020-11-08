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
        
                    
                      
                        
                            <!-- header -->

           
           
           
           
           
           
           <div class="banner">
            <!-- banner Slider starts Here -->
            <script src="js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function() {
                    // Slideshow 4
                    $("#slider3").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        before: function() {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function() {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });

            </script>
            <!--//End-slider-script -->
            
            
            
            
            
            
            
            
            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner-bg">
                            <div class="container">
                                <div class="banner-info">
                                    <h3>Take the first step<span>to knowledge friends</span></h3>
                                    <p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch playmakers, these kicks are ready to stand out.
                                    </p>
                                    <a href="courses.php"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    
                    
                    
                    
                    <li>
                        <div class="banner-bg banner-img2">
                            <div class="container">
                                <div class="banner-info">
                                    <h3>Stay in touch<span>Lorem Ipsum</span></h3>
                                    <p>Inspired by bold colors and matching up to football’s on-pitch playmakers, these kicks are ready to stand out.
                                    </p>
                                    <a href="courses.php"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    
                    
                    
                    
                    
                    
                    <li>
                        <div class="banner-bg banner-img">
                            <div class="container">
                                <div class="banner-info">
                                    <h3>therefore always<span>looks reasonable</span></h3>
                                    <p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch playmakers, these Brasil’s kicks are ready to stand out.
                                    </p>
                                    <a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    
                    
                    
                    
                    
                    
                    
                    <li>
                        <div class="banner-bg">
                            <div class="container">
                                <div class="banner-info">
                                    <h3>dolore magna<span>eaque ipsa</span></h3>
                                    <p>Inspired by bold colors and matching up to football’s on-pitch playmakers, these kicks are ready to stand out.
                                    </p>
                                    <a href="courses.html"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    
                    
                    
                    
                    
                    
                    
                    <li>
                        <div class="banner-bg banner-img2">
                            <div class="container">
                                <div class="banner-info">
                                    <h3> trivial example,<span>who chooses</span></h3>
                                    <p>Inspired by Brasil’s bold colors and matching up to football’s on-pitch playmakers, these kicks Brasil’s are ready to stand out.
                                    </p>
                                    <a href="courses.php"><i class="fa fa-thumbs-up icon_1" style="font-size: 20px; transition: color 0.2s ease 0s, border-color 0.2s ease 0s, background-color 0.2s ease 0s; min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px 2px 0px 0px; margin: 0px; padding:0px 10px 0 0; letter-spacing: 0px;"></i>View Courses</a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- //banner -->
        
        
        
        
        
        
        <div class="details">
            <div class="container">
                <div class="col-sm-10 dropdown-buttons">
                    <div class="col-sm-3 dropdown-button">
                        <div class="input-group">
                            <input class="form-control has-dark-background" name="name" id="slider-name" placeholder="Name" type="text" required="">
                        </div> 
                    </div>
                    
                    
                    
                    <div class="col-sm-3 dropdown-button">
                        <div class="input-group">
                            <input class="form-control has-dark-background" name="email" id="slider-name" placeholder="Email" type="text" required="">
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="col-sm-3 dropdown-button">
                        <div class="section_1">
                            <select id="country" onchange="change_country(this.value)" class="frm-field required">
					<option value="null">Learn Level</option>
					<option value="null">Bignner</option>         
					<option value="AX">Advanced</option>
					<option value="AX">Intermediate</option>
				 </select>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="col-sm-3 dropdown-button">
                        <div class="section_1">
                            <select id="country" onchange="change_country(this.value)" class="frm-field required">
					<option value="null">Courses</option>
					<option value="null">Finance</option>         
					<option value="AX">Marketing</option>
					<option value="AX">Science</option>
				 </select>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                
                
                
                
                <div class="col-sm-2 submit_button">
                    <form>
                        <input type="submit" value="Search">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!---728x90--->

       
       
       
       
       
       
       
        <div class="grid_1">
            <div class="container">
                <div class="col-md-4">
                    <div class="news">
                        <h1>News</h1>
                        
                        
                        <div class="section-content">
                            
                               
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>07-25-2019</figure>
                                <a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                            </article>
                            
                            
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2019</figure>
                                <a href="#">It is a long established fact that a reader will be distracted.</a>
                            </article>
                            
                            
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2019</figure>
                                <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text.</a>
                            </article>
                            
                            
                            <article>
                                <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                                <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text.</a>
                            </article>

                        </div>
                        <!-- /.section-content -->
                        <a href="#" class="read-more">All News</a>
                    </div>
                    <!-- /.news-small -->
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="col-md-8 grid_1_right">
                    <h2>Programs</h2>
                    <div class="but_list">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                               
                               
                                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Day 1&nbsp;&nbsp;&nbsp;31-08-2019</a></li>
                                
                                
                                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Day 2&nbsp;&nbsp;&nbsp;01-09-2019</a></li>
                                
                                
                                <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Day 3&nbsp;&nbsp;&nbsp;05-09-2019</a></li>
                                
                                
                            </ul>
                            
                            
                            
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    
                                    <!--slide 1-->
                                       <div class="events_box">
                                        <div class="event_left">
                                            <div class="event_left-item">
                                                <div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
                                                <div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
                                                <div class="icon_2">
                                                    <div class="speaker">
                                                        <i class="fa fa-user"></i>
                                                        <div class="speaker_item">
                                                            <a href="#">Lorem Ipsum</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event_right">
                                            <h3><a href="#">Welcoming and introduction</a></h3>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <a href="#">Read More</a></p>
                                            <img src="images/t9.jpg" class="img-responsive" alt="" />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="events_box">
                                        <div class="event_left">
                                            <div class="event_left-item">
                                                <div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
                                                <div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
                                                <div class="icon_2">
                                                    <div class="speaker">
                                                        <i class="fa fa-user"></i>
                                                        <div class="speaker_item">
                                                            <a href="#">Lorem Ipsum</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event_right">
                                            <h3><a href="#">Welcoming and introduction</a></h3>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form <a href="#">Read More</a></p>
                                            <img src="images/t5.jpg" class="img-responsive" alt="" />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!--slide 1-->

                                
                                <!--slide 2-->
                                <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                    <div class="events_box">
                                        <div class="event_left">
                                            <div class="event_left-item">
                                                <div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
                                                <div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
                                                <div class="icon_2">
                                                    <div class="speaker">
                                                        <i class="fa fa-user"></i>
                                                        <div class="speaker_item">
                                                            <a href="#">Lorem Ipsum</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event_right">
                                            <h3><a href="#">Welcoming and introduction</a></h3>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form <a href="#">Read More</a></p>
                                            <img src="images/t8.jpg" class="img-responsive" alt="" />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="events_box">
                                        <div class="event_left">
                                            <div class="event_left-item">
                                                <div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
                                                <div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
                                                <div class="icon_2">
                                                    <div class="speaker">
                                                        <i class="fa fa-user"></i>
                                                        <div class="speaker_item">
                                                            <a href="#">Lorem Ipsum</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event_right">
                                            <h3><a href="#">Welcoming and introduction</a></h3>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature <a href="#">Read More</a></p>
                                            <img src="images/t2.jpg" class="img-responsive" alt="" />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!--slide 2-->
                                
                                
                                
                                <!--slide 3-->
                                <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
                                    <div class="events_box">
                                        <div class="event_left">
                                            <div class="event_left-item">
                                                <div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
                                                <div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
                                                <div class="icon_2">
                                                    <div class="speaker">
                                                        <i class="fa fa-user"></i>
                                                        <div class="speaker_item">
                                                            <a href="#">Lorem Ipsum</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event_right">
                                            <h3><a href="#">Welcoming and introduction</a></h3>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings <a href="#">Read More</a></p>
                                            <img src="images/t7.jpg" class="img-responsive" alt="" />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="events_box">
                                        <div class="event_left">
                                            <div class="event_left-item">
                                                <div class="icon_2"><i class="fa fa-clock-o"></i>09:00 - 10:30</div>
                                                <div class="icon_2"><i class="fa fa-location-arrow"></i>Room A</div>
                                                <div class="icon_2">
                                                    <div class="speaker">
                                                        <i class="fa fa-user"></i>
                                                        <div class="speaker_item">
                                                            <a href="#">Lorem Ipsum</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event_right">
                                            <h3><a href="#">Welcoming and introduction</a></h3>
                                            <p>Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur.... <a href="#">Read More</a></p>
                                            <img src="images/t4.jpg" class="img-responsive" alt="" />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!--slide 3-->
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!---728x90--->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        <div class="bg">
            <div class="container">
                <div class="timer_wrap">
                    <div id="counter"> </div>
                </div>
                <div class="newsletter">
                    <form>
                        <input type="text" name="ne" size="30" required="" placeholder="Please fill your email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
        <!---728x90--->
        
        
        
        
        
    <!--phases project  -->
       
       
       
	  	
	 
          
          
        <div class="bottom_content">
            <h3>Our Projects</h3>
            
               <!--phase 1  -->
               
               <div class="bg_2">
	  <div class="container">
              
              
               
               <div class="grid_2">
                
                   <!--project  -->
                   <div class="col-md-4 portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/t15.jpg" class="img-responsive" alt="" />
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Mauris diam massa, malesuada a sapien in, semper vehicula erat. Vivamus sagittis leo a ullamcorper ultricies. Suspendisse placerat mattis arcu nec por</p>
                        <span>
                  <a href="students.php">School Studies</a>
                  <a href="students.php">College Studies</a>
                </span>
                        <a href="events.php">
                    <span><i class="fa fa-chain chain_1"></i>VIEW PROJECT</span>
                </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--project 1 -->
                
               
                <!--project 2 -->
                <div class="col-md-4 portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/t10.jpg" class="img-responsive" alt="" />
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Mauris diam massa, malesuada a sapien in, semper vehicula erat. Vivamus sagittis leo a ullamcorper ultricies. Suspendisse placerat mattis arcu nec por</p>
                        <span>
                  <a href="students.php">School Studies</a>
                  <a href="students.php">College Studies</a>
                </span>
                        <a href="events.php">
                    <span><i class="fa fa-chain chain_1"></i>VIEW PROJECT</span>
                </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--project  -->
                
             
                <!--project 3 -->
                <div class="col-md-4 portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/t12.jpg" class="img-responsive" alt="" />
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Mauris diam massa, malesuada a sapien in, semper vehicula erat. Vivamus sagittis leo a ullamcorper ultricies. Suspendisse placerat mattis arcu nec por</p>
                        <span>
                  <a href="students.php">School Studies</a>
                  <a href="students.php">College Studies</a>
                </span>
                        <a href="events.php">
                    <span><i class="fa fa-chain chain_1"></i>VIEW PROJECT</span>
                </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--project  -->
                
                <div class="clearfix"> </div>
            </div>
            <!--phase 1 -->
               
               
               
               <!--phase 2 -->
               <div class="grid_3">
                
                   
                   <!--project -->
                   <div class="col-md-4 portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/t11.jpg" class="img-responsive" alt="" />
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Mauris diam massa, malesuada a sapien in, semper vehicula erat. Vivamus sagittis leo a ullamcorper ultricies. Suspendisse placerat mattis arcu nec por</p>
                        <span>
                  <a href="students.php">School Studies</a>
                  <a href="students.php">College Studies</a>
                </span>
                        <a href="events.php">
                    <span><i class="fa fa-chain chain_1"></i>VIEW PROJECT</span>
                </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--project -->
                
                
                
                
                
                
                <!--project -->
                <div class="col-md-4 portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/t14.jpg" class="img-responsive" alt="" />
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Mauris diam massa, malesuada a sapien in, semper vehicula erat. Vivamus sagittis leo a ullamcorper ultricies. Suspendisse placerat mattis arcu nec por</p>
                        <span>
                  <a href="students.php">School Studies</a>
                  <a href="students.php">College Studies</a>
                </span>
                        <a href="events.php">
                    <span><i class="fa fa-chain chain_1"></i>VIEW PROJECT</span>
                </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--project -->
                
                
                
                
                <!--project -->
                <div class="col-md-4 portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="images/t13.jpg" class="img-responsive" alt="" />
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="#">Lorem Ipsum</a></h4>
                        <p>Mauris diam massa, malesuada a sapien in, semper vehicula erat. Vivamus sagittis leo a ullamcorper ultricies. Suspendisse placerat mattis arcu nec por</p>
                        <span>
                  <a href="students.php">School Studies</a>
                  <a href="students.php">College Studies</a>
                </span>
                        <a href="events.php">
                    <span><i class="fa fa-chain chain_1"></i>VIEW PROJECT</span>
                </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            
               </div>
	</div>
        
            <!--phase 2 -->
        </div>
         
         
         
         
         
         
         
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="bg_1">
	  <div class="container">
	  	
	  	
	  	
	  	
	  	
	  	<h2>Our Staff</h2>
		
		<div class="col-md-3 team_grid">
			<div class="team">
               <img src="images/team1.jpg" class="img-responsive" alt=""> 
               <div class="team_box">               
                 <h3>slightly believable</h3>   
                 <p>Economics</p>        
                 <ul class="team-socials">
                    <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                    <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                 </ul>     
               </div>                             
            </div>
        </div>
        
        
        
        
        
        <div class="col-md-3 team_grid">
			<div class="team">
                <img src="images/team4.jpg" class="img-responsive" alt=""> 
                   <div class="team_box">               
                     <h3>slightly believable</h3>  
                     <p>Economics</p>        
                     <ul class="team-socials">
                        <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                        <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                     </ul>     
                   </div>                             
            </div>
        </div>
        <div class="col-md-3 team_grid">
			<div class="team">
                <img src="images/team2.jpg" class="img-responsive" alt=""> 
                   <div class="team_box">               
                     <h3>slightly believable</h3>    
                     <p>Economics</p>        
                     <ul class="team-socials">
                        <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                        <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                     </ul>     
                   </div>                             
            </div>
        </div>
        <div class="col-md-3 team_grid">
			<div class="team">
                <img src="images/team3.jpg" class="img-responsive" alt=""> 
                   <div class="team_box">               
                     <h3>slightly believable</h3>  
                     <p>Economics</p>        
                     <ul class="team-socials">
                        <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                        <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                     </ul>     
                   </div>                             
            </div>
        </div>
        
        
        
        
        <div class="col-md-3 team_grid">
			<div class="team">
                <img src="images/team4.jpg" class="img-responsive" alt=""> 
                   <div class="team_box">               
                     <h3>slightly believable</h3>  
                     <p>Economics</p>        
                     <ul class="team-socials">
                        <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                        <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                     </ul>     
                   </div>                             
            </div>
        </div>
        
        <div class="col-md-3 team_grid">
			<div class="team">
                <img src="images/team2.jpg" class="img-responsive" alt=""> 
                   <div class="team_box">               
                     <h3>slightly believable</h3>    
                     <p>Economics</p>        
                     <ul class="team-socials">
                        <li><a href="#"><span class="icon-social "><i class="fa fa-facebook"></i></span></a></li>
                        <li><a href="#"><span class="icon-social "><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span class="icon-social"><i class="fa fa-google-plus"></i></span></a></li>
                     </ul>     
                   </div>                             
            </div>
        </div>
        
        
        
        <!--last-->
        
        
        
       
        
        <div class="clearfix"> </div>
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
