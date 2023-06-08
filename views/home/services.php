<!DOCTYPE html>
<html>
	
    	<?php session_start(); 
        $title = 'Services'; 
        include('../views/includes/head.php');
        include('../views/includes/header.php');?>

        <main>
            <a href="lecon">Lecons</a>
            <a href="noschefs">Nos chefs</a>
            <a href="domicile">Cours à domicile</a>
            <a href="jsp">Prestataires</a>
        </main>
        <?php include('../views/includes/footer.php') ?>
	</body>
</html>

