<?php
require_once "../php/verifConnected.php";
if(!$_SESSION['aPermis']){
    echo'<script>alert("Vous n\'avez pas le permis, vous ne pouvez pas faire de réservation de véhicule")</script>';
    echo'<a href="../intranetPersonnel.php"><button>Retour</button></a>';

}else{

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleForm.css">

    <title>Ajout Réservation</title>
</head>
<body>

    <div class="box">
        <div>
            <h2 class="center" >Créér votre réservation</h2>
        </div>
    
        <div class="container">
            <form action="ajouterReservation.php" method="get" onload="verifButtonViewVehicle()">
            <div>
                <label for="dateDebut">Date de début: </label> <!-- Si avoir du temps, ajouter du js pour vérifier que la date n'est pas déjà dépassé -->
                <input class="input" id="dateDebut" name="dateDebut" type="date" value="<?php if(isset($_REQUEST['dateDebut'])){echo $_REQUEST['dateDebut'];}else{ echo"";} ?>" onchange="verifDateDebut()" required>
            </div>
            <div>
                <label for="dateFin">Date de fin: </label> <!-- Si avoir du temps, ajouter du js pour vérifier que la date ne dépasse pas le temps autorisé par l'entreprise -->
                <input class="input" id="dateFin" name="dateFin" type="date" value="<?php if(isset($_REQUEST['dateFin'])){echo $_REQUEST['dateFin'];}else{ echo"";} ?>" onchange="verifDateFin()" required>
            </div>

            <button class="btn" id="voirVehicules" type="submit">Voir les véhicules utilisables</button>
            <button class="btn" type="reset">Annuler</button>

            </form>
        </div>


        <?php
        if(isset($_REQUEST['dateDebut']) && isset($_REQUEST['dateFin'])){
            ?>
            <form action="addReservation.php" method="get" onload="verifButton()">
                <div class="container">
                    <div>
                        <label for="listeVehicule">Véhicules disponibles</label>
                        <select name="idVehicule" id="listeVehicule" onchange="verifVehicule()">
                            <option value="default" selected>Sélectionez un véhicule</option>
                            <?php
                            require_once "../php/connection.php";

                            $sqlVehicule=$connection ->prepare('SELECT * 
                            FROM vehicule 
                            WHERE idVehicule NOT IN (SELECT distinct vehicule.idVehicule 
                                                     FROM reservation
                                                     WHERE reservation.idVehicule = vehicule.idVehicule 
                                                     AND (reservation.dateDebut >= :dateFin OR reservation.dateFin >= :dateDebut )
                                                    )');

                            $sqlVehicule->bindParam(":dateDebut", $_REQUEST['dateDebut']);
                            $sqlVehicule->bindParam(":dateFin", $_REQUEST['dateFin']);



                                                                                                                    
                            $sqlVehicule->execute();
                            //$sqlVehicule->debugDumpParams();
                            $ligneVehicule = $sqlVehicule->fetchall();

                            
                            foreach($ligneVehicule as $vehicule){
                                echo'<option value="'.$vehicule['idVehicule'].'">'.$vehicule['marque'].' '.$vehicule['modele'].'</option>';
                            }

                            ?>
                        </select>
                    </div>
                    <input type="date" name="dateDebut" id="" value="<?php echo $_REQUEST['dateDebut']; ?>" hidden>
                    <input type="date" name="dateFin" id="" value="<?php echo $_REQUEST['dateFin']; ?>" hidden>

                    <div>
                        <button class="btn" id="submitReservation" type="submit">Valider</button>
                        <button class="btn" type="reset">Annuler</button>
                        
                    </div>
                </div>
            </form>
            
        
        <?php
        }
        ?>

        <div>
            <a class="center" href="../intranetPersonnel.php#popup4"><button class="btn">Retour</button></a>
        </div>

    </div>
     

    <script src="../js/jsReservation.js"></script>

</body>
</html>

<?php
        
    }

        
?>
