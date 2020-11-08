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
$email=$_POST["email"];
$datearr=$_POST["dayarr"].'/'.$_POST["montharr"].'/'.$_POST["yeararr"];
$job=$_POST["job"];
$Inst=$_POST["Inst"];
$sex=$_POST["sex"];
$natio=$_POST["natio"];
$datenaiss=$_POST["daynai"].'/'.$_POST["monthnai"].'/'.$_POST["yearnai"];
$adresse1=$_POST["adresse1"];
$adresse2=$_POST["adresse2"];
$city=$_POST["city"];
$country=$_POST["country"];
$zip=$_POST["zip"];
$tel=$_POST["tel"];
$cin=$_POST["cin"];
$cne=$_POST["cne"];
$carriere=$_POST["carriere"];
$field=$_POST["field"];
$sought=$_POST["sought"];
$cycle=$_POST["cycle"];
$formation=$_POST["formation"];
$degree=$_POST["degree"];
$act_type=$_POST["act"];
$act1=$_POST["act1"];
$act2=$_POST["act2"];
$act3=$_POST["act3"];
$lieu=$_POST["lieu"];
$photo=$_POST["photo"];
$resume=$_POST["resume"];

$id_user=$_SESSION["id_user"];
    
$name = "/^[a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

    
    $sql = "SELECT id_user FROM formulaire WHERE id_user = '$id_user' LIMIT 1" ;
	$check_query = mysqli_query($link,$sql);
	$count_id = mysqli_num_rows($check_query);
	if($count_id > 1){
		echo "<h1>votre condidature est deja poster !!!</h1>";
		exit();
	} 
    
    else {
		$sql1 = "INSERT INTO `formulaire`(`id_form`,`fname`,`lname`,`email`,`job`,`institution`,`gender`,`nationality`,`datenaiss`,`address1`,`address2`,`city`,`country`,`zip`,`tel`,`cin`,`cne`,`degree`,`id_fil`,`degsought`,`cycle`,`formation`,`photo`,`resume`,`id_user`,`date_arr`,`carriere`,`type_act`,`act1`,`act2`,`act3`,`lieu`)
        
        VALUES(NULL,'$nom','$prenom','$email','$job','$Inst','$sex','$natio','$datenaiss','$adresse1','$adresse2','$city','$country','$zip','$tel','$cin','$cne','$degree','$field','$sought','$cycle','$formation','$photo','$resume','$id_user','$datearr','$carriere','$act_type','$act1','$act2','$act3','$lieu')";
		
        $run_query = mysqli_query($link,$sql1);
		
       
        
	/*	$ip_add = getenv("REMOTE_ADDR");
		$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";*/
		
        /*if(mysqli_query($link,$sql)){
			
            echo "register_success";
			exit();
		}*/
        if($sql1){
   
   /*header("location:creationcompte.html");*/
           $sql2="update utilisateurs set ex_statut=1 where id_user=".$_SESSION["id_user"].";"; 
                $run_query2 = mysqli_query($link,$sql2);
            if($sql2){

        header("location:success.php");
        }}
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