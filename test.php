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
        
                 
                    
                       
                          
        <!-------------------the 1---------->                     
                                
                                   
                                      <div class="container">
<div class="row info" style="text-align:center;">
    <div class="col-xs-12 alert alert-info">
        The skills meter from <a class="alert-link" href="http://bootsnipp.com/snippets/featured/progress-bar-meter">here</a> is used in this design. 
        Feel free to remove this div from the design.
    </div>
</div>

<div class="resume">
    <header class="page-header">
    <h1 class="page-title">Resume of John Doe</h1>
    <small> <i class="fa fa-clock-o"></i> Last Updated on: <time>Sunday, October 05, 2014</time></small>
  </header>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
    <div class="panel panel-default">
      <div class="panel-heading resume-heading">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-xs-12 col-sm-4">
              <figure>
                <img class="img-circle img-responsive" alt="" src="http://placehold.it/300x300">
              </figure>
              
              <div class="row">
                <div class="col-xs-12 social-btns">
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-google">
                        <i class="fa fa-google"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-facebook">
                        <i class="fa fa-facebook"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-twitter">
                        <i class="fa fa-twitter"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-linkedin">
                        <i class="fa fa-linkedin"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-github">
                        <i class="fa fa-github"></i> </a>
                    </div>
                  
                    <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                      <a href="#" class="btn btn-social btn-block btn-stackoverflow">
                        <i class="fa fa-stack-overflow"></i> </a>
                    </div>
                  
                </div>
              </div>
              
            </div>

            <div class="col-xs-12 col-sm-8">
              <ul class="list-group">
                <li class="list-group-item">John Doe</li>
                <li class="list-group-item">Software Engineer</li>
                <li class="list-group-item">Google Inc. </li>
                <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000 </li>
                <li class="list-group-item"><i class="fa fa-envelope"></i> john@example.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Summary</h4>
        <p>
         Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
         te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
        </p>
        <p>
            Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud nusquam an vis. 
            Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id eos.

        </p>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Research Interests</h4>
        <p>
          Software Engineering, Machine Learning, Image Processing,
          Computer Vision, Artificial Neural Networks, Data Science,
          Evolutionary Algorithms.
        </p>
      </div>

      <div class="bs-callout bs-callout-danger">
        <h4>Prior Experiences</h4>
        <ul class="list-group">
          <a class="list-group-item inactive-link" href="#">
            <h4 class="list-group-item-heading">
              Software Engineer at Twitter
            </h4>
            <p class="list-group-item-text">
              Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
         te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
            </p>
          </a>
          <a class="list-group-item inactive-link" href="#">
            <h4 class="list-group-item-heading">Software Engineer at LinkedIn</h4>
            <p class="list-group-item-text">
              Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                </p><ul>
                  <li>
                 Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                  </li>
                  <li>
                 Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. 
              Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola, 
              nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                  </li>
                </ul>
            <p></p>
          </a>
        </ul>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Key Expertise</h4>
        <ul class="list-group">
          <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc </li>
          <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
          <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
          <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
          <li class="list-group-item">Lorem ipsum dolor sit amet, ea vel prima adhuc</li>
          <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc</li>



        </ul>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Language and Platform Skills</h4>
        <ul class="list-group">
          <a class="list-group-item inactive-link" href="#">
            

            <div class="progress">
              <div data-placement="top" style="width: 80%;" 
              aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success">
                <span class="sr-only">80%</span>
                <span class="progress-type">Java/ JavaEE/ Spring Framework </span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                <span class="sr-only">70%</span>
                <span class="progress-type">PHP/ Lamp Stack</span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                <span class="sr-only">70%</span>
                <span class="progress-type">JavaScript/ NodeJS/ MEAN stack </span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 65%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-warning">
                <span class="sr-only">65%</span>
                <span class="progress-type">Python/ Numpy/ Scipy</span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                <span class="sr-only">60%</span>
                <span class="progress-type">C</span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 50%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
                <span class="sr-only">50%</span>
                <span class="progress-type">C++</span>
              </div>
            </div>
            <div class="progress">
              <div data-placement="top" style="width: 10%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-danger">
                <span class="sr-only">10%</span>
                <span class="progress-type">Go</span>
              </div>
            </div>

            <div class="progress-meter">
              <div style="width: 25%;" class="meter meter-left"><span class="meter-text">I suck</span></div>
              <div style="width: 25%;" class="meter meter-left"><span class="meter-text">I know little</span></div>
              <div style="width: 30%;" class="meter meter-right"><span class="meter-text">I'm a guru</span></div>
              <div style="width: 20%;" class="meter meter-right"><span class="meter-text">I''m good</span></div>
            </div>

          </a>

        </ul>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Education</h4>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr><th>Degree</th>
            <th>Graduation Year</th>
            <th>CGPA</th>
          </tr></thead>
          <tbody>
            <tr>
              <td>Masters in Computer Science and Engineering</td>
              <td>2014</td>
              <td> 3.50 </td>
            </tr>
            <tr>
              <td>BSc. in Computer Science and Engineering</td>
              <td>2011</td>
              <td> 3.25 </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>
    
</div>

</div>
                                         
                                            
                                               
                                                  
                                                     
                <style>
        
        
        
        
        @import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

.page-header{
  text-align: center;    
}

/*social buttons*/
.btn-social{
  color: white;
  opacity:0.9;
}
.btn-social:hover {
  color: white;
    opacity:1;
}
.btn-facebook {
background-color: #3b5998;
opacity:0.9;
}
.btn-twitter {
background-color: #00aced;
opacity:0.9;
}
.btn-linkedin {
background-color:#0e76a8;
opacity:0.9;
}
.btn-github{
  background-color:#000000;
  opacity:0.9;
}
.btn-google {
  background-color: #c32f10;
  opacity: 0.9;
}
.btn-stackoverflow{
  background-color: #D38B28;
  opacity: 0.9;
}

/* resume stuff */

.bs-callout {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    margin-bottom: 5px;
    padding: 20px;
}
.bs-callout:last-child {
    margin-bottom: 0px;
}
.bs-callout h4 {
    margin-bottom: 10px;
    margin-top: 0;
}

.bs-callout-danger {
    border-left-color: #d9534f;
}

.bs-callout-danger h4{
    color: #d9534f;
}

.resume .list-group-item:first-child, .resume .list-group-item:last-child{
  border-radius:0;
}

/*makes an anchor inactive(not clickable)*/
.inactive-link {
   pointer-events: none;
   cursor: default;
}

.resume-heading .social-btns{
  margin-top:15px;
}
.resume-heading .social-btns i.fa{
  margin-left:-5px;
}



@media (max-width: 992px) {
  .resume-heading .social-btn-holder{
    padding:5px;
  }
}


/* skill meter in resume. copy pasted from http://bootsnipp.com/snippets/featured/progress-bar-meter */

.progress-bar {
    text-align: left;
	white-space: nowrap;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	cursor: pointer;
}

.progress-bar > .progress-type {
	padding-left: 10px;
}

.progress-meter {
	min-height: 15px;
	border-bottom: 2px solid rgb(160, 160, 160);
  margin-bottom: 15px;
}

.progress-meter > .meter {
	position: relative;
	float: left;
	min-height: 15px;
	border-width: 0px;
	border-style: solid;
	border-color: rgb(160, 160, 160);
}

.progress-meter > .meter-left {
	border-left-width: 2px;
}

.progress-meter > .meter-right {
	float: right;
	border-right-width: 2px;
}

.progress-meter > .meter-right:last-child {
	border-left-width: 2px;
}

.progress-meter > .meter > .meter-text {
	position: absolute;
	display: inline-block;
	bottom: -20px;
	width: 100%;
	font-weight: 700;
	font-size: 0.85em;
	color: rgb(160, 160, 160);
	text-align: left;
}

.progress-meter > .meter.meter-right > .meter-text {
	text-align: right;
}


        
        
        
        
        </style>                                        
                                                           
                         <!-------------------the 1---------->                     
                               
                                                                                                       
        <!-------------------the 2---------->                     
                                             
                                                                   
                                                                   
                                                                     
                      
                      
                      
                           
                             
                               
                                   
                            <!-- header -->

           
   
        
        
        
        
        
        <!--footer-->
           <?php


                include 'includes/footer.php';
?>
    
    <script src="js/jquery.countdown.js"></script>
        <script src="js/script.js"></script>
    
    
    
    </body>



</html>
