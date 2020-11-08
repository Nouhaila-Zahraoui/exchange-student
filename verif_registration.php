<?php 
session_start();
/*connection*/
$link=mysqli_connect("localhost" , "root" , "" , "db_exchange");
/*verification de la connexion*/
if(mysqli_connect_errno()){   
    printf("echec de la connection : %s" , mysqli_connect_error());
    exit();
}

$nom=$_POST["fname"];
$prenom=$_POST["lname"];
$ville=$_POST["city"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$password=$_POST["password"];
$cpassword=$_POST["confPassword"];


    
$name = "/^[a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

    
    
    
if(empty($nom) || empty($prenom) || empty($tel) || empty($email) ||  empty($password) || empty($cpassword) || empty($ville))
{
		
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	}  
    
    else {
		if(!preg_match($name,$nom)){
		echo "
			
				<h1 align=\"center\">le". $nom ."invalid!!!</h1>";
		exit();
	}
	if(!preg_match($name,$prenom)){
		echo "
			<h1 align=\"center\">le". $prenom ."invalid!!!</h1>";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo "
			<h1 align=\"center\">le". $email ."invalid!!!</h1>";
		exit();
	}
	if(strlen($password) < 5 ){
		echo "<h1>le mot de passe est faible</h1>";
		exit();
	} 
		/*echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();*/
	}
    if($password != $cpassword){
        
		echo "<h1>confirmation password est incorrecte</h1>";
	}
    
    if(!preg_match($number,$tel)){
		echo "
				<h1 align=center>le numero de telephone  $tel est incorrect </h2>";
		exit();
	}
    
    if(!(strlen($tel) == 10)){
		echo "<h1 align=center>le numero de telephone  $tel est incorrect </h2>";
		exit();
	}
    
    $sql = "SELECT id_user FROM utilisateurs WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($link,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "<h1>l'adresse mail existe deja !!!</h1>";
		exit();
	} 
    
    else {
		$sql = "INSERT INTO `utilisateurs` (`id_user`,`fname`, `lname` ,`city`, `email` , `num_tel`, `password`,`confpass`)
        
        VALUES (NULL,'$nom', '$prenom', '$ville' ,'$email','$tel','$password','$cpassword')";
		
        $run_query = mysqli_query($link,$sql);
		
        $_SESSION["userid"] = mysqli_insert_id($link);
		$_SESSION["nom"] = $nom;
	   	$_SESSION["prenom"] = $prenom;
	   	$_SESSION["ville"] = $ville;
	   	$_SESSION["email"] = $email;
	   	$_SESSION["tel"] = $tel;
		$_SESSION["password"] = $password;
		$_SESSION["confpassword"] = $cpassword;
        
	/*	$ip_add = getenv("REMOTE_ADDR");
		$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";*/
		
        /*if(mysqli_query($link,$sql)){
			
            echo "register_success";
			exit();
		}*/
        if($sql){
   
   /*header("location:creationcompte.html");*/
        
        header("location:login.php");
        }
else{
      die("<h2 align=center>erreur</h2>" . mysqli_error($link));}

}
	
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /*la requete*/
/*$query="INSERT INTO utilisateurs(nom,prenom,email,password,cpassword,tel,date)
VALUES('". $nom . "'  ,   '" . $prenom . "'  ,  '" . $email . "'   ,  '" . $password . "'  ,   '" .$cpassword . "'  ,   '" . $tel. "'   ,   '" . $date . "');";
    
$result=mysqli_query($link , $query);

if($result){
   
   header("location:creationcompte.html");}
else{
      die("<h2 align=center>erreur</h2>" . mysqli_error($link));}

}*/

/*fermeture de la connexion*/

mysqli_close($link);



?>