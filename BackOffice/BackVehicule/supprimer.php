<?php

require_once "../../php/connection.php";

    $sqlSupprUser=$connection ->prepare('DELETE FROM vehicule WHERE idVehicule=:id');
    $sqlSupprUser->bindParam(":id", $_REQUEST['id']);

    $sqlSupprUser->execute();

    header("Location: listeVehicule.php");




?>