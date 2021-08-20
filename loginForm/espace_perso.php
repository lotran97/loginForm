<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Perso</title>
    <link rel="stylesheet" href="login_form.css">
</head>

<body>

<a href='espace_perso.php?deconnexion=true'><span>Déconnexion</span></a>

<?php
    session_start();

    if(isset($_GET['deconnexion'])){ 

        if($_GET['deconnexion']==true){  

            session_unset();
            header("location:index.php");
        }
    }else if($_SESSION['email'] !== ""){

        $user = $_SESSION['email'];
    
        echo "<br>Bonjour $user, vous êtes connecté";
    }
?>

</body>
</html>