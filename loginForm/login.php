<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password'])){

    $db_username = 'root';
    $db_password = '';
    $db_name     = 'login';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    
    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($email !== "" && $password !== ""){

        $requete = "SELECT count(*) FROM users where username = '".$email."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        
        if($count!=0){
           $_SESSION['email'] = $email;
           header('Location: espace_perso.php');
        }
        else{
           header('Location: index.php?erreur=1');
        }
    }
}
else{
   header('Location: index.php?erreur=2');
}

mysqli_close($db);
?>