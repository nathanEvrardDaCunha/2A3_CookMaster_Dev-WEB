<!DOCTYPE html>
<html>
	
    	<?php session_start(); 
        $title = 'Boutique'; 
        include('../views/includes/head.php');
        include('../views/includes/header.php');?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="../../assets/css/style.css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

        <main>
<body>

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
			<a href="shop-delivery.php"><li class="list-group-item"><strong>Service de livraison</strong></li></a>
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



</body>
</html>
        </main>
        <?php include('../views/includes/footer.php') ?>
	</body>
</html>