
<?php 
$title = 'Connexion'; 
include('includes/head.php'); 
include('includes/header.php'); 
?>

<main>

    <?php if(isset($_GET['message']) && !empty($_GET['message'])){
                                    echo '<body onload="popup()">
<div id="myModal" class="modal">
<div class="modal-content">
    <div class="modal-header">
      
      <h3>ANIPRO</h3>
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">
    <p>' . htmlspecialchars($_GET['message']) . '</p>
    </div>
    <div class="modal-footer">
    </div>
  </div>

</div>';
                                }?>

<img class="bannerl" src="images/bannerl.png" alt="Cook Master" width="100%">
       <!--<img class="logofb" src="images/logofb.png">-->

       <form class="main_con" action="verification/verifconnexion.php" method="POST">
           <div class="form-group">
               <!--<span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>-->
               <input type="text" class="form-control" placeholder="Username" name="username">
           </div>
           <div class="form-group">
               <input type="password" class="form-control" id="password" placeholder="Password" name="mdp">
           </div>
           <div class="form-group">
           <div class="form-check">
                   <input class="form-check-input"  onclick="showPassword()" type="checkbox" id="gridCheck">
                   <label class="form-check-label" for="gridCheck">
                       Afficher le mot de passe
                   </label>
           </div>
           <div class="form-check">
                   <input class="form-check-input" type="checkbox" id="gridC">
                   <label class="form-check-label" name="rememberMe" for="gridCheck">
                       Se souvenir de moi 
                   </label>
           </div>
          
           <button type="submit" class="btn btn-warning form-control">Se Connecter</button>
       </form>
 
       <div class="o-things">
           <a class="a-form" href ="inscription.php">Pas encore inscrit ? Cliquez ici.</a>
           <a class="a-form" href ="resetpassword.php">Mot de passe oublié ?</a>
           <a class="a-form" href ="index.php">Retour à l'acceuil</a>
       </div>
       <script src="js/password.js"></script>
       <script src="js/popup.js"></script>
</main>
<?php include('includes/footer.php'); ?>
</body>