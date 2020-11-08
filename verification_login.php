<?php
session_start();
include 'connexion.php';



$email=$_POST["email"];
$pass=$_POST["password"];




if(isset($_POST["email"])  && isset($_POST["password"])){
   
       $sql="select * from utilisateurs";
       
       $mehdi=mysqli_query($link,$sql);
   
}
   while($meriem=mysqli_fetch_array($mehdi)){
       if($meriem['email'] == $email && $meriem['password'] == $pass){
       
           $_SESSION["id_user"] = $meriem["id_user"];
		   $_SESSION["nom"] = $meriem["fname"];
	   	   $_SESSION["prenom"] = $meriem["lname"];
	       $_SESSION["ville"] = $meriem["city"];
           $_SESSION["email"] = $meriem["email"];
           $_SESSION["numtel"] = $meriem["num_tel"];
		   $_SESSION["password"] = $meriem["password"];
           $_SESSION["confpassword"] = $meriem["confpass"];
           $_SESSION["type"]=$meriem["type"];
           $_SESSION["statut"]=$meriem["reg_statut"];
           $_SESSION["exchange"]=$meriem["ex_statut"];
		
           
           
       header('location:compte_user/index.php');
           exit();
       }else{ 
           
           if($meriem['email'] != $email || $meriem['password'] != $pass){
            
               header('location:login.php');
            
           }
       }
   
   
   }


   

?>
   
   
       
   
   
   

