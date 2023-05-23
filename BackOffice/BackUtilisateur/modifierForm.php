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
    <h2 class="center">Modification de l'utilisateur: <?php echo $user['prenom']." ". $user['nom'] ?></h2>
    <form action="modifier.php" method="get">
        <div class="container">
            <div>
                <label for="">Nom</label>
                <input class="input" type="text" name="nom" value="<?php echo $user['nom']; ?>" required>
            </div>

            <div>
                <label for="">Prénom</label>
                <input class="input" type="text" name="prenom" value="<?php echo $user['prenom']; ?>">
            </div>

            <div>
                <label for="">Permis de conduire: </label>
                <select name="aPermis" id="">
                    <?php
                    if($user['aPermis']=='0'){
                        echo'<option value="0" selected>Non</option>';
                        echo'<option value="1">Oui</option>';
                    }else{
                        echo'<option value="0">Non</option>';
                        echo'<option value="1" selected>Oui</option>';
                    }

                    ?>
                </select>
            </div>

            <input type="text" name ="idUser" value="<?php echo $_REQUEST['id'] ?>" hidden>
            <input type="text" name ="id" value="1" hidden>


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
