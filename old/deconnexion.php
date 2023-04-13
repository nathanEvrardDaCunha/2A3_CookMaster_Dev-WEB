<?php
   require("log.php");
/*Suppression de la session puis redirection vers l'accueil*/
   session_start();
   session_destroy();
   logConnexion(true, $_SESSION['username'], 'deconnexion');
/*Redirection vers la page d'accueil*/
   header('location: index.php');

   exit;
?>
