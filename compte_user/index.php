<?php
session_start();

if(isset($_SESSION['email'])) {
  
if($_SESSION['type'] == "admin") { 
    
    header("location:../espace_admin/index.php"); 

}

}
include '../connexion.php';

?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="M_Adnan" />
        <!-- Document Title -->
        <title>Profile</title>

        <!-- StyleSheets -->
        <!-- navbar -->



        <!-- navbar -->






        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!-- FontsOnline -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- JavaScripts -->
        <script src="js/vendors/modernizr.js"></script>

    </head>

    <body>



        <!--profile-->


        <style>
            ul.nav_1 li a {

                color: #000;
                font-size: 18px;
                font-weight: 501;

            }

            .navbar-default {
                background-color: #3c763d !important;
                border-color: #f6b451;
                border-radius: 0px;
                border-style: outset;
                border-width: 13px;
            }

            .navbar-brand {
                height: 100%;
                padding: 0px;
                padding-left: 0px;
                padding-left: 0px;
                margin: 20px 0 0 0;
                margin-left: 0px;
                margin-left: 0px;
                padding-left: 0px;
                font-size: 45px;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-weight: 599;
                font-family: serif;
            }

            .navbar2 {
                background-color: #e6ece7;

                border: outset;

                border-top-color: currentcolor;
                border-top-width: medium;
                border-right-color: currentcolor;
                border-right-width: medium;
                border-bottom-color: currentcolor;
                border-bottom-width: medium;
                border-left-color: currentcolor;
                border-left-width: medium;

                border-width: 6px;

                border-radius: 1pc;

                border-color: snow;
            }


            .logo {


                font-size: 5px;
            }

            .navbar-default .navbar-nav>li>a {
                color: #fff;
                font-weight: 300;
            }

            .navbar-default .navbar-nav>li>a span {
                display: block;
            }

            .navbar {
                min-height: 100%;
                margin-bottom: 0;
            }

            .navbar-nav {
                margin: 0;
                float: right;
            }

            .navbar-brand {
                height: 100%;
                padding: 0px;
                padding-left: 0px;
                margin: 20px 0 0 0;
                margin-left: 0px;
                padding-left: 0px;
                font-size: 45px;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-weight: 599;
                font-family: serif;
            }

            .navbar-default .navbar-brand {
                color: #fff;
            }

            .navbar-default .navbar-brand:hover,
            .navbar-default .navbar-brand:focus {
                color: #fff;
                background-color: transparent;
            }

            .navbar-nav>li>a {
                padding: 10px 15px;
                text-align: center;
                color: #fff;
                font-weight: 100;
                font-size: 15px;
            }

            .dropdown-menu.columns-2 {
                min-width: 400px;
            }

            .dropdown-menu.columns-3 {
                min-width: 550px;
            }

            .multi-column-dropdown {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .multi-column-dropdown li a {
                display: block;
                clear: both;
                line-height: 1.428571429;
                color: #333;
                white-space: normal;
            }

            .multi-column-dropdown li a:hover {
                text-decoration: none;
                color: #262626;
                background-color: #f5f5f5;
            }

            .dropdown-menu li a {
                padding: 5px 15px;
                font-weight: 300;
            }

            .dropdown-menu {
                right: 0 !important;
                left: inherit;
            }

            .nav_bottom {
                background: none;
            }

            .nav-tabs {
                display: inline-block;
                border-bottom: none;
                font-weight: bold;
                padding-top: 15px;
            }

            .nav-tabs1 {
                display: inline-block;
                border-bottom: none;
                font-weight: 500;
                background-color: #f1b458;
                width: 100%;
                padding: 0;
            }

            .nav-tabs>li>a,
            .nav-tabs>li>a:hover,
            .nav-tabs>li>a:focus,
            .nav-tabs>li.active>a,
            .nav-tabs>li.active>a:hover,
            .nav-tabs>li.active>a:focus {
                border: none;
                border-radius: 0;
            }

            .nav-list {
                border-bottom: 1px solid #eee;
            }

            .nav-list>li {
                padding: 20px 15px 15px;
                border-left: 1px solid #eee;
                margin-right: 0 !important;
            }

            .nav-list>li:last-child {
                border-right: 1px solid #eee;
            }

            .nav-list>li>a:hover {
                text-decoration: none;
            }

            .nav-list>li>a>span {
                display: block;
                font-weight: bold;
                text-transform: uppercase;
            }

            .mega-dropdown {
                position: static !important;
            }

            .mega-dropdown-menu {
                padding: 20px 15px 15px;
                text-align: center;
                width: 100%;
            }

            i.flags {
                width: 21px;
                height: 13px;
                float: left;
                margin-right: 8px;
                margin-top: 3px;
            }

            i.us {
                background: url("../images/f1.jpg") no-repeat;
            }

            i.newzland {
                background: url("../images/f2.jpg") no-repeat;
            }

            .search-form {
                background-color: #7ea513e6;
                display: none;
                position: absolute;
                right: 0;
                top: 100%;
                padding: 15px;
                width: 346px;
            }

            .search-form input[type="text"] {
                width: 100%;
                height: 30px;
                color: #a7aebf;
                line-height: 20px;
                border: none;
                padding: 5px 15px;
                border-radius: 0;
                outline: none;
            }

            .search-form .search-submit {
                border: 0;
                padding: 0;
                position: absolute;
                right: 27px;
                top: 20px;
                background: none;
                line-height: 20px;
            }

            ul.nav_1 {
                float: none;
            }

            ul.nav_1 li {
                margin-right: 44px;
            }

            .navbar-nav>li>.dropdown-menu li {
                margin-right: 0px;
            }

            ul.nav_1 li a {
                color: #000;
            }

            ul.nav_1 li.last {
                margin-right: 0;
            }

            .nav .open>a,
            .nav .open>a:hover,
            .nav .open>a:focus,
            .nav>li>a:hover,
            .nav>li>a:focus {
                background-color: #2f374c !important;
                border-color: #2f374c;
                color: #fff !important;
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
                    <a class="navbar-brand logo" href="../index.php">EXCHANGE STUDENT</a>
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
                                <li><a href="mon_compte.php">MY PROFIL</a></li>
                        
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



        <!--fin profile-->










        <!-- Page Wrapper -->
        <div id="wrap">



            <!-- End Header -->

            <!-- Content -->
            <main class="cd-main-content">
                <div id="content" class="bg">
                    <div class="resume">
                        <div class="container">

                            <!-- TOP HEAD -->
                            <div class="top-head">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4>Profile </h4>
                                        <a href="resume(edit-mode).php">Edit your Profile</a> </div>
                                    <div class="col-sm-6"> <a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span></a> </div>
                                </div>
                            </div>

                            <!-- Resume -->
                            <div class="row">

                                <!-- Sidebar -->
                                <div class="col-md-4">
                                    <div class="side-bar">

                                        <!-- Professional Details -->
                                        <h5 class="tittle" align="center">Professional Details</h5>



                                        <img src="../images/profile/<?php 
                          
                               
                                
                             $sql="select * from utilisateurs where id_user=".$_SESSION["id_user"]." limit 1; ";
       
                        $mehdi=mysqli_query($link,$sql);
                        while($row=mysqli_fetch_array($mehdi)){
                            if($row["ex_statut"]==1){
                                 $sql1="select * from formulaire where id_user=".$_SESSION["id_user"]." limit 1; ";
       
                        $mehdi1=mysqli_query($link,$sql1);
                                while($rows=mysqli_fetch_array($mehdi1)){
                                
                            echo $rows["photo"];}
                            
                            }elseif($row["ex_statut"]==0)
                                                echo "unknown.jpg ";

                        }
                            
                            
                    
                                          
                                          ?>" class="img-responsive" alt="">








                                        <ul class="personal-info">
                                            <li>
                                                <p> <span> Name : </span>
                                                    <?php  echo strtoupper($_SESSION["nom"]).'  '.strtoupper($_SESSION["prenom"])?>
                                                </p>
                                            </li>
                                            <li>
                                                <p> <span> City : </span>
                                                    <?php  echo strtoupper($_SESSION["ville"]);?>
                                                </p>
                                            </li>
                                            <li>
                                                <p> <span> Email : </span>
                                                    <?php  echo strtolower($_SESSION["email"]);?> </p>
                                            </li>
                                            <li>
                                                <p> <span> Phone number : </span>
                                                    <?php  echo $_SESSION["numtel"];?> </p>
                                            </li>







                                            <?php
                    
                        
                         $sql="select * from utilisateurs where id_user=".$_SESSION["id_user"]." limit 1;";
       
                        $mehdi=mysqli_query($link,$sql);
                        while($row=mysqli_fetch_array($mehdi)){
                            
                            if($row["ex_statut"]==0){
                            
                            echo '';
                                
                            }elseif($row["ex_statut"]==1){
                                
                                
                                
                                 $sql1="select * from formulaire where id_user=".$_SESSION["id_user"]." limit 1;";
       
                        $mehdi1=mysqli_query($link,$sql1);
                        while($rows=mysqli_fetch_array($mehdi1)){
                            
                    
                    
                    
                    ?>

                                                <li>
                                                    <p> <span> Job : </span>
                                                        <?php echo $rows["job"] ?>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p> <span> Institution : </span>
                                                        <?php echo $rows["institution"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Gender : </span>
                                                        <?php echo $rows["institution"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Nationality : </span>
                                                        <?php echo $rows["nationality"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Date naissance : </span>
                                                        <?php echo $rows["datenaiss"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Address : </span>
                                                        <?php echo $rows["address1"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> City : </span>
                                                        <?php echo $rows["city"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Country : </span>
                                                        <?php echo $rows["country"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> zip : </span>
                                                        <?php echo $rows["zip"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Cin : </span>
                                                        <?php echo $rows["cin"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Cne : </span>
                                                        <?php echo $rows["cne"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Degree : </span>
                                                        <?php echo $rows["degree"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Cycle : </span>
                                                        <?php echo $rows["cycle"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Formation : </span>
                                                        <?php echo $rows["formation"] ?> </p>
                                                </li>
                                                <li>
                                                    <p> <span> E-mail : </span> <a href="#."> example@example.com</a> </p>
                                                </li>
                                                <li>
                                                    <p> <span> Website : </span><a href="#."> example.com </a></p>
                                                </li>
                                        </ul>
                                        <?php
                  
                  
                  }
                    }}
                  
                  ?>
                                            <!-- Attachments -->
                                            <h5 class="tittle">Attachments</h5>
                                            <div class="attach bor-btm padding-25">
                                                <ul>
                                                    <li>
                                                        <p><img src="images/pdf-icon.jpg" alt=""> Curriculum-Vitae.pdf <a href="#."><i class="fa fa-cloud-download"></i></a> <a href="#."><i class="fa fa-eye"></i></a></p>
                                                    </li>
                                                    <li>
                                                        <p><img src="images/word-icon.jpg" alt=""> COE.docx <a href="#."><i class="fa fa-cloud-download"></i></a> <a href="#."><i class="fa fa-eye"></i></a></p>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Social Profiles -->
                                            <h5 class="tittle">Social Profiles</h5>
                                            <div class="social-icon bor-btm padding-25">
                                                <ul>
                                                    <li> <a href="#."> <i class="fa fa-facebook"></i></a> </li>
                                                    <li> <a href="#."> <i class="fa fa-google"></i></a> </li>
                                                    <li> <a href="#."> <i class="fa fa-twitter"></i></a> </li>
                                                    <li> <a href="#."> <i class="fa fa-linkedin"></i></a> </li>
                                                    <li> <a href="#."> <i class="fa fa-skype"></i></a> </li>
                                                </ul>
                                            </div>

                                            <!-- Contact Me -->
                                            <h5 class="tittle">Contact Me</h5>
                                            <div class="contact padding-25">
                                                <!-- Success Msg -->
                                                <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>

                                                <!-- FORM -->
                                                <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                                                    <ul class="row">
                                                        <li class="col-sm-12">
                                                            <label>
                          <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </label>
                                                        </li>
                                                        <li class="col-sm-12">
                                                            <label>
                          <input type="text" class="form-control" name="company" id="company" placeholder="Subject">
                        </label>
                                                        </li>
                                                        <li class="col-sm-12">
                                                            <label>
                          <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                        </label>
                                                        </li>
                                                        <li class="col-sm-12">
                                                            <button type="submit" value="submit" id="btn_submit" onClick="proceed();">Send Message</button>
                                                        </li>
                                                    </ul>
                                                </form>
                                            </div>
                                    </div>
                                </div>

                                <!-- MAIN CONTENT -->
                                <div class="col-md-8">

                                    <!-- NAV LINKS -->
                                    <nav>
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-tabis" aria-expanded="false"> <span class="tittle">MENU</span> <span class="fa fa-navicon icon-nav"></span> </button>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="nav-tabis">
                                            <ul class="isop-filter nav nav-pills">
                                                <li role="presentation" class="active"><a href="#about-me" aria-controls="about-me" role="tab" data-toggle="tab"><i class="icon-user"></i> ABOUT ME</a></li>
                                                <li role="presentation"><a href="#resume" aria-controls="resume" role="tab" data-toggle="tab"><i class="icon-book-open"></i>RESUME</a></li>
                                                <li role="presentation"><a href="#portfolio" aria-controls="portfolio" role="tab" data-toggle="tab"><i class="icon-rocket"></i>PORTFOLIO</a></li>
                                                <li role="presentation"><a href="#blog" aria-controls="blog" role="tab" data-toggle="tab"><i class="icon-note"></i>BLOG</a></li>
                                                <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab"> <i class="icon-pencil"></i>CONTACT ME</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                    
                                    
                                    <!-- NAV LINKS END -->

                                    <div class="tab-content">

                                        <!-- ABOUT ME -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="about-me">
                                            <div class="inside-sec">
                                                <!-- BIO AND SKILLS -->
                                                <h5 class="tittle">About Me</h5>
                                                
                                                
          <?php
                         $sql="select * from utilisateurs where id_user=".$_SESSION["id_user"]." limit 1;";
       
                        $mehdi=mysqli_query($link,$sql);
                        while($row=mysqli_fetch_array($mehdi)){
                            
                            if($row["ex_statut"]==0){
                            
                            echo '<div class="alert alert-danger" role="alert">
    <h2 class="alert-heading"><strong><p align="center"><i class="fa fa-check"> </i><strong> Successfully registration '. strtoupper($_SESSION["nom"]).'!!!</strong></p></strong></h2>
  <p align="center">your registration has been created successfully but you should complete your registration.<br/></p>
  <hr>
  <p align="center">to complete your registration <strong>exchange student big file</strong> <a href="../admission.php"><strong><h6 align="center">click here</h6></strong></a>           </p>
</div>';
                                
                                
                                
                                
                            }elseif($row["ex_statut"]==1 && $row["reg_statut"]==0){
                                
                                
                                echo '<div class="alert alert-success" role="alert">
    <h2 class="alert-heading"><strong><p align="center"><i class="fa fa-check"> </i><strong> Successfully exchange '. strtoupper($_SESSION["nom"]).'!!!</strong></p></strong></h2>
  <p align="center">your condidature has been created successfully you can now log in When they have been checked successfully, your account will shortly be activated.<br/></p>
  <hr>
  <p align="center">to visite our exchange website <a href="../index.php"><strong><h6 align="center">click here</h6></strong></a>           </p>
</div>';
                                
                                
                            }elseif($row["ex_statut"]==1 && $row["reg_statut"]==1 && $row["ex_serv"]==0){
                                
                                
                                echo '<div class="alert alert-success" role="alert">
  <h2 class="alert-heading"><strong><p align="center"><i class="fa fa-check"> </i><strong> Successfully you are accepted in our website  '. strtoupper($_SESSION["nom"]).'!!!</strong></p></strong></h2>
  <p align="center">your condidature has been accepted successfully you have been checked successfully, your account will shortly be activated.<br/></p>
  <hr>
    <p class="mb-0" align="center">you have to complete your condidature and to post your activities and ather services</p>

  <p align="center">to complete it <a href="../add_services.php"><strong><h6 align="center">click here</h6></strong></a>           </p>
</div>';
                                
                                
                            }else{
                                
                                
                                echo '<div class="alert alert-success" role="alert">
  <h2 class="alert-heading"><strong><p align="center"><i class="fa fa-check"> </i><strong> Successfully your account has been completed  '. strtoupper($_SESSION["nom"]).'!!!</strong></p></strong></h2>
  
</div>';
                                
                                
                            }
                        
                        
                        
                        
                        
                        
                        
                        
                        }
                                                
                                                
         ?>                                       
                                                
                                             

                                                
                                                
                                                

  
                                                

 
 
 
 
  
                            
                                                <!-- Blog -->
                                                <section class="about-me padding-top-10">






                                                    <!-- Personal Info -->
                                                    <ul class="personal-info">
                                                        <li>
                                                            <p> <span> Name : </span>
                                                                <?php  echo strtoupper($_SESSION["nom"]).'  '.strtoupper($_SESSION["prenom"])?>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p> <span> City : </span>
                                                                <?php  echo strtoupper($_SESSION["ville"]);?>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p> <span> Email : </span>
                                                                <?php  echo strtolower($_SESSION["email"]);?> </p>
                                                        </li>
                                                        <li>
                                                            <p> <span> Phone number : </span>
                                                                <?php  echo $_SESSION["numtel"];?> </p>
                                                        </li>







                                                      <?php
                    
                        
                         $sql="select * from utilisateurs where id_user=".$_SESSION["id_user"]." limit 1;";
       
                        $mehdi=mysqli_query($link,$sql);
                        while($row=mysqli_fetch_array($mehdi)){
                            
                            if($row["ex_statut"]==0){
                            
                            echo '';
                                
                            }elseif($row["ex_statut"]==1){
                     
                                 $sql1="select * from formulaire where id_user=".$_SESSION["id_user"]." limit 1;";
       
                        $mehdi1=mysqli_query($link,$sql1);
                        while($rows=mysqli_fetch_array($mehdi1)){
                            
                    
                    
                    
                    ?>
                                                            <li>
                                                                <p> <span> Job : </span>
                                                                    <?php echo $rows["job"] ?>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Institution : </span>
                                                                    <?php echo $rows["institution"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Gender : </span>
                                                                    <?php echo $rows["institution"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Nationality : </span>
                                                                    <?php echo $rows["nationality"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Date naissance : </span>
                                                                    <?php echo $rows["datenaiss"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Address : </span>
                                                                    <?php echo $rows["address1"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> City : </span>
                                                                    <?php echo $rows["city"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Country : </span>
                                                                    <?php echo $rows["country"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> zip : </span>
                                                                    <?php echo $rows["zip"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Cin : </span>
                                                                    <?php echo $rows["cin"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Cne : </span>
                                                                    <?php echo $rows["cne"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Degree : </span>
                                                                    <?php echo $rows["degree"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Cycle : </span>
                                                                    <?php echo $rows["cycle"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Formation : </span>
                                                                    <?php echo $rows["formation"] ?> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> E-mail : </span> <a href="#."> example@example.com</a> </p>
                                                            </li>
                                                            <li>
                                                                <p> <span> Website : </span><a href="#."> example.com </a></p>
                                                            </li>
                                                    </ul>
                                                    <?php
                  
                  
                  }
                    }}
                  
                  ?>
                                                        </ul>

                                                      

                                                        
                                                        
                                                </section>
                                            </div>
                                        </div>

                                      

                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- End Content -->

            <!-- Footer -->
            <footer class="footer">
                <div class="rights">
                    <p>© Copyright 2016 MotiCV. All right reserved.</p>
                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- End Page Wrapper -->

        <!-- JavaScripts -->
        <script src="js/vendors/jquery/jquery.min.js"></script>
        <script src="js/vendors/bootstrap.min.js"></script>
        <script src="js/vendors/owl.carousel.min.js"></script>
        <script src="js/vendors/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>

        <!-- Begin Map Script-->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="js/vendors/map.js"></script>
    </body>

    <!-- Mirrored from new.uouapps.com/remoticv/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Feb 2019 09:36:47 GMT -->

    </html>
