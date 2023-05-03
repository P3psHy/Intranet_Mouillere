<?php

session_start();
require_once "php/connection.php";

$sqlPersonne=$connection ->prepare('SELECT nomUser, psw, aPermis FROM utilisateur WHERE nomUser = :user');
$sqlPersonne->bindParam(":user", $_REQUEST['username']);

$sqlPersonne->execute();


$lignePersonne = $sqlPersonne->fetchall();


foreach($lignePersonne as $personne){
    if(strval($_REQUEST['psw']) == $personne['psw']){
        echo "Ok";
        $_SESSION['username']= $_REQUEST['username'];
        $_SESSION['aPermis'] = $personne['aPermis'];

        require_once "php/loadJson.php";

        header("Location: intranetPersonnel.php");

    }else{
        echo "Pas Ok";
        //header("Location: intranet.php");

    }
}
echo "bizarre";
//header("Location: index.php");





?>