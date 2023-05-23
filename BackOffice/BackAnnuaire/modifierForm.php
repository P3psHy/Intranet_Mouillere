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

    <title>Ajouter</title>
</head>
<body>
<?php


switch ($_REQUEST['id']) {
    case "1":    //formulaire modifier groupe

        require_once "../../php/connection.php";


        $sqlGroupe=$connection ->prepare('SELECT * FROM groupes WHERE id = :idGroupe');
        $sqlGroupe->bindParam(":idGroupe", $_REQUEST['idGroupe']);
    
        $sqlGroupe->execute();

        $ligneGroupe = $sqlGroupe->fetchall();
        foreach($ligneGroupe as $groupe){
            ?>
            <div class="box">
                <h2 class="center">Modification du groupe: <?php echo $groupe['nom'] ?></h2>
                <form action="modifier.php" method="get">
                    <div class="container">
                        <div>
                            <label for="">Nom</label>
                            <input class="input" type="text" name="nom" value="<?php echo $groupe['nom']; ?>" required>
                        </div>

                        <div>
                            <label for="">Mail</label>
                            <input class="input" type="text" name="mail" value="<?php echo $groupe['mail']; ?>">
                        </div>

                        <div>
                            <label for="">Téléphone</label>
                            <input class="input" type="text" name="telephone" value="<?php echo $groupe['telephone']; ?>">
                        </div>

                        <input type="text" name ="idGroupe" value="<?php echo $_REQUEST['idGroupe'] ?>" hidden>
                        <input type="text" name ="id" value="1" hidden>

                        <div style="margin-top:10px">
                            <button class="btn" type="submit">Modifier</button>
                            <button class="btn" type="reset">Annuler</button>
                        </div>
                        
                    </div>
                    
                </form>
                <a href="listeGroupe.php"><button class="btn">retour</button></a>
            </div>
            

            <?php
        }


        break;


    case "2": 

        require_once "../../php/connection.php";


        $sqlPersonne=$connection ->prepare('SELECT * FROM personnes WHERE id = :id');
        $sqlPersonne->bindParam(":id", $_REQUEST['idPersonne']);
    
        $sqlPersonne->execute();

        $lignePersonne = $sqlPersonne->fetchall();
        foreach($lignePersonne as $personne){

        ?>
        <div class="box">
            <h2 class="center">Modifier le profil de: <?php echo $personne['nom']; ?></h2>
            <form action="modifier.php" method="get">
                <div class="container">
                    <div>
                        <label for="">Nom</label>
                        <input class="input" type="text" name="nom" value="<?php echo $personne['nom'];?>" required>
                    </div>

                    <div>
                        <label for="">Mail</label>
                        <input class="input" type="text" name="mail"value="<?php echo $personne['mail'];?>">
                    </div>

                    <div>
                        <label for="">Téléphone</label>
                        <input class="input" type="text" name="telephone" value="<?php echo $personne['telephone'];?>">
                    </div>

                    <div>
                        <label for="">Groupe</label>
                        <select name="groupeId" id="">
                            
                            <?php
                            $sqlGroupe=$connection ->prepare('SELECT * FROM groupes');
                        
                            $sqlGroupe->execute();
                    
                            $ligneGroupe = $sqlGroupe->fetchall();
                            foreach($ligneGroupe as $groupe){

                                if($personne['groupeId'] == $groupe['id']){
                                    echo '<option value="'.$groupe['id'].'" selected>'.$groupe['nom'].'</option>';
                                }else{
                                    echo '<option value="'.$groupe['id'].'">'.$groupe['nom'].'</option>';
                                }

                                
                            }

                            ?>
                        </select>
                    </div>

                    <input type="text" name ="idPersonne" value="<?php echo $personne['id'] ?>" hidden>
                    <input type="text" name ="id" value="2" hidden>

                    <div style="margin-top:10px">
                        <button class="btn" type="submit">Modifier</button>
                        <button class="btn" type="reset">Annuler</button>
                    </div>
                    
                </div>
            </form>
            <a href="listePersonne.php?idGroupe=<?php echo $personne['groupeId'] ?>"><button class="btn">retour</button></a>
        </div>
        
        <?php

        }

        break;
    
    default:
        ?>
        <span>erreur</span>
        <?php
        break;
}
?>





    
</body>
</html>