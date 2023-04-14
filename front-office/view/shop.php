<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop | Cook Master</title>
     <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>

<!-- A METTRE DANS LA NAV BAR 
    <form class="d-flex">
        <button class="btn btn-outline-dark" type="submit">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
        </button>
    </form> !-->
	<header class="bg-imgCookMaster d-flex justify-content-center align-items-center">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white" id="shopTitleBg">
                <h1 class="display-4 fw-bolder">Bienvenue sur la boutique de Cook Master</h1>
                <p class="lead fw-normal text-white-50 mb-0">Choisissez une catégorie</p>
            </div>
        </div>
    </header>

<!--
	<div class="containerCategoriesShop">
		<ul class="list-group d flex" id="myList">
			<li class="list-group-item">Ustensiles de cuisine</li>
    		<li class="list-group-item">Casseroles et poêles</li>
    		<li class="list-group-item">Robots culinaires </li>
    		<li class="list-group-item">Vaisselle et couverts</li>
    		<li class="list-group-item d-none">Appareils de cuisson</li>
    		<li class="list-group-item d-none">Accessoires de cuisine</li>
    		<li class="list-group-item d-none">Rangement de cuisine</li>
    		<li class="list-group-item d-none">Livres de recettes et guides de cuisine.</li>
		<ul>
		<button id="showMoreBtn" class="btn btn-primary mt-3">Afficher plus</button>

	</div>


<script>
  var showMoreBtn = document.getElementById("showMoreBtn");
  var listItems = document.querySelectorAll("#myList li");

  // Afficher les 4 premiers éléments
  for (var i = 0; i < 4; i++) {
    listItems[i].classList.add("d-block");
  }

  // Gérer le clic sur le bouton "Afficher plus"
  showMoreBtn.addEventListener("click", function() {
    // Parcourir les éléments restants et afficher les 4 suivants
    for (var i = 4; i < listItems.length; i++) {
      if (listItems[i].classList.contains("d-none")) {
        listItems[i].classList.remove("d-none");
        listItems[i].classList.add("d-block");
      }
      // Arrêter d'ajouter les éléments si les 8 éléments ont été affichés
      if (document.querySelectorAll("#myList li.d-block").length === listItems.length) {
        showMoreBtn.disabled = true;
        break;
      }
    }
  });
</script>
!-->


	<div class="containerPageShop"> 
	  <div class="SectionCategoryShop mt-3">
	    <h2>Catégories</h2>
	    <ul class="list-group">
			<a><li class="list-group-item active" data-file="shop-cat-1.php">Voir tout</li></a>
			<a><li class="list-group-item" data-file="shop-cat-2.php">Ustensiles de cuisine</li></a>
			<a><li class="list-group-item" data-file="shop-cat-3.php">Casseroles et poêles</li></a>
			<a><li class="list-group-item" data-file="shop-cat-4.php">Robots culinaires</li></a>
			<a><li class="list-group-item" data-file="shop-cat-5.php">Vaisselle et couverts</li></a>
			<a><li class="list-group-item" data-file="shop-cat-6.php">Appareils de cuisson</li></a>
			<a><li class="list-group-item" data-file="shop-cat-7.php">Accessoires de cuisine</li></a>
			<a><li class="list-group-item" data-file="shop-cat-8.php">Rangement de cuisine</li></a>
			<a><li class="list-group-item" data-file="shop-cat-9.php">Livres de recettes et guides de cuisine</li></a>
	    </ul>
	  </div>

	  <div class="elementShopCategory">
	    <?php

	      include_once 'shop-cat-1.php';
	    ?>
	  </div>
	</div>

	<script>

	    const listItems = document.querySelectorAll('.list-group-item');
	    const elementShopCategory = document.querySelector('.elementShopCategory');

	    listItems.forEach(item => {
	      item.addEventListener('click', () => {
	        listItems.forEach(item => item.classList.remove('active'));
	        item.classList.add('active');
	        const file = item.getAttribute('data-file');
	        elementShopCategory.innerHTML = '';
	        includeFile(file);
	      });
	    });

	    function includeFile(file) {
	      const xhr = new XMLHttpRequest();
	      xhr.onreadystatechange = function() {
	        if (this.readyState === 4 && this.status === 200) {
	          elementShopCategory.innerHTML = this.responseText;
	        }
	      };
	      xhr.open('GET', file, true);
	      xhr.send();
	    }
  </script>


	</script>

</body>
</html>