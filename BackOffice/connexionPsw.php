<?php

session_start();
require_once "../php/connection.php";

$sqlPersonne=$connection ->prepare('SELECT * FROM administrateur WHERE mail = :mail;');
$sqlPersonne->bindParam(":mail", $_REQUEST['mail']);

$sqlPersonne->execute();

//Vérifier si l'email existe ou non dans la base de donnée
if($sqlPersonne->rowCount() == 0){
    echo"email faux";
    //header('Location: index.php');
}else{


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleForm.css">

    <title>BackOffice</title>
</head>
<body>
    <div class="box">
        <div>
        <h2 class="center">Connexion Administrateur</h2>

        </div>
        <form action="verifAdmin.php" method="get">
            <div class="container">
            <div>
                <label for="">Mot de passe</label><br>
                <input class="input" id="psw" name="psw" type="password" placeholder="mot de passe" onchange="verifUsername()"><br/>
            </div>

            <input type="text" name="mail" value="<?php echo $_REQUEST['mail']?>" hidden>

            <button class="btn" type="submit">Suivant</button>
            <button class="btn" type="reset">Annuler</button>
            </div>
        </form>
        <div>
        <a class="center" href="index.php"><button class="btn"  >Retour</button>

        </div>
    </div>
    
    <script src="jsConnexion.js"></script>
</body>
</html>

<?php
}

?>