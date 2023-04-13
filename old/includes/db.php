<?php

try{
       $bdd = new PDO('mysql:host=localhost;dbname=cookmaster','root','root');
   }catch(Exception $e){
       die('Erreur' . $e->getmessage());
   }
?>