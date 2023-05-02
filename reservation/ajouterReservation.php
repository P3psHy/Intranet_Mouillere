<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: index.php');
}else{
    if(!$_SESSION['aPermis']){
        echo'<script>alert("Vous n\'avez pas le permis, vous ne pouvez pas faire de réservation de véhicule")</script>';
        echo'<a href="index.php"><button>Retour au menu de connexion</button></a>';

    }else{

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Réservation</title>
</head>
<body onload="verifButton()">
    <h2>Créér votre réservation</h2>
    
    <div>
        <form action="ajouterReservation.php" method="get">
        <div>
            <label for="dateDebut">Date de début</label> <!-- Si avoir du temps, ajouter du js pour vérifier que la date n'est pas déjà dépassé -->
            <input id="dateDebut" name="dateDebut" type="date" value="<?php if(isset($_REQUEST['dateDebut'])){echo $_REQUEST['dateDebut'];}else{ echo"";} ?>" onchange="verifDateDebut()" required>
        </div>
        <div>
            <label for="dateFin">Date de fin</label> <!-- Si avoir du temps, ajouter du js pour vérifier que la date ne dépasse pas le temps autorisé par l'entreprise -->
            <input id="dateFin" name="dateFin" type="date" value="<?php if(isset($_REQUEST['dateFin'])){echo $_REQUEST['dateFin'];}else{ echo"";} ?>" onchange="verifDateFin()" required>
        </div>

        <button id="voirVehicules" type="submit">Voir les véhicules utilisable</button>
        <button type="reset">Annuler</button>

        </form>
    </div>


    <?php
    if(isset($_REQUEST['dateDebut']) && isset($_REQUEST['dateFin'])){
        ?>
        <div>
            <form action="addReservation.php" method="get">
                <label for="listeVehicule">Véhicules disponibles</label>
                <select name="idVehicule" id="listeVehicule" onchange="verifVehicule()">
                    <option value="default" selected>Sélectionez un véhicule</option>
                    <?php
                    require_once "connection.php";

                    $sqlVehicule=$connection ->prepare('SELECT * FROM vehicule WHERE vehicule.idVehicule NOT IN(SELECT vehicule.idVehicule
                                                                                                                FROM reservation
                                                                                                                INNER JOIN vehicule ON reservation.idVehicule = vehicule.idVehicule
                                                                                                                WHERE reservation.dateDebut >=:dateDebut AND reservation.dateFin <= :dateFin);');

                    $sqlVehicule->bindParam(":dateDebut", $_REQUEST['dateDebut']);
                    $sqlVehicule->bindParam(":dateFin", $_REQUEST['dateFin']);



                                                                                                            
                    $sqlVehicule->execute();
                    $ligneVehicule = $sqlVehicule->fetchall();
                    
                    
                    foreach($ligneVehicule as $vehicule){
                        echo'<option value="'.$vehicule['idVehicule'].'">'.$vehicule['marque'].' '.$vehicule['modele'].'</option>';
                    }

                    ?>
                </select>
                <input type="date" name="dateDebut" id="" value="<?php echo $_REQUEST['dateDebut']; ?>" hidden>
                <input type="date" name="dateFin" id="" value="<?php echo $_REQUEST['dateDebut']; ?>" hidden>

                <div>
                    <button id="submitReservation" type="submit">Valider</button>
                    <button type="reset">Annuler</button>
                    
                </div>
            </form>
        </div>
    
    <?php
    }
    ?>
    <a href="../intranetPersonnel.php#popup4"><button>Retour</button></a>
    


</body>
</html>

<?php
        
    }
}
        
?>