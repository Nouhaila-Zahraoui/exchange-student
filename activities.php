<?php
session_start();
                include 'includes/header.php';

if(isset($_SESSION['email'])) {
  
if($_SESSION['type'] == "admin") { 
    
    header("location:espace_admin/index.php"); 

}

}
include 'connexion.php';

?>









    <?php   
 
 $python='';
if(isset($_GET['python'])){
   
      
    
    $python=$_GET['python'];
        
        
       
}else{
    
    $python='manage';
}
    


      
      
      
      
      
      
      
      
    
  if($python=='manage'){ 
        
       
      ?>






    <!-- banner -->
    <div class="courses_banner">
        <div class="container">
            <h3>ACTIVITIES</h3>
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
            </p>
            <div class="breadcrumb1">
                <ul>
                    <li class="icon6"><a href="index.php">Home</a></li>
                    <li class="current-page">activitie</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!---728x90--->
<div class="container">
    </br></br><h2 align="center"><strong>What previous adventurers had to say...</strong></h2>
    
<p></br><h4 align="center">Morocco has been one of the most interesting places I have ever visited. Mohammed, our guide, has provided all we nedeed during ten days. He is a very good driver, excelent english speaking, extensive knowledge. Profesional work from the very beggining, taking care of a mother with her three young daughters.</br>

Local guides and our itinerary was carefully selected. Begining from Marakesh, towards Ouarzazate, Atlas Mountains, spending one night at the dessert, continuing to Fez, Meknes, finally arriving to Chefchaouen. One of the most colorfull, village on our trip.
I apreciate Morrocan people for the positive attitude towards tourisim. For Trips Morocco tours, i wish you my best, hopping to continue your succes.</br></br>Mohammed arranged a 12-day trip around Morocco for four of us. Everything was perfect; but the highlight of the trip was Mohammed himself.</br>
Not only does he speak English fluently, but he truly knows and understands his country.</br> We had discussions about history and religion that provided an extra dimension to our trip. When we wanted to make minor changes to the itinerary, he was willing and able to accommodate us; if there was a problem, he took care of it. He arranged for local guides to give us deeper insight to the medinas of Fez and Marrakech.</br></br>

We had a wonderful experience on the desert. We thoroughly enjoyed Morocco, but more than anything we enjoyed Mohammed. He is trying to build a company around personalized service and he succeeds.
</h4></p>
    
    
    
    
</div>



    <style>
        .col-xs-1,
        .col-sm-1,
        .col-md-1,
        .col-lg-1,
        .col-xs-2,
        .col-sm-2,
        .col-md-2,
        .col-lg-2,
        .col-xs-3,
        .col-sm-3,
        .col-md-3,
        .col-lg-3,
        .col-xs-4,
        .col-sm-4,
        .col-md-4,
        .col-lg-4,
        .col-xs-5,
        .col-sm-5,
        .col-md-5,
        .col-lg-5,
        .col-xs-6,
        .col-sm-6,
        .col-md-6,
        .col-lg-6,
        .col-xs-7,
        .col-sm-7,
        .col-md-7,
        .col-lg-7,
        .col-xs-8,
        .col-sm-8,
        .col-md-8,
        .col-lg-8,
        .col-xs-9,
        .col-sm-9,
        .col-md-9,
        .col-lg-9,
        .col-xs-10,
        .col-sm-10,
        .col-md-10,
        .col-lg-10,
        .col-xs-11,
        .col-sm-11,
        .col-md-11,
        .col-lg-11,
        .col-xs-12,
        .col-sm-12,
        .col-md-12,
        .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
            margin-bottom: 23px;

        }



        figure.team_member {
            position: relative;
            overflow: hidden;
            color: #fff;
            border: 7px double #8b9377;
            padding: 0px;
        }


        .center {


            align-content: center;
        }

    </style>





    <div class="center">
        <div class="admission">
            <div class="container">
              
                <!-------------------------------trip-------------------------------->

               <div class="col-md-4 faculty_grid">
                    <figure class="team_member">
                        <img src="images/activite/TRIP.jpg" class="img-responsive wp-post-image" alt="" />
                        <div></div>
                        <figcaption>
                            <h3 class="person-title"><a href="activities.php?python=affiche_trip"><strong>TRIP</strong></a></h3>
                            <p align="center"></BR></br> We organise trips and tours all around Morocco according to time and interests.the tour includes transportation , accommodation and diffetrent plans</a>
                            </p>

                            <p align="right"><a href="activities.php?python=affiche_trip"><span><i class="fa fa-chain chain_1"></i> MORE DETAILS</span></a></p>

                        </figcaption>
                    </figure>
                </div>

               
               
               
               <!--------------------------------promenade------------------------------->
               
                <div class="col-md-4 faculty_grid">
                     <figure class="team_member">
                        <img src="images/activite/tours.jpg" class="img-responsive wp-post-image" alt="" />
                        <div></div>
                        <figcaption>
                            <h3 class="person-title"><a href="activities.php?python=affiche_trip"><strong>TOURS</strong></a></h3>
                            <p align="center"></BR></br> Our Custom Tours take you on wonderful journeys where you experience the rich southern and the imperial cities with knowledgeable local guides with more historical information</a>
                            </p>
                            <p align="right"><a href="activities.php?python=affiche_prom"><span><i class="fa fa-chain chain_1"></i> MORE DETAILS</span></a></p>

                        </figcaption>
                    </figure>
                </div>


                
                
                    <!------------------------------other--------------------------------->

                <div class="col-md-4 faculty_grid">
                    <figure class="team_member">
                        <img src="images/activite/other_act.jpg" class="img-responsive wp-post-image" alt="" />
                        <div></div>
                        <figcaption>
                            <h3 class="person-title"><a href="activities.php?python=affiche_trip"><strong>OTHER ACTIVITIES</strong></a></h3>
                            <p align="center"></BR></br> Our Custom Tours take you on wonderful journeys where you experience the rich southern and the imperial cities with knowledgeable local guides with more historical information</a>
                            </p>

                            <p align="right"><a href="activities.php?python=affiche_autre"><span><i class="fa fa-chain chain_1"></i> MORE DETAILS</span></a></p>

                        </figcaption>
                    </figure>
            </div>
                               
                     <!--------------------------------------------------------------->

            
            
            </div>
        </div>
    </div>
    <!---728x90--->


    <?php  
    
    
    }elseif($python=='affiche_trip'){ 
        
       
      ?>






    <!-- banner -->
    <div class="courses_banner">
        <div class="container">
            <h3>TRIP</h3>
            <p class="description">
                We organise trips and tours all around Morocco according to time and interests.the tour includes transportation , accommodation and diffetrent plans and Morocco according to time and interests
            </p>
            <div class="breadcrumb1">
                <ul>
                    <li class="icon6"><a href="index.php">Home</a></li>
                    <li class="current-page">Trip</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!---728x90--->



    <style>
        .col-xs-1,
        .col-sm-1,
        .col-md-1,
        .col-lg-1,
        .col-xs-2,
        .col-sm-2,
        .col-md-2,
        .col-lg-2,
        .col-xs-3,
        .col-sm-3,
        .col-md-3,
        .col-lg-3,
        .col-xs-4,
        .col-sm-4,
        .col-md-4,
        .col-lg-4,
        .col-xs-5,
        .col-sm-5,
        .col-md-5,
        .col-lg-5,
        .col-xs-6,
        .col-sm-6,
        .col-md-6,
        .col-lg-6,
        .col-xs-7,
        .col-sm-7,
        .col-md-7,
        .col-lg-7,
        .col-xs-8,
        .col-sm-8,
        .col-md-8,
        .col-lg-8,
        .col-xs-9,
        .col-sm-9,
        .col-md-9,
        .col-lg-9,
        .col-xs-10,
        .col-sm-10,
        .col-md-10,
        .col-lg-10,
        .col-xs-11,
        .col-sm-11,
        .col-md-11,
        .col-lg-11,
        .col-xs-12,
        .col-sm-12,
        .col-md-12,
        .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
            margin-bottom: 23px;

        }



        figure.team_member {
            position: relative;
            overflow: hidden;
            color: #fff;
            border: 7px double #8b9377;
            padding: 0px;
        }

    </style>






    <div class="admission">
        <div class="container">
            <div class="faculty_top">
                <!---ligne  1--->
                 <div class="clearfix"> </div>



                <!---fin ligne  2--->

            </div>



            <?php    
      
                                 
                                 $stmt="select * from activite where type='trip';";

                $result=mysqli_query($link,$stmt);
                      

                
      while($row=mysqli_fetch_array($result)){
            
            
          
          
          echo '<div class="col-md-4 faculty_grid">
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  	<figure class="team_member">
	   	  		<img src="images/activite/category/'.$row['photo'].'" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="event_single.html"> '.utf8_encode($row['libelle']).'  à '.utf8_encode($row['ville']).'</a></h3>
	   	  			<p><i class="fa fa-map-marker">  </i> '.utf8_encode($row['ville']).'</a></p>
	   	  			<p><i class="fa fa-home">   </i>   '.utf8_encode($row['id_acc']).'</a></p>
	   	  			<p><a href="mailto%40example.html"><i class="fa fa-list-alt">   </i>  '.utf8_encode($row['address']).'</a></p>
	   	  			<p align="right"><a href="faculty.php?python=edit&userid='.$row['id_activite'].'"><span><i class="fa fa-chain chain_1"></i> MORE DETAILS</span></a></p>
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
	   	  	 
	   	  	 
	   	  	 
	   	  	 
	   	  </div>';
	   	  	   	  
          
          
        
                  ?>






            <?php }?>

            <!--<ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
            </ul>-->
        </div>
    </div>
    <!---728x90--->



    <?php  
    
    
    }elseif($python=='affiche_prom'){ 
        
       
      ?>






    <!-- banner -->
    <div class="courses_banner">
        <div class="container">
            <h3>TOURS</h3>
            <p class="description">
                Our Custom Tours take you on wonderful journeys where you experience the rich southern and the imperial cities with knowledgeable local guides with more historical information and experiences
            </p>
            <div class="breadcrumb1">
                <ul>
                    <li class="icon6"><a href="index.php">Home</a></li>
                    <li class="current-page">tours</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!---728x90--->



    <style>
        .col-xs-1,
        .col-sm-1,
        .col-md-1,
        .col-lg-1,
        .col-xs-2,
        .col-sm-2,
        .col-md-2,
        .col-lg-2,
        .col-xs-3,
        .col-sm-3,
        .col-md-3,
        .col-lg-3,
        .col-xs-4,
        .col-sm-4,
        .col-md-4,
        .col-lg-4,
        .col-xs-5,
        .col-sm-5,
        .col-md-5,
        .col-lg-5,
        .col-xs-6,
        .col-sm-6,
        .col-md-6,
        .col-lg-6,
        .col-xs-7,
        .col-sm-7,
        .col-md-7,
        .col-lg-7,
        .col-xs-8,
        .col-sm-8,
        .col-md-8,
        .col-lg-8,
        .col-xs-9,
        .col-sm-9,
        .col-md-9,
        .col-lg-9,
        .col-xs-10,
        .col-sm-10,
        .col-md-10,
        .col-lg-10,
        .col-xs-11,
        .col-sm-11,
        .col-md-11,
        .col-lg-11,
        .col-xs-12,
        .col-sm-12,
        .col-md-12,
        .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
            margin-bottom: 23px;

        }



        figure.team_member {
            position: relative;
            overflow: hidden;
            color: #fff;
            border: 7px double #8b9377;
            padding: 0px;
        }

    </style>






    <div class="admission">
        <div class="container">
            <div class="faculty_top">
                <!---ligne  1--->
                 <div class="clearfix"> </div>



                <!---fin ligne  2--->

            </div>



            <?php    
      
                                 
                                 $stmt="select * from activite where type='promenade';";

                $result=mysqli_query($link,$stmt);
                      

                
      while($row=mysqli_fetch_array($result)){
            
            
          
          
          echo '<div class="col-md-4 faculty_grid">
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  	<figure class="team_member">
	   	  		<img src="images/activite/category/'.$row['photo'].'" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="event_single.html"> '.utf8_encode($row['libelle']).'  à '.utf8_encode($row['ville']).'</a></h3>
	   	  			<p><i class="fa fa-map-marker">  </i> '.utf8_encode($row['ville']).'</a></p>
	   	  			<p><i class="fa fa-home">   </i>   '.utf8_encode($row['id_acc']).'</a></p>
	   	  			<p><a href="mailto%40example.html"><i class="fa fa-list-alt">   </i>  '.utf8_encode($row['address']).'</a></p>
	   	  			<p align="right"><a href="faculty.php?python=edit&userid='.$row['id_activite'].'"><span><i class="fa fa-chain chain_1"></i> MORE DETAILS</span></a></p>
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
	   	  	 
	   	  	 
	   	  	 
	   	  	 
	   	  </div>';
	   	  	   	  
          
          
        
                  ?>






            <?php }?>

            <!--<ul class="pagination">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
            </ul>-->
        </div>
    </div>
    <!---728x90--->



    <?php  
    
    
    
    }elseif($python=='affiche_autre'){ 
        
       
      ?>






    <!-- banner -->
    <div class="courses_banner">
        <div class="container">
            <h3>other activities</h3>
            <p class="description">
                Our Custom Tours take you on wonderful journeys where you experience the rich southern and the imperial cities with knowledgeable local guides with more historical information.
            </p>
            <div class="breadcrumb1">
                <ul>
                    <li class="icon6"><a href="index.php">Home</a></li>
                    <li class="current-page">Faculty</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!---728x90--->



    <style>
        .col-xs-1,
        .col-sm-1,
        .col-md-1,
        .col-lg-1,
        .col-xs-2,
        .col-sm-2,
        .col-md-2,
        .col-lg-2,
        .col-xs-3,
        .col-sm-3,
        .col-md-3,
        .col-lg-3,
        .col-xs-4,
        .col-sm-4,
        .col-md-4,
        .col-lg-4,
        .col-xs-5,
        .col-sm-5,
        .col-md-5,
        .col-lg-5,
        .col-xs-6,
        .col-sm-6,
        .col-md-6,
        .col-lg-6,
        .col-xs-7,
        .col-sm-7,
        .col-md-7,
        .col-lg-7,
        .col-xs-8,
        .col-sm-8,
        .col-md-8,
        .col-lg-8,
        .col-xs-9,
        .col-sm-9,
        .col-md-9,
        .col-lg-9,
        .col-xs-10,
        .col-sm-10,
        .col-md-10,
        .col-lg-10,
        .col-xs-11,
        .col-sm-11,
        .col-md-11,
        .col-lg-11,
        .col-xs-12,
        .col-sm-12,
        .col-md-12,
        .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
            margin-bottom: 23px;

        }



        figure.team_member {
            position: relative;
            overflow: hidden;
            color: #fff;
            border: 7px double #8b9377;
            padding: 0px;
        }

    </style>






    <div class="admission">
        <div class="container">
            <div class="faculty_top">
                <!---ligne  1--->







                <div class="clearfix"> </div>



                <!---fin ligne  2--->

            </div>



            <?php    
      
                                 
                                 $stmt="select * from activite where type='others' or type='musique';";

                $result=mysqli_query($link,$stmt);
                      

                
      while($row=mysqli_fetch_array($result)){
            
            
          
          
          echo '<div class="col-md-4 faculty_grid">
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  	<figure class="team_member">
	   	  		<img src="images/activite/category/'.$row['photo'].'" class="img-responsive wp-post-image" alt=""/>
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="event_single.html"> '.utf8_encode($row['libelle']).'  à '.utf8_encode($row['ville']).'</a></h3>
	   	  			<p><i class="fa fa-map-marker">  </i> '.utf8_encode($row['ville']).'</a></p>
	   	  			<p><i class="fa fa-home">   </i>   '.utf8_encode($row['id_acc']).'</a></p>
	   	  			<p><a href="mailto%40example.html"><i class="fa fa-list-alt">   </i>  '.utf8_encode($row['address']).'</a></p>
	   	  			<p align="right"><a href="faculty.php?python=edit&userid='.$row['id_activite'].'"><span><i class="fa fa-chain chain_1"></i> MORE DETAILS</span></a></p>
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
	   	  	 
	   	  	 
	   	  	 
	   	  </div>';
	   	  	   	  
          
          
        
                  ?>






            <?php }?>

           
        </div>
    </div>
    <!---728x90--->



    <?php  
    
    
    }elseif($python=='affichage_act'){
      
      ?>
    <style>
        .img-responsive,
        .thumbnail>img,
        .thumbnail a>img,
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            display: block;
            max-width: 100%;
            height: auto;
            border: 8px ridge brown;
        }

    </style>










    <?php
      
     
      
        $userid=isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']):0; 
      
        $query="SELECT * FROM etablissement where id_etab='$userid';";

        $result=mysqli_query($link,$query);
      
      while($row=mysqli_fetch_array($result)){ ?>


        <div class="courses_banner">
            <div class="container">
                <h3>
                    <?php echo utf8_encode($row['nom']) ; ?>
                </h3>
                <p class="description">
                    <?php echo utf8_encode($row['desc']) ; ?>
                </p>
                <div class="breadcrumb1">
                    <ul>
                        <li class="icon6"><a href="index.php">Home</a></li>
                        <li class="current-page">Blog</li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="features">
            <div class="container">
                <h1>details about
                    <?php echo '  '.utf8_encode($row['nom']) ; ?>
                </h1>
                <div class="blog_box1">

                    <p align="center"><img src="images/etablissement/desc/<?php echo utf8_encode($row['photo']) ; ?>" class="img-responsive" alt="" /></a>
                    </p>

                    <h1>DESCRIPTION</h1>
                    <p>
                        <h3 align="center">
                            <?php echo utf8_encode($row['desc']) ; ?> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.?"</h3>
                    </p>
                </div>




                <div class="features">
                    <div class="container">
                        <h1>localisation of
                            <?php echo '  '.utf8_encode($row['nom']) ; ?>
                        </h1>
                        <div class="blog_box1">

                            <p align="center"><img src="images/etablissement/maps/<?php echo utf8_encode($row['photo']) ; ?>" class="img-responsive" alt="" /></a>
                            </p>


                            <h1>DETAILS</h1>
                            <div class="service_box1">
                                <div class="col-md-6">
                                    <div class="service_1">
                                        <div class="service_1-left">
                                            <span class="icon_5"><i class="fa fa-envelope"> </i></span>
                                        </div>
                                        <div class="service_1-right">
                                            <h5><a href="#">EMAIL</a></h5>
                                            <p>
                                                <?php echo strtoupper(utf8_encode($row['email'])); ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service_1">
                                        <div class="service_1-left">
                                            <span class="icon_5"><i class="fa fa-phone"> </i></span>
                                        </div>
                                        <div class="service_1-right">
                                            <h5><a href="#">PHONE NUMBER</a></h5>
                                            <p>
                                                <?php echo strtoupper(utf8_encode($row['tel'])); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="service_box1">
                                <div class="col-md-6">
                                    <div class="service_1">
                                        <div class="service_1-left">
                                            <span class="icon_5"><i class="fa fa-list-alt"> </i></span>
                                        </div>
                                        <div class="service_1-right">
                                            <h5><a href="#">ADDRESS</a></h5>
                                            <p>
                                                <?php echo strtoupper(utf8_encode($row['address'])); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service_1">
                                        <div class="service_1-left">
                                            <span class="icon_5"><i class="fa fa-globe"> </i></span>
                                        </div>
                                        <div class="service_1-right">
                                            <h5><a href="#">WEBSITE.</a></h5>
                                            <p>
                                                <?php echo strtoupper(utf8_encode($row['website'])); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <style>
            span.icon_5 {
                float: left;
                display: block;
                margin: 5px 30px 0 0;
                border-radius: 50%;
                width: 74px;
                height: 74px;
                border: none;
                background: #2f374c;
                text-align: center;
                font-size: 20px;
                line-height: 70px;
                color: #fff;
                position: relative;
                z-index: 10;
                transition: all 0.3s ease 0s;
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                transition: all 0.3s;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                top: -14px;
                right: -20px;
            }

        </style>


        <?php 
                
                
    
                                             
                                             
            }
      
  }
  
 

       
       
       
      

?>








        <?php


                include 'includes/footer.php';
?>
            </body>





            </html>
