<?php 
session_start();

$link=mysqli_connect("localhost" , "root" , "" , "db_etsconsult");
/*verification de la connexion*/
if(mysqli_connect_errno()){
    
    printf("echec de la connection : %s" , mysqli_connect_error());
    exit();
}


$login=$_POST["email1"];
$password=$_POST["password1"];


if(isset($_POST["email1"]) && isset($_POST["password1"]))
{


    $sql = "SELECT * FROM utilisateurs";

$run_query = mysqli_query($link,$sql);

}



while($row = mysqli_fetch_array($run_query)){
    if($row['email']==$login && $row['password']==$password){
        
    
        $_SESSION["id"] = $row["id_user"];
		$_SESSION["nom"] = $row["fname"];
	   	$_SESSION["prenom"] = $row["lname"];
	   	$_SESSION["email"] = $row["email"];
		$_SESSION["password"] = $row["password"];
		
        
        header("location:index.php");
exit();


}
    else{
        header("location:login.php");
      
    
    }}
?>