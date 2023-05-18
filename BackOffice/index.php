



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
        <h2 class="center">Connexion Administrateur</h2>
        <form action="connexionPsw.php" method="get">
            <div class="container">
                <div>
                    <label for="">Adresse Mail</label><br>
                    <input class="input" id="mail" name="mail" type="text" placeholder="mail"><br/>
                </div>

                <div>
                    <button class="btn" type="submit">Suivant</button>
                    <button class="btn" type="reset">Annuler</button>
                </div>
            </div>
            
        </form>
        <a href="../index.php"><button class="btn">Retour</button>
    </div>
            

    <script src="jsConnexion.js"></script>
</body>
</html>