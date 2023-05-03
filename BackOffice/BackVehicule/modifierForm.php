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

        $sqlVehicule=$connection ->prepare('SELECT * FROM vehicule WHERE idVehicule = :id');
        $sqlVehicule->bindParam(":id", $_REQUEST['id']);

        $sqlVehicule->execute();

        $ligneVehicule = $sqlVehicule->fetchall();
        foreach($ligneVehicule as $vehicule){
            ?>
            <h2 class="center">Modification du véhicule: <?php echo $vehicule['marque']." ". $vehicule['modele'] ?></h2>
            <form action="modifier.php" method="get">
                <div class="container">
                    <div>
                        <label for="">Nom: </label>
                        <input class="input" type="text" name="marque" value="<?php echo $vehicule['marque']; ?>" required>
                    </div>

                    <div style="margin-top:10px">
                        <label for="">Prénom: </label>
                        <input class="input" type="text" name="modele" value="<?php echo $vehicule['modele']; ?>" required>
                    </div>

                    <input type="text" name ="id" value="<?php echo $_REQUEST['id'] ?>" hidden>


                    <div style="margin-top:10px">
                        <button class="btn" type="submit">Modifier</button>
                        <button class="btn" type="reset">Annuler</button>
                    </div>

                    
                </div>
                
            </form>
            <a href="listeVehicule.php"><button class="btn">retour</button></a>

            <?php
        }

        ?>
    </div>
</body>
</html>