<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleForm.css">

    <title>Modifier</title>
</head>
<body>
    
    <div class="box">

    
        <?php

        require_once "../../php/connection.php";

        $sqlUser=$connection ->prepare('SELECT * FROM utilisateur WHERE idUser = :id');
        $sqlUser->bindParam(":id", $_REQUEST['id']);

        $sqlUser->execute();

        $ligneUser = $sqlUser->fetchall();
        foreach($ligneUser as $user){
            ?>

            <h2 class="center">Modification du Mot de passe de l'utilisateur: <?php echo $user['prenom']." ". $user['nom'] ?></h2>
            <form action="modifier.php" method="get">
                <div class="container">
                    <div>
                        <label for="">Nouveau mot de passe</label>
                        <input class="input" type="text" name="psw" required>
                    </div>

                    <input type="text" name ="idUser" value="<?php echo $_REQUEST['id'] ?>" hidden>
                    <input type="text" name ="id" value="2" hidden>


                    <div>
                        <button class="btn" type="submit">Modifier</button>
                        <button class="btn" type="reset">Annuler</button>
                    </div>
                    
                </div>
                
            </form>
            <a href="listeUtilisateur.php"><button class="btn">retour</button></a>

            <?php
        }

        ?>
    </div>
</body>
</html>