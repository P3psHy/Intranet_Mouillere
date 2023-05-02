
<?php
session_start();
// $ip_adress = $_SERVER["HTTP_X_FORWARDED_FOR"];
// $ip_adress_whitelist = "IP_MOUILLERE";

// if ($ip_adress == $ip_adress_whitelist) {
// } else {
//     header('Location: https://intranet.campuslamouillere.fr/erreur');
//     exit();
// }
  if(!isset($_SESSION['username'])){
    header('location: index.php');
  }
?> 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    <title>Campus la Mouillère - Intranet Personnel</title>
    <link rel="icon" href="img/logo_campuslamouillere.png">

    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
   <center>
      <div class="container"> 
        <img src="img/wallpaper.png" class="wallpaper">
        <div class="title_cont"><h3>Campus la Mouillère - Intranet Personnel</h3></div>      
          <div class="logo_campus"><a target="_blank" rel="noopener noreferrer" href="https://campuslamouillere.fr"><img src="img/logo_campuslamouillere.png" style="width: 140px";></a></div>
            <div class="panel_ressource">
              <div class="panel_ressource_ressource">
                <div class="box1">
                  <center><a href="#popup1"><div class="button1"><img src="img/icons/dossier.png"><span- style="color:white;">Ressources</span></a></div></center>
                </div>
                <div id="popup1" class="overlay">
                  <div class="popup1">
                    <h1>Ressources</h1>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
    
                      <div class="carousel-container">
                        <div class="inner-carousel">
                          <div class="track">
                            <div class="card-container">
                              <div class="card">
                                <a target="_blank" rel="noopener noreferrer" href="https://drive.google.com/drive/my-drive"><img src="img/ressource/logo_google-drive_240x240.png" class="img_caroussel"></a>
                                <h2>Google Drive</h2>
                              </div>
                            </div>
                            <div class="card-container">
                              <div class="card">
                                <a target="_blank" rel="noopener noreferrer" href="https://mail.google.com/mail/u/0/#inbox"><img src="img/ressource/logo_google-gmail_240x240.png" class="img_caroussel"></a>
                                <h2>Google Mail</h2>
                              </div>
                            </div>
                            <div class="card-container">
                              <div class="card">
                                <a target="_blank" rel="noopener noreferrer" href="https://classroom.google.com/"><img src="img/ressource/logo_classroom_240x240.png" class="img_caroussel"></a>
                                <h2>Google Classroom</h2>
                              </div>
                            </div>
                            <div class="card-container">
                              <div class="card">
                                <a target="_blank" rel="noopener noreferrer" href="https://la-mouillere.riseup.ai/Account/login"><img src="img/ressource/logo_campus-digital_240x240.png" class="img_caroussel"></a>
                                <h2>Campus Digital</h2>
                              </div>
                            </div>
                            <div class="card-container">
                              <div class="card">
                                <a target="_blank" rel="noopener noreferrer" href="https://lamouillere.livretapprenant.com/login"><img src="img/ressource/logo_campuslamouillere_240x240.png" class="img_caroussel"></a>
                                <h2>Livret Apprentissage</h2>
                              </div>
                            </div>
                            <div class="card-container">
                              <div class="card">
                                <a target="_blank" rel="noopener noreferrer" href="https://0451565g.esidoc.fr/site/bienvenue-au-cdr-espace-eleves"><img src="img/ressource/logo_easydoc_240x240.png" class="img_caroussel"></a>
                                <h2>EasyDoc</h2>
                              </div>
                            </div>
                            <div class="card-container">
                              <div class="card">
                                <a target="_blank" rel="noopener noreferrer" href="https://educagri-editions.fr/"><img src="img/ressource/logo_educagri_240x240.png" class="img_caroussel"></a>
                                <h2>Educagri</h2>
                              </div>
                            </div>
                            <div class="card-container">
                              <div class="card">
                                <a target="_blank" rel="noopener noreferrer" href="https://lamouillere.igesti.fr/"><img src="img/ressource/logo_gestibase_240x240.png" class="img_caroussel"></a>
                                <h2>GestiBase</h2>
                              </div>
                            </div>
                            <div class="card-container">
                              <div class="card">
                                <a target="_blank" rel="noopener noreferrer" href="https://pix.fr/"><img src="img/ressource/logo_pix_290x240.png" class="img_caroussel"></a>
                                <h2>Pix</h2>
                              </div>
                            </div>
                            <div class="card-container">
                              <div class="card">
                                <a target="_blank" rel="noopener noreferrer" href="https://www.wooclap.com/fr/"><img src="img/ressource/logo_wooclap_240x240.png" class="img_caroussel"></a>
                                <h2>Wooclap</h2>
                              </div>
                            </div>
                            <div class="card-container">
                              <div class="card card11">
                                <a target="_blank" rel="noopener noreferrer" href="mailto:maintenance-si@lamouillere.fr"></a><img src="img/ressource/maintenance.png" class="img_caroussel"></a>
                                <h2>Maintenance SI</h2>
                              </div>
                            </div>
                          </div>
                          <div class="nav">
                            <button class="prev"><img src="img/fleche.png" style="width: 60%;"></button>
                            <button class="next"><img src="img/fleche.png" style="width: 60%;"></button>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="panel_ressource_document">
                <div class="box2">
                  <a class="button2" href="#popup2"><img src="img/icons/document-texte.png" style="width: 100px"><span- class="document-text">Document</span-></a>
                </div>
                <div id="popup2" class="overlay">
                  <div class="popup2">
                    <h1>Documents</h1>
                    <a class="close" href="#">&times;</a>
                    <div class="content">

                      <div>
                        <h2>Charte Informatique</h2>
                        <br>
                        <div class="button-car"><a target="_blank" rel="noopener noreferrer" href="document/chartes/Charte informatique pour le personnel La Mouillère.pdf" >PDF - Charte Informatique</a></div>
                      </div>
                        <br>
                        <h2>Charte Graphique</h2>
                        <br>
                        <div class="button-car"><a target="_blank" rel="noopener noreferrer" href="document/chartes/charte-graphique.pdf">PDF - Charte Graphique</a></div>
                        </div>
                        <br>
                      <div>
                        <h2>Plan des Batiments</h2>
                        <br>
                        <div class="button-car">
                          <a target="_blank" rel="noopener noreferrer" href="document/documents-utiles/plan-des-etages.pdf">PDF - Plan Intérieur</a>
                          <a target="_blank" rel="noopener noreferrer" href="document/documents-utiles/plan-exterieur.pdf">PDF - Plan Extérieur</a>
                        </div>
                        <br>
                      </div>
                        <div>
                        <h2>PPMS</h2>
                        <br>
                        <div class="button-car"><a target="_blank" rel="noopener noreferrer" href="#">PDF - Plan Particulier de Mise en Sécurité</a></div>
                        <br>
                        </div>
                      <div>
                        <h2>Organigramme</h2>
                        <br>
                        <div class="button-car"><a target="_blank" rel="noopener noreferrer" href="#">PDF - Organigramme</a></div>
                      </div>
                      <div>
                        <br>
                        <h2>International/Handicap</h2><br/>
                        <div class="button-car">
                          <a target="_blank" rel="noopener noreferrer" href="http://campuslamouillere.fr/le-campus/#mobilite-internationale">Référent Mobilité International</a>
                          <a target="_blank" rel="noopener noreferrer" href="http://campuslamouillere.fr/le-campus/#inclusion">Référent Handicap</a>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel_ressource_note">
                <div class="box3">
                  <a class="button3" target="_blank" rel="noopener noreferrer" href="https://drive.google.com/drive/folders/1bM4JCy-g5q1ftKlc6gcXL6hq5TO5GDOF?usp=share_link"><img src="img/icons/note-collante.png" style="width: 100px;"><span- class="text-grandbox3">Note de service</span-></a>
                </div>
              </div>
              <div class="panel_ressource_car">
                <div class="box4">
                  <a class="button4"href="#popup4"><img src="img/icons/voiture.png" style="width: 100px;"><span- style="color:white;">Réservations</span-></a>
                </div>
                <div id="popup4" class="overlay">
                  <div class="popup4">
                    <h1>Réservation de véhicule</h1>
                    <a class="close" href="#">&times;</a>
                    <?php

                    require_once "php/connection.php";

                    //Sélectionner toutes les réservations  qui ne sont pas encore terminé
                    $sqlReservation=$connection->prepare(' SELECT idReservation, dateDebut, dateFin, vehicule.marque, vehicule.modele, utilisateur.nom, utilisateur.prenom, utilisateur.nomUser
                                                            FROM reservation 
                                                            INNER JOIN utilisateur ON reservation.idUser = utilisateur.idUser 
                                                            INNER JOIN vehicule ON reservation.idVehicule=vehicule.idVehicule
                                                            WHERE dateFin > now()
                                                            ORDER BY dateDebut;'
                                                        );
                    
                    $sqlReservation->execute();
                    $ligneReservation = $sqlReservation->fetchall();

                    if(empty($ligneReservation)){
                        echo '<div><span style="color: white;">Pas de réservation actuellement</span></div>';
                    }else{

                        foreach($ligneReservation as $reservation){
                        
                            ?>
                            <div style="margin-bottom:10px; color:white;">
                            <span>Véhicule: <?php echo $reservation['marque'].' '.$reservation['modele'];?> réservé par <?php echo $reservation['prenom'].' '.$reservation['nom']; ?> 
                            du <?php echo $reservation['dateDebut']; ?> au <?php echo $reservation['dateFin']; ?></span>
                            
                            <?php
                            //Vérifier si la réservation appartient à la personne connecté afin de lui donner le droit de la retirer
                            if($reservation['nomUser'] == $_SESSION['username']){
                                echo'<a href="reservation/deleteReservation.php?idReservation='.$reservation['idReservation'].'"><button>Retirer</button></a></div>';
                            }else{
                                echo'</div>';
                            }
                        }

                    }
                    ?>
                    <a href="reservation/ajouterReservation.php"><button>Ajouter une Reservation</button></a>
                  </div>
                </div>
              </div>   
              <div class="panel_ressource_frais">
                <div class="box5">
                  <center><a class="button5" target="_blank" rel="noopener noreferrer" href="document/documents-utiles/note-de-frais.pdf"><img src="img/icons/remarques.png" style="width: 100px;"><span- class="text-grand">Note de frais</span-></a></center>
                </div>
              </div>
              <div class="panel_ressource_annuaire">
                <div class="box6">
                  <center><a class="button6"href="#popup6"><img src="img/icons/annuaire.png" style="width: 100px;"><span- style="color:white;">Annuaire</a></center>
                </div>
                <div id="popup6" class="overlay">
                  <div class="popup6">
                    <h1>Annuaire</h1>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                      <select name="listeRecherche" class="classic" id="listeRecherche" onchange="verifcontenu()">
                      <option value="0" selected>Sélectionez un Groupe</option>
                        <option value="">Tous</option>
                        <?php
                        $json = file_get_contents('data.json');
                        $json_data = json_decode($json,true)['data'];
                        
                        foreach ($json_data as $groupe) {
                            echo"<option value=\"".$groupe["id"]."\">".$groupe["nom"]."</option>";
                        }
                        ?>
                      </select>

                      <input type="text" name="recherche" id="recherche" placeholder="Nom" onkeyup="verifcontenu()">

                      <br/>

                      <div id="annuaire" style="overflow-y: scroll; height:400px;">
                          
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ico-menu"> 
                  <a href="#popup8"><img src="img/telephone.png" style="width: 3%";></a> 
                  <div id="popup8" class="overlay">
                    <div class="popup8">
                      <h1>Annuaire</h1>
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                        <br><embed src="/document/documents-utiles/annuaireEtablissement.pdf" width="800" height="500" type="application/pdf"/>
                      </div>
                    </div>
                 </div>
                  <a href="#popup7"><img src="img/reglage.png" style="width: 3%";></a> 
                  <div id="popup7" class="overlay">
                    <div class="popup7">
                      <h1>Voulez-vous contactez la maintenance-SI ?</h1>
                      <a class="close" href="#">&times;</a>
                      <div class="content">
                        <div class="button-car">
                          <br>
                          <a href="mailto:maintenance-si@lamouillere.fr">Oui</a>
                          <a target="_blank" rel="noopener noreferrer" href="document/documents-utiles/note-de-frais.pdf">Non</a>
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="google-recherche">     
                    <FORM method=GET action="https://www.google.com/custom">
                      <TABLE><tr><td>
                      <A HREF="https://www.google.com/custom" align="absmiddle"></A>
                      <INPUT TYPE=text name=q size=30 maxlength=255 value="">
                      <INPUT TYPE=hidden name=hl value=fr>
                      <INPUT type=submit name=btnG VALUE="Rechercher sur Google">
                      </td></tr></TABLE>
                    </FORM>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>    
  </body>  
    <footer>
      <nav class="nav_footer">  
        <a>Coucou</a>
    </footer>

      <script src="js/script.js"></script>
      <script src="js/newScriptAnnuaire.js"></script>
      
</html>