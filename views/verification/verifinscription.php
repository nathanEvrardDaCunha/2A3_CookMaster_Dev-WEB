<?php

    /*Ce script vérifie les champs*/
 
    /*Si username n'est pas vide, enregistrer cet username dans un cookie avec la fonction setcookie() Vérifier la création du cookie dans le navigateur*/  
 
    if( isset($_POST['username'])   && !empty($_POST['username'])) {
        setcookie('username', $_POST['username'], time() + (24 * 3600) * 365);
        //set the cookie to 365
        }
 
    /* Si username, password ou email vide > redirection vers le formulaire avec un paramètre get "message" : "Vous devez remplir les champs manquants."*/
    //Dans le formulaire : un paragraphe affiche le message get le champ username affiche la valeur dans le cookie si elle existe (voir le formulaire 2)
 
   	if(!isset($_POST['username']) || empty($_POST['username']) || empty($_POST['mdp']) || !isset($_POST['mdp']) || !isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['confmdp']) || empty($_POST['confmdp'])) {
       header('location:../inscription.php?message=Veuillez remplir les champs manquants.');
       exit;
   	}

       if(($_POST['mdp']) != ($_POST['confmdp'])) {
        header('location:../inscription.php?message=Les deux mots de passe ne correspondent pas.');
        exit;
        }


    /*Si emailinvalide > redirection vers le formulaire avec un paramètre get "message" : "Email invalide." (fonction de validation) (Note : la vérification du format du champ côté utilisateur ne suffit pas !)*/
 
   	if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
       	header('location: ../inscription.php?message=Email invalide');
       exit;
   	}
    
    include('../includes/db.php');

    $q = 'SELECT Id FROM users WHERE email = ?';
    $req = $bdd->prepare($q);
    $req->execute([$_POST['email']]);
    $result = $req->fetchall();
   
       if (!empty($result)){
           header('location: ../inscription.php?message=Email déjà utilisé.');
           exit;
       }
    /* Le mot de passe doit contenir au moins 8 caractères, composé d’une majuscule, une minuscule et un chiffre*/
    //On définit d’abord les contraintes 
    $uppercase = preg_match('@[A-Z]@', $_POST['mdp']);
    $lowercase = preg_match('@[a-z]@', $_POST['mdp']);
    $number = preg_match('@[0-9]@', $_POST['mdp']);
 
    //On applique les contraintes dans un if
    if(!$uppercase || !$lowercase || !$number || strlen($_POST['mdp']) < 8) {
        header('location: ../inscription.php?message=Le mot de passe doit contenir au moins 8 caractères, composé d\'une majuscule, une minuscule et un chiffre.');
        exit;
    }
    
    /*Si tout est validé créer une requête avec la base de donnée*/
    /* Création de la base de donnée qu’on a placé dans un include pour éviter de réécrire le code à chaque page*/
    include('../includes/db.php');

    $q = 'SELECT Id FROM users WHERE email = ?';
    $req = $bdd->prepare($q);
    $req->execute([$_POST['email']]);

    $results = $req->fetchall();

    if (!empty($results)){
        header('location: ../inscription.php?message=Email déjà utilisé.');
        exit;
    }
    
    // $q = "SELECT idBan FROM ban WHERE email = :email";
    // $req = $bdd->prepare($q);
    // $req->execute([
    //     'email' => $_POST['email']
    // ]);
    // $result = $req->fetchall();

    // if(!empty($result)) {
    //     header('location: ../inscription.php?message=Vous avez été banni.');
    //     exit;
    // }
    /*Sécurisation des donnés + préparation de requête*/
 
    //Salage du mot de passe et de la clé
    //Requête préparée avec des noms de valeur
    $salt='DHteyfi90JSYERFI$$546';
    $passwordSalt = hash('sha256', $_POST['mdp']. $salt);
    $vkey = md5(time() . $_POST['email']);

    // requete préparée avec des noms de valeur
    $q = 'INSERT INTO users (username, email, password, FirstName, LastName) VALUES (:username, :email, :password, :FirstName, :LastName)';
    $req = $bdd->prepare($q); // Préparation de la requete
    $result = $req->execute([ 
                            'password' => $passwordSalt,
                            'FirstName' => $_POST['prenom'],
                            'LastName' => $_POST['nom'],
                            'email' => $_POST['email'],
                            'username' => $_POST['username']
                            /*'image' => isset($filename) ? $filename : '',*/
                            // 'vkey' => $vkey
                            ]);

    /*- Si l'exécution a fonctionné (cf. valeur de retour sur php.net) : redirection vers la page d'accueil avec message de confirmation 'Compte créé avec succès'. Si l'exécution n'a pas fonctionné : retour au formulaire d'inscription avec un message d'erreur 'Erreur lors de l'inscription.'*/
    if (!$result){
        header('location: inscription.php?message=Erreur lors de l\'enregistrement.');
        logConnexion(false, $_POST['email'], 'inscripton');
        exit;
    }else{
        // logConnexion(true, $_POST['email'], 'inscripton');
        // $message = "<a href=\"">Cliquez ici pour confirmer votre compte</a>";
        // $subject = "Email verification";
        // $recipients = $_POST['email'];
        // send_mail($recipients, $subject, $message);
        header('location:../thankyou.php');
        exit;
    }

?>
 