<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleForm.css">

    <title>Liste Groupe Annuaire</title>
</head>
<body>
    <div class="box">
        <h2 class="center">Liste des personnes appartenant au groupe: xx</h2>
        <?php

        require_once "../../php/connection.php";


        $sqlGroupe=$connection ->prepare('SELECT * FROM personnes WHERE groupeId = :idGroupe');
        $sqlGroupe->bindParam(":idGroupe", $_REQUEST['idGroupe']);

        $sqlGroupe->execute();

        $ligneGroupe = $sqlGroupe->fetchall();
        foreach($ligneGroupe as $groupe){
            ?>
            <div style="margin-bottom:10px;">
                <label><?php echo $groupe['nom']; ?></label>
                <a href="modifierForm.php?id=2&idPersonne=<?php echo $groupe['id'];?>"><button class="btn">Modifier</button></a>
                <a href="supprimer.php?id=2&idPersonne=<?php echo $groupe['id'] ?>"><button class="btn">Supprimer</button></a>

            </div>
            <?php
        }




        ?>
        <a href="ajouterForm.php?id=2&idGroupe=<?php echo $_REQUEST['idGroupe']; ?>"><button class="btn">Ajouter une personne</button></a>
        <a href="listeGroupe.php"><button class="btn">Retour</button></a>
    </div>
    
</body>
</html>