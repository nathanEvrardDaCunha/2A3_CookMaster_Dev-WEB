<header>
    <div class="navbar navbar-fixed-top navbar-default">
      <div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>
    <?php
            //include('includes/db.php');
            //$q = 'SELECT * FROM users WHERE username = :username';
            //$req = $bdd->prepare($q);
            //$req->execute([
            //            'username' => $_SESSION['username']
            //        ]);
            //$result = $req->fetch(PDO::FETCH_ASSOC);
            //$pseudo = $result['username'];
            //$avatar = $result['avatar'];
            ?>
    <ul class="menu__box">
      <div class="miniprofil">Bienvenue 
<?php
if (isset($_SESSION['username'])) {
    echo $pseudo;
}
else {
    echo 'Invité';
} 
?></div><li><a class="menu__item" href="index.php">Home</a></li>
      <li><a class="menu__item" href="boutique.php">Boutique</a></li>
      <li><a class="menu__item" href="profil.php">Gestion du profil</a></li>
      <li><a class="menu__item" href="lecons.php">Lecons de cuisine</a></li>
      <li><a class="menu__item" href="events.php">Evenements</a></li>
      <li><a class="menu__item" href="messagerie.php">Messagerie</a></li>
    </ul>
  </div>
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="index.php"><img src="images/logonavlight.png" alt="COOK MASTER"></a>
      <div class="nav-collapse">
           <?php 


/*if (isset($_SESSION['username'])) {*/
    if (strpos($_SERVER["REQUEST_URI"], "shop") !== false) { #SI ON EST DANS LA BOUTIQUE -> afficher le panier dans le header?>
    <form class="d-flex">
        <button class="btn btn-outline-dark" type="submit">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> 
        </button>
    </form><?php


    }
    echo '<a class="log-btn" href="deconnexion.php">Logout</a></li>';/*
    /*METTRE LE PROFIL ICI AVEC NOM UTILISATEUR ET COOKIES DISPONIBLES*/
}
else {
    echo '<a class="log-btn" href="connexion.php">Login</a></li>';
} */
?>
      </div>
    </div>
  </div>
</div>


</header>