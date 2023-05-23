<?php
require_once "verifAdminConnected.php";

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
        <h2 class="center">Choisissez une table</h2>
        <a href="BackAnnuaire/listeGroupe.php"><button class="btn" style="margin-top:15px">Annuaire</button></a>
        <a href="BackUtilisateur/listeUtilisateur.php"><button class="btn" style="margin-top:15px">Utilisateurs</button></a>
        <a href="BackVehicule/listeVehicule.php"><button class="btn" style="margin-top:15px">Véhicules</button></a>
        <a href="../index.php"><button class="btn" style="margin-top:15px">Retour Connexion Utilisateurs</button></a>

    </div>
    
</body>
</html>