<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleForm.css">
    <title>Intranet Campus La Mouillere</title>
</head>
<body>
    <div class="box">
        <div>
            <h2 class="center">Connexion</h2>
        </div>
            <form action="verifCompte.php" method="get">
                <div class="container">

                    <div>
                        <label for="">Nom utilisateur</label><br>
                        <input class="input" id="username" name="username" type="text" placeholder="prenom.nom" onchange="verifUsername()"><br/>
                    </div>

                    <br>
                    <div>
                        <label for="">Mot de passe</label><br>
                        <input class="input" id="psw" name="psw" type="text" placeholder="mot de passe">
                    </div>
                    

                    <p id="msg-user">Si vous avez oubliez votre mot de passe, veuillez contacter la Maintenance-SI.</p>
                    
                    <div><button class="btn" type="submit">Connexion</button></div>
                </div>

            </form>
        
        <div>
        <a class="center" href="BackOffice/"><button class="btn">Connexion Admin</button></a>

        </div>
    </div>
    
    <script src="jsConnexion.js"></script>
</body>
</html>