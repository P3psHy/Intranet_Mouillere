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
        <h2 class="center">Liste des Véhicules</h2>
        <div class="scrollable">
        <?php

        require_once "../../php/connection.php";


        $sqlVehicule=$connection ->prepare('SELECT * FROM vehicule;');

        $sqlVehicule->execute();

        $ligneVehicule = $sqlVehicule->fetchall();
        foreach($ligneVehicule as $vehicule){
            ?>
            <div style="margin-bottom:10px;">
                <label>Voiture: <?php echo $vehicule['marque']." ".$vehicule['modele']; ?></label>
                <a href="modifierForm.php?id=<?php echo $vehicule['idVehicule'] ?>"><button class="btn">Modifier</button></a>
                <a href="supprimer.php?id=<?php echo $vehicule['idVehicule'] ?>"><button class="btn">Supprimer</button></a>

            </div>
            <?php
        }




        ?>
        </div>
        <div>
            <a href="ajouterForm.php"><button class="btn">Ajouter un véhicule</button></a>
            <a href="../BackOffice.php"><button class="btn">Retour</button></a>
        </div>
        
    </div>
    
</body>
</html>