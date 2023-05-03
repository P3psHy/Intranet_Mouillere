<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleForm.css">

    <title>Liste Utilisateurs</title>
</head>
<body>
    <div class="box">
    <h2 class="center">Liste des Utilisateurs</h2>
    <div class="scrollable">
        
        <?php

        require_once "../../php/connection.php";


        $sqlUser=$connection ->prepare('SELECT idUser, nom, prenom FROM utilisateur;');

        $sqlUser->execute();

        $ligneUser = $sqlUser->fetchall();
        foreach($ligneUser as $user){
            ?>
            <div style="margin-bottom:10px;">
                <label>Utilisateur: <?php echo $user['prenom']." ".$user['nom']; ?></label>
                <a href="changePassword.php?id=<?php echo $user['idUser'] ?>"><button class="btn">Changer Mot de passe</button></a>
                <a href="modifierForm.php?id=<?php echo $user['idUser'] ?>"><button class="btn">Modifier</button></a>
                <a href="supprimer.php?id=<?php echo $user['idUser'] ?>"><button class="btn">Supprimer</button></a>

            </div>
            <?php
        }




        ?>

    </div>
    <div>
        <a href="ajouterForm.php"><button class="btn">Ajouter un utilisateur</button></a>
        <a href="../BackOffice.php"><button class="btn">Retour</button></a>
    </div>
    
    </div>
    
</body>
</html>