<?php
require_once "../verifAdminConnected.php"
?>

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
        <h2 class="center">Liste des groupes</h2>
        <div class="scrollable">
            <?php

            require_once "../../php/connection.php";


            $sqlGroupe=$connection ->prepare('SELECT * FROM groupes;');

            $sqlGroupe->execute();

            $ligneGroupe = $sqlGroupe->fetchall();
            foreach($ligneGroupe as $groupe){
                ?>
                <div style="margin-bottom:10px;">
                    <label>Groupe: <?php echo $groupe['nom']; ?></label>
                    <a href="listePersonne.php?idGroupe=<?php echo$groupe['id'] ?>"><button class="btn">Afficher membres</button></a>
                    <a href="modifierForm.php?id=1&idGroupe=<?php echo$groupe['id'] ?>"><button class="btn">Modifier</button></a>
                    <a href="supprimer.php?id=1&idGroupe=<?php echo $groupe['id'] ?>"><button class="btn">Supprimer</button></a>

                </div>
                <?php
            }

            ?>
        </div>
        <div>
            <a href="ajouterForm.php?id=1"><button class="btn">Ajouter un groupe</button></a>
            <a href="../BackOffice.php"><button class="btn">Retour</button></a>
        </div>
        
    </div>
    
</body>
</html>