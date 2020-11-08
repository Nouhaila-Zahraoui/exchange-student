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
<title>ADMISSION FORM</title>
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
  		<h3>Admissions</h3>
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

	<div class="admission">
	   <div class="container">
			<h1>Introduce Yourself</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			
			
			
			
			<div class="col-md-6 admission_left">
				
				
				
				
				<h2 align="center">PERSONNAL INFORMATION </h2>
				<form action="insert_formulaire.php" method="post">
				
				
				<div class="input-group input-group1">
					<input class="form-control has-dark-background" name="fname" id="slider-name" placeholder="First Name" type="text" required="">
				 </div>
				 
				 
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="lname" id="slider-name" placeholder="Last Name" type="text" required="">
				 </div>
				 
				 
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="email" id="slider-name" placeholder="Email" type="text" required="">
				 </div>
				 
                      
                             <style>
                    
                                 .arrive{
                                     
                                     margin-top: 15px;
                                     
                                 }
                                 
                    
                    </style>
                                 
                                         <div class="clearfix"> </div>
                                         
                              
                              
                             
                              <div class="arrive">
                              
				                  <h4 align="center"><b>DATE ARRIVEE</b></h4>
                 				
                 				    <div class="col-md-4 form_box">
                  
                  <div class="select-block1">
                   
                    <select name="dayarr">
	                    <option value="0">Date</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                    <option value="6">6</option>
	                    <option value="7">7</option>
	                    <option value="8">8</option>
	                    <option value="9">9</option>
	                    <option value="10">10</option>
	                    <option value="11">11</option>
	                    <option value="12">12</option>
	                    <option value="13">13</option>
	                    <option value="14">14</option>
	                    <option value="15">15</option>
	                    <option value="16">16</option>
	                    <option value="17">17</option>
	                    <option value="18">18</option>
	                    <option value="19">19</option>
	                    <option value="20">20</option>
	                    <option value="21">21</option>
	                    <option value="22">22</option>
	                    <option value="23">23</option>
	                    <option value="24">24</option>
	                    <option value="25">25</option>
	                    <option value="26">26</option>
	                    <option value="27">27</option>
	                    <option value="28">28</option>
	                    <option value="29">29</option>
	                    <option value="30">30</option>
	                    <option value="31">31</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-md-4 form_box">
                   <div class="select-block1">
                    <select name="montharr">
	                    <option value="">Month</option>
	                    <option value="1">January</option>
	                    <option value="2">February</option>
	                    <option value="3">March</option>
	                    <option value="4">April</option>
	                    <option value="5">May</option>
	                    <option value="6">June</option>
	                    <option value="7">July</option>
	                    <option value="8">August</option>
	                    <option value="9">September</option>
	                    <option value="10">October</option>
	                    <option value="11">November</option>
	                    <option value="12">December</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-md-4 form_box1">
                   <div class="select-block1">
                    <select name="yeararr">
	                    <option value="">Year</option>
	                    <option value="1980">1980</option>
	                    <option value="1981">1981</option>
	                    <option value="1982">1982</option>
	                    <option value="1983">1983</option>
	                    <option value="1984">1984</option>
	                    <option value="1985">1985</option>
	                    <option value="1986">1986</option>
	                    <option value="1987">1987</option>
	                    <option value="1988">1988</option>
	                    <option value="1989">1989</option>
	                    <option value="1990">1990</option>
	                    <option value="1991">1991</option>
	                    <option value="1992">1992</option>
	                    <option value="1993">1993</option>
	                    <option value="1994">1994</option>
	                    <option value="1995">1995</option>
	                    <option value="1996">1996</option>
	                    <option value="1997">1997</option>
	                    <option value="1998">1998</option>
	                    <option value="1999">1999</option>
	                    <option value="2000">2000</option>
	                    <option value="2001">2001</option>
	                    <option value="2002">2002</option>
	                    <option value="2003">2003</option>
	                    <option value="2004">2004</option>
	                    <option value="2005">2005</option>
	                    <option value="2006">2006</option>
	                    <option value="2007">2007</option>
	                    <option value="2008">2008</option>
	                    <option value="2009">2009</option>
	                    <option value="2010">2010</option>
	                    <option value="2011">2011</option>
	                    <option value="2012">2012</option>
	                    <option value="2013">2013</option>
	                    <option value="2014">2014</option>
	                    <option value="2015">2015</option>
	                    <option value="2016">2016</option>
	                    <option value="2017">2017</option>
	                    <option value="2018">2018</option>
	                    <option value="2019">2019</option>
                    </select>
                   </div>
                  </div>
                  </div>
           
				 

				 
				 				                				   <div class="clearfix"> </div>

				 
				 
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="job" id="slider-name" placeholder="Job" type="text" required="">
				 </div>
				 
				 
				 
				 
				 
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="Inst" id="slider-name" placeholder="Institution" type="text" required="">
				 </div>
				 
				 
				 
				 
				 <div class="form-group col-md-12 form-group1">
                <label class="col-md-7 control-lable" for="sex">gender : </label>
                <div class="col-md-5">
                    <div class="radios">
                    
				        <label for="radio-01" class="label_radio" >
				            <input type="radio" name="sex" value="male" checked> Male
				        </label>
				    
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="sex" value="Female"> Female
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
				 
				 
				 
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="natio" id="slider-name" placeholder="nationality" type="text" required="">
				 </div>
				 
				 
				
            
            <div class="clearfix"> </div>
                
                 
                  
                    <div class="arrive">
             
                     <h4 align="center"><b>DATE NAISSANCE</b></h4>
				 <div class="col-md-4 form_box">
                  <div class="select-block1">
                    <select name="daynai">
	                    <option value="0">day</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                    <option value="6">6</option>
	                    <option value="7">7</option>
	                    <option value="8">8</option>
	                    <option value="9">9</option>
	                    <option value="10">10</option>
	                    <option value="11">11</option>
	                    <option value="12">12</option>
	                    <option value="13">13</option>
	                    <option value="14">14</option>
	                    <option value="15">15</option>
	                    <option value="16">16</option>
	                    <option value="17">17</option>
	                    <option value="18">18</option>
	                    <option value="19">19</option>
	                    <option value="20">20</option>
	                    <option value="21">21</option>
	                    <option value="22">22</option>
	                    <option value="23">23</option>
	                    <option value="24">24</option>
	                    <option value="25">25</option>
	                    <option value="26">26</option>
	                    <option value="27">27</option>
	                    <option value="28">28</option>
	                    <option value="29">29</option>
	                    <option value="30">30</option>
	                    <option value="31">31</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-md-4 form_box">
                   <div class="select-block1">
                    <select name="monthnai">
	                    <option value="">Month</option>
	                    <option value="1">January</option>
	                    <option value="2">February</option>
	                    <option value="3">March</option>
	                    <option value="4">April</option>
	                    <option value="5">May</option>
	                    <option value="6">June</option>
	                    <option value="7">July</option>
	                    <option value="8">August</option>
	                    <option value="9">September</option>
	                    <option value="10">October</option>
	                    <option value="11">November</option>
	                    <option value="12">December</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-md-4 form_box1">
                   <div class="select-block1">
                    <select name="yearnai">
	                    <option value="">Year</option>
	                    <option value="1980">1980</option>
	                    <option value="1981">1981</option>
	                    <option value="1982">1982</option>
	                    <option value="1983">1983</option>
	                    <option value="1984">1984</option>
	                    <option value="1985">1985</option>
	                    <option value="1986">1986</option>
	                    <option value="1987">1987</option>
	                    <option value="1988">1988</option>
	                    <option value="1989">1989</option>
	                    <option value="1990">1990</option>
	                    <option value="1991">1991</option>
	                    <option value="1992">1992</option>
	                    <option value="1993">1993</option>
	                    <option value="1994">1994</option>
	                    <option value="1995">1995</option>
	                    <option value="1996">1996</option>
	                    <option value="1997">1997</option>
	                    <option value="1998">1998</option>
	                    <option value="1999">1999</option>
	                    <option value="2000">2000</option>
	                    <option value="2001">2001</option>
	                    <option value="2002">2002</option>
	                    <option value="2003">2003</option>
	                    <option value="2004">2004</option>
	                    <option value="2005">2005</option>
	                    <option value="2006">2006</option>
	                    <option value="2007">2007</option>
	                    <option value="2008">2008</option>
	                    <option value="2009">2009</option>
	                    <option value="2010">2010</option>
	                    <option value="2011">2011</option>
	                    <option value="2012">2012</option>
	                    <option value="2013">2013</option>
	                    <option value="2014">2014</option>
	                    <option value="2015">2015</option>
	                    <option value="2016">2016</option>
	                    <option value="2017">2017</option>
	                    <option value="2018">2018</option>
	                    <option value="2019">2019</option>
                    </select>
                   </div>
                  </div>
                  </div>
								   <div class="clearfix"> </div>

             
             
             
             
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="adresse1" id="slider-name" placeholder="Address 1 " type="text" required="">
				 </div>
				 
				 
				 
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="adresse2" id="slider-name" placeholder="Address 2" type="text" required="">
				 </div>
				 
				 
				 
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="city" id="slider-name" placeholder="City " type="text" required="">
				 </div>
				 
				 
				 
				   <div class="clearfix"> </div>
               <div class="select-block1">
                <select name="country">
                    <option value="">Country</option>
                    <option value="2019">Japan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Dubai">Dubai</option>
                        <option value="Italy">Italy</option>
                        <option value="Greece">Greece</option> 
                        <option value="Iceland">Iceland</option> 
                        <option value="China">China</option> 
                        <option value="Doha">Doha</option> 
                        <option value="Irland">Irland</option> 
                        <option value="Srilanka">Srilanka</option> 
                        <option value="Russia">Russia</option> 
                        <option value="Hong">Hong Kong</option> 
                        <option value="Germany">Germany</option>
                        <option value="Canada">Canada</option>  
                        <option value="Mexico">Mexico</option> 
                        <option value="morocco">morocco</option> 
                        <option value="Nepal">Nepal</option>
                        <option value="Norway">Norway</option> 
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>  
                        <option value="Kuwait">Kuwait</option> 
                        <option value="Indonesia">Indonesia</option>  
                        <option value="Spain">Spain</option>
                        <option value="Thailand">Thailand</option>  
                        <option value="Saudi">Saudi Arabia</option> 
                        <option value="Poland">Poland</option> 
                </select>
              </div>
              
              
              
              
				  <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="zip" id="slider-name" placeholder="postal code" type="text" required="">
				 </div>
				 
				 
				 
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="tel" id="slider-name" placeholder="phone number " type="text" required="">
				 </div>
				 
				 
				 
				 
				 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="cin" id="slider-name" placeholder="Cin" type="text" required="">
				 </div>
             
             
             
             <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="cne" id="slider-name" placeholder="Cne " type="text" required="">
				 </div>
				 
				 
				 
				 
				 
				
				 
				 
				 
				 
				 <!--code php-->
				   <div class="clearfix"> </div>
               
                
                 
                  
                   
                    
                     
                      
                        
              <!--<input type="submit" value="Apply Now" class="course-submit">
          -->
    
           
           
</div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="col-md-6 admission_right">
              <h3 align="center">EXCHANGE BIG FILE </h3>
         
	             
	             
	             <div class="select-block1">
                <select name="carriere">
                        <option value="null">carriere</option>
                        <option value="stage">STAGE</option>
                        <option value="etude">ETUDE</option>
                        
                </select>
              </div>
                
                
                <div class="select-block1">
                <select name="field">
                        <option value="null">field</option>
                        
                <?php
                     $stmt="select * from filiere order by id_fil;";

                    $result=mysqli_query($link,$stmt);
                    
                    
                   while($row=mysqli_fetch_array($result)){
                        
                       echo ' <option value="'.$row['id_fil'].'">'.utf8_encode($row['nom_fil']).'</option>';
                    }
                    ?>
                    
                </select>
                
              </div>
              
              
              
             <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="sought" id="slider-name" placeholder="Degree Sought" type="text" required="">
				 </div>
             
             
             
             
             
             
             
              <div class="clearfix"> </div>
               <div class="select-block1">
                <select name="cycle">
                        <option value="null">CYCLE </option>
                        <option value="ingenieure">ingenieure</option>
                        <option value="master_specialise">master specialisé</option>
                        <option value="licence_professionnel">licence professionnel</option>
                        
                </select>
              </div>
              
              
              
               <div class="clearfix"> </div>
               <div class="select-block1">
                <select name="formation">
                        <option value="null">FORMATION</option>
                        <option value="ingenieur_etat">ingenieur d'etat</option>
                        <option value="master">master</option>
                        <option value="licence_professionnel">licence professionnel</option>
                        <option value="licence_fondamental">licence fondamental</option>
                        
                </select>
              </div>
             
             
               
               
             
             
            
             
                
                
                
                 <div class="input-group input-group1">
					<input class="form-control has-dark-background" name="degree" id="slider-name" placeholder="Highest degree" type="text" required="">
				 </div>
               
               
               
               
               
               <style>
                   .acti{
                       
                      margin-top: 15px;

padding: 17px;

border: 7px solid #e6e6e6;
                       
                   }
                   
                   
                
                
                </style>
               
               
               
               
               
               
               
                <div class="clearfix"> </div>
                              <div class="acti">
				                  <h4 align="center"><b>LES ACTIVITEES</b></h4>
    
               
                 <div class="select-block1">
                <select name="act">
                        <option value="trip">TRIP</option>
                        <option value="promenade">PROMENADE</option>
                        
                </select>
              </div>
                 
                 
                
                <div class="input-group input-group1">
	                <input class="form-control has-dark-background" name="act1" id="slider-name" placeholder="activité 1" type="text" required="">
	             </div>
	             
	             
	             
	            
	             <div class="input-group input-group1">
	                <input class="form-control has-dark-background" name="act2" id="slider-name" placeholder="activité 2" type="text" required="">
	             </div>
	             
	             
	             <div class="input-group input-group1">
	                <input class="form-control has-dark-background" name="act3" id="slider-name" placeholder="activité 3" type="text" required="">
	             </div>
	             
	             
	              
              
              
              
              <!--code php-->
              
               <div class="select-block1">
                <select name="lieu">
                        <option value="null">lieu</option>
                        
                        
                        
                         <?php
                     $stmt="select * from activite where type='trip';";

                    $result=mysqli_query($link,$stmt);
                  
                    
                   while($row=mysqli_fetch_array($result)){
                        
                       echo ' <option value="'.$row['id_activite'].'">'.utf8_encode($row['ville']).'</option>';
                    }
                    ?>
                        
                </select>
              </div>
              
        
               <!--code php-->

              
	             
	             
	             
	             </div>
	             
                  
         <div class="form-field">
			   <div class="col-md-7 photo"><label>Upload Photo <em>*</em> :&nbsp;&nbsp;&nbsp;</label></div>
			   <div class="col-md-5"><input name="photo" id="cphoto" type="file" class="file upload_1" onchange="AlertFilesize();"></div>
			   <div class="clearfix"> </div>
             </div>
		    
		    
		    
		    
		    <div class="form-field">
			   <div class="col-md-7 photo"><label>Upload resume(cin,degree,student card)<em>*</em> :&nbsp;&nbsp;&nbsp;</label></div>
			   <div class="col-md-5"><input name="resume" id="cphoto" type="file" class="file upload_1" onchange="AlertFilesize();"></div>
			   <div class="clearfix"> </div>
             </div>                        
        
                      
                                    
                      <input type="submit" value="Apply Now" class="course-submit" name="envoyer" ></br>		                            
             </form>	
	   	   </div>
	   	  <div class="clearfix"> </div>
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
	   	  
		  <!---728x90

<table class="timetable">
							    <thead>
									<tr>
										<th>Examination <br>Passed</th>	<th>Specialization</th>
										<th>School/Board/University</th>  <th>School/Institution/College</th>
										<th>Year of<br> Passing</th> <th>Class/Grade <br>Percentage</th> <th>Certificate <br>Attachment</th>
								    </tr>
								</thead>
								<tbody>
								<tr>
									<td>Grade IK I</td>
									<td rowspan="15" style="/* background-color: #F2F2F2; */"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
								    <td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
								<tr>
									<td>Grade IK II </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
							    </tr>
								<tr>
									<td>Grade IK III </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
								<tr>
									<td>Grade I </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>Grade II </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>Grade III </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>Grade IV </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>Grade V </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>Grade VI </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>Grade VII </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>Grade VIII </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
								    <td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>Grade IX </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>Grade X </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>SSLC / 10  Std </td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>HSc / 12  Std / Equivalent</td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
								</tr>
							    <tr>
									<td>Degree / Equivalent</td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
							    </tr>
							    <tr>
									<td>Others (Specify)</td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input name="name_1" type="text" class="no-box"></td>
									<td><input type="file" name="others_attachment" id="others_attachment_1" class="no-box" style="width:90px"></td>
							    </tr>
						   </tbody>
			</table>
			<ul class="items_list"><h3>Examination Passed</h3>
		   		<li>Grade IK I</li>
		   		<li>Grade IK II </li>
		   		<li>Grade IK III </li>
		   		<li>Grade I</li>
		   		<li>Grade II</li>
		   		<li>Grade III</li>
		   		<li>Grade IV</li>
		   		<li>Grade V</li>
		   		<li>Grade VI</li>
		   		<li>Grade VII</li>
		   		<li>Grade VIII</li>
		   		<li>Grade IX</li>
		   		<li>SSLC / 10  Std </li>
		   		<li>HSc / 12  Std / Equivalent</li>
		   		<li>Degree / Equivalent</li>
		   		<li>Others (Specify)</li>
			</ul>
			<ul class="items_list1"><h3>Specialization</h3>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		   		<li>-</li>
		        <li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
			</ul>
			<div class="clearfix"> </div>
			<ul class="items_list1"><h3>School/Board/University</h3>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
			</ul>
			<ul class="items_list1"><h3>School/Institution/College</h3>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
			</ul>
			<div class="clearfix"> </div>
			<ul class="items_list1"><h3>Year of Passing</h3>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
		   		<li><input name="name_1" type="text" class="no-box1"></li>
			</ul>
			<ul class="items_list1"><h3>Certificate Attachment</h3>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   		<li><p><input type="file" name="others_attachment" id="others_attachment_1" class="no-box1"></p></li>
		   </ul>--->
		   <div class="clearfix"> </div>
	   </div>
	</div>
	<!---728x90--->

     <?php


                include 'includes/footer.php';
?>
</body>
</html>	