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

    <div class="box">
        <h2 class="center">Ajouter un utilisateur</h2>
        <form action="ajouter.php" method="get">
            <div class="container">
                <div>
                    <label for="">Nom</label>
                    <input class="input" type="text" name="nom" required>
                </div>

                <div>
                    <label for="">Prenom</label>
                    <input class="input" type="text" name="prenom" required>
                </div>

                <div>
                    <label for="">Mot de passe</label>
                    <input class="input" type="password" name="psw" required> 
                </div>

                <div>
                    <label for="">Permis de conduire: </label>
                    <select name="aPermis" id="aPermis" required>
                        <option value="0">Non</option>
                        <option value="1">Oui</option>
                    </select>
                </div>
                


                <div>
                    <button class="btn" type="submit">Ajouter</button>
                    <button class="btn" type="reset">Annuler</button>
                </div>
                
            </div>
            
        </form>
        <a href="listeUtilisateur.php"><button class="btn">retour</button></a>
    </div>
        
</body>
</html>

