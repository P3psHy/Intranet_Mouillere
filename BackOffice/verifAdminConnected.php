<?php
session_start();
if(!isset($_SESSION['adminEstConnecte'])){
    header('location: ../index.php');
}
?>