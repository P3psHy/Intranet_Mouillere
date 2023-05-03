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
        <h2 class="center">Ajouter un véhicule</h2>
        <form action="ajouter.php" method="get">
            <div class="container">
                <div>
                    <label for="">Marque: </label>
                    <input class="input" type="text" name="marque" required>
                </div>

                <div style="margin-top:10px">
                    <label for="">Modèle: </label>
                    <input class="input" type="text" name="modele" required>
                </div>

                <div style="margin-top:10px">
                    <button class="btn" type="submit">Ajouter</button>
                    <button class="btn" type="reset">Annuler</button>
                </div>
                
            </div>
            
        </form>
        <a href="listeVehicule.php"><button class="btn">retour</button></a>
    </div>
        
        
</body>
</html>
