<?php

session_start();
require_once "../php/connection.php";

$sqlPersonne=$connection ->prepare('SELECT * FROM administrateur WHERE mail = :mail;');
$sqlPersonne->bindParam(":mail", $_REQUEST['mail']);

$sqlPersonne->execute();
$sqlPersonne->debugDumpParams();

$lignePersonne = $sqlPersonne->fetchall();

foreach($lignePersonne as $personne){
    
    if(password_verify($_REQUEST['psw'],$personne['psw'])){

        echo "Ok";
        $_SESSION['adminEstConnecte']= true;
    
        header("Location: BackOffice.php");

    }else{
        echo "Pas Ok";
        header("Location: connexionPsw.php?mail=".$_REQUEST['mail']."");

    }
}




?>
