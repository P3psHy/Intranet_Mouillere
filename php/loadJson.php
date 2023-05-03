<?php



require "connection.php" ;

$sqlPersonne=$connection ->prepare('SELECT * FROM personnes ORDER BY groupeId');
$sqlPersonne->execute();
$lignePersonne = $sqlPersonne->fetchall();

$sqlGroup=$connection ->prepare('SELECT * FROM groupes');
$sqlGroup->execute();
$ligneGroup = $sqlGroup->fetchall();

$arrayGroupes = [];

foreach($ligneGroup as $groupe){

    $objectGroupe = new stdClass();
    $objectGroupe->id = $groupe['id'];
    $objectGroupe->nom = $groupe['nom'];
    $objectGroupe->telephone = $groupe['telephone'];
    $objectGroupe->mail = $groupe['mail'];
    $objectGroupe->listePersonne = [];
    
    foreach($lignePersonne as $personne){
        if($personne['groupeId'] == $groupe['id']){
            $objectPersonne = new stdClass();
            $objectPersonne->id = $personne['id'];
            $objectPersonne->nom = $personne['nom'];
            $objectPersonne->mail = $personne['mail'];
            $objectPersonne->telephone = $personne['telephone'];
            $objectPersonne->groupeId = $personne['groupeId'];

            array_push($objectGroupe->listePersonne, $objectPersonne);
        }
    }
    array_push($arrayGroupes, $objectGroupe);

}

file_put_contents("data.json", json_encode([]));
$json = json_encode(array('data' => $arrayGroupes));

file_put_contents("data.json", $json);
//write json to file



?>

