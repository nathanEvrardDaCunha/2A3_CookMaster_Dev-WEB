<header>
  <div class="navflex"> 
    <div>
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
              <?php if (isset($_SESSION['username'])) { 
                echo $pseudo;
              } 
              else {
                echo 'Invité';
              } 
              ?>
            </div>
            <li><a class="menu__item" href="index">Home</a></li>
            <li><a class="menu__item" href="boutique">Boutique</a></li>
            <li><a class="menu__item" href="profil.php">Gestion du profil</a></li>
            <li><a class="menu__item" href="lecons.php">Lecons de cuisine</a></li>
            <li><a class="menu__item" href="events.php">Evenements</a></li>
            <li><a class="menu__item" href="messagerie.php">Messagerie</a></li>
          </ul>
      </div>
    </div>
		<div>
    <a class="brand" href="/"><img src="assets/images/nlogotr.png" alt="COOK MASTER"></a>
    </div>
		<div>
    <?php
      if (isset($_SESSION['username'])) {
        echo '<a class="log-btn" href="deconnexion.php">Logout</a></li>';
      }
      else {
        echo '<a class="log-btn" href="connexion">Login</a></li>';
      } 
    ?>
    </div>
  </div>
  <div class="navmenu">
    <ul class="snip1143">
    <?php $class = $title == 'COOK MASTER' ? 'current' : ''; ?>
      <li class="<?= $class ?>"><a href="/" data-hover="accueil">accueil</a></li>
      <?php $class = $title == 'Boutique' ? 'current' : ''; ?>
      <li class="<?= $class ?>"><a href="boutique" data-hover="boutique">boutique</a></li>
      <?php $class = $title == 'Dashboard' ? 'current' : ''; ?>
      <li class="<?= $class ?>"><a href="dashboard" data-hover="dashboard">dashboard</a></li>
      <?php $class = $title == 'Événements' ? 'current' : ''; ?>
      <li class="<?= $class ?>"><a href="events" data-hover="événements">événements</a></li>
      <?php $class = $title == 'Cuisine' ? 'current' : ''; ?>
      <li class="<?= $class ?>"><a href="cuisine" data-hover="cuisine">cuisine</a></li>
      <?php $class = $title == 'Services' ? 'current' : ''; ?>
      <li class="<?= $class ?>"><a href="services" data-hover="services">services</a></li>
    </ul>
  </div>
</header>