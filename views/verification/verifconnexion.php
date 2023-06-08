<?php
   /*Si username n'est pas vide, enregistrer cet username dans un cookie avec la fonction setcookie() Vérifier la création du cookie dans le navigateur*/
//    if(isset($_POST['rememberMe']) && !empty($_POST['rememberMe'])) {
//        setcookie('username', $_POST['username'], time() + 24 * 3600);
//    }

/* Si username ou password vide > redirection vers le formulaire avec un paramètre get "message" : "Vous devez remplir les 2 champs."*/
//Dans le formulaire : un paragraphe affiche le message get le champ username affiche la valeur dans le cookie si elle existe (voir le formulaire 1)
 
    if (!isset($_POST['username']) || empty($_POST['username']) || !isset($_POST['mdp']) || empty($_POST['mdp'])){
        header('location: connexion.php?message=Vous devez remplir les deux champs.&type=danger');
        exit;
    }

/* Création de la base de donnée qu’on a placé dans un include pour éviter de réécrire le code à chaque page*/
    include('../includes/db.php');
 
/*Ici comme on a salé le mot de passe lors de l’inscription, on va le dé-saler pour obtenir le mot de passe sous sa forme de base.*/
    $salt='DHteyfi90JSYERFI$$546';
    $passwordSalt = hash('sha256', $_POST['mdp']. $salt);
 
   	$q = 'SELECT Id FROM users WHERE username = :username AND password = :mdp';
   	$req = $bdd->prepare($q);
   	$req->execute([
       	'username' => $_POST['username'],
       	'mdp' => $passwordSalt
   	]);

    $result = $req->fetch(PDO::FETCH_ASSOC);
/*Si username et password existent dans la base de donnée créer une session, y ajouter un paramètre "email" avec la valeur envoyée*/

    if(empty($result)){
        header('location: ../connexion.php?message=Identifiants incorrects.');
        logConnexion(false, $_POST['username'], 'connexion');
    exit;
    };

    // if($verified == 0){
    //     header('location: ../connexion.php?message=Merci de bien vouloir confirmer votre compte.');
    //     logConnexion(false, $_POST['username'], 'connexion');
    // exit;
    // }

    
/*Création d’une session avec pour paramètre l’username*/
    session_start();
    // logConnexion(true, $_SESSION['username'], 'connexion');
    $_SESSION['username'] = $_POST['username'];

/*Redirection vers la page d'accueil*/
    header("location: ../index.php");
    exit;
?>