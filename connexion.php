<?php
/*connection*/
$link=mysqli_connect("localhost" , "root" , "" , "db_exchange");
/*verification de la connexion*/
if(mysqli_connect_errno()){
    
    printf("echec de la connection : %s" , mysqli_connect_error());
    exit();
}
?>
