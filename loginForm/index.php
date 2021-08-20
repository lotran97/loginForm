<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login_form.css">
</head>

<body>

<div id="container">
     <h2>Login Form</h2> <!-- test@test.fr mdp=test  ou lotran31@hotmail.fr  mdp=Azerty123 sont valides -->

    <form action="login.php" method="post" id="login_form">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="exemple@hotmail.fr" required>
        

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="pwd" placeholder="Mot de passe..." required>
        

        <input type="submit" value="Log in">
        <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Email ou mot de passe incorrect</p>";
                }
                ?>

    </form>


</div>


</body>

</html>
