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
    //formulaire ajouter groupe
    case "1":

        

        ?>
        <div class="box">
            <h2 class="center">Ajouter un groupe</h2>
            <form action="ajouter.php" method="get">
                <div class="container">
                <div>
                    <label for="">Nom</label>
                    <input class="input" type="text" name="nom" required>
                </div>

                <div>
                    <label for="">Mail</label>
                    <input class="input" type="text" name="mail" value="">
                </div>

                <div>
                    <label for="">Téléphone</label>
                    <input class="input" type="text" name="telephone" value="">
                </div>


                <input type="text" name ="id" value="1" hidden>


                <div>
                    <button class="btn" type="submit">Ajouter</button>
                    <button class="btn" type="reset">Annuler</button>
                </div>
                
                </div>
            </form>
            <a href="listeGroupe.php"><button class="btn">retour</button></a>
        </div>
        
        <?php
        break;


    case "2":

        ?>
        <div class="box">
            <h2 class="center">Ajouter une personne</h2>
            <form action="ajouter.php" method="get">
                <div class="container">
                    <div>
                        <label for="">Nom</label>
                        <input class="input" type="text" name="nom" required>
                    </div>

                    <div>
                        <label for="">Mail</label>
                        <input class="input" type="text" name="mail" value="">
                    </div>

                    <div>
                        <label for="">Téléphone</label>
                        <input class="input" type="text" name="telephone" value="">
                    </div>
                
                          

                    <input type="text" name ="idGroupe" value="<?php echo $_REQUEST['idGroupe'] ?>" hidden>
                    <input type="text" name ="id" value="2" hidden>


                    <div>
                        <button class="btn" type="submit">Ajouter</button>
                        <button class="btn" type="reset">Annuler</button>
                    </div>
                </div>
            </form>
            <a href="listePersonne.php?idGroupe=<?php echo $_REQUEST['idGroupe'] ?>"><button class="btn">retour</button></a>
        </div>
        
        <?php
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