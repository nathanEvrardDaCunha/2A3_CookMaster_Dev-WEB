<!DOCTYPE html>
<html>
	
    	<?php session_start(); 
        $title = 'Demande de prestation'; 
        include('includes/head.php');
        include('includes/header.php');?>

        <section class="bannerdash"></section>

        <main>
        <body>
        
        <body>
        <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
<!-- Begin page -->
<div id="layout-wrapper">

    <div class="main-content">

       

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                    
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php" style="color:white;">
                                    <i class="mdi mdi-home-analytics"></i>Dashboard
                                </a>
                            </li>
                        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" style="color:rgba(255, 255, 255, 0.5);" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-account-edit"></i>Gestion du Profil
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-components">
                                    <a href="profile.php" class="dropdown-item">Profil</a>
                                    <a href="avatar.php" class="dropdown-item">Avatar</a>
                                    <a href="abonnement.php" class="dropdown-item">Abonnement</a>
                                    <a href="demandepresta.php" class="dropdown-item">Devenir prestataire</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" style="color:rgba(255, 255, 255, 0.5);" href="#" id="topnav-pages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-room-service"></i>Services
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Vos commandes 
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                            <a href="commandesc.php" class="dropdown-item">Commandes en cours</a>
                                            <a href="commandesf.php" class="dropdown-item">Commandes terminées</a>
                                            <a href="archives.php" class="dropdown-item">Archives</a>
                                        </div>
                                    </div>
                                    <a href="voscours.php" class="dropdown-item">Vos cours</a>
                                    <a href="vosevents.php" class="dropdown-item">Vos événements</a>
                                    <a href="vosreservations.php" class="dropdown-item">Vos réservations</a>
                                    <a href="voslocations.php" class="dropdown-item">Vos locations</a>
                                    <a href="voslocations.php" class="dropdown-item">Vos recettes</a>
                                    <a href="panier.php" class="dropdown-item">Panier</a>
                                </div>
                            </li>

                           

                            <li class="nav-item">
                              <a class="nav-link" href="messagerie.php" style="color:rgba(255, 255, 255, 0.5);">
                                  <i class="mdi mdi-email-mark-as-unread"></i>Messagerie
                              </a>
                            </li>

                            <li class="nav-item">
                              <a class="nav-link" href="calendrier.php" style="color:rgba(255, 255, 255, 0.5);">
                                  <i class="mdi mdi-calendar-month"></i>Calendrier
                              </a>
                            </li>


                            <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle arrow-none" style="color:rgba(255, 255, 255, 0.5);" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-monitor-dashboard"></i>Administration
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-more">
                                    <a href="gestionu.php" class="dropdown-item">Utilisateurs</a>
                                    <a href="gestionevent.php" class="dropdown-item">Evénements</a>
                                    <a href="gestionboutique.php" class="dropdown-item">Boutique</a>
                                    <a href="voslocations.php" class="dropdown-item">Prestataires</a>
                                    <a href="panier.php" class="dropdown-item">Recettes</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>                

        <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Devenir prestataire</h4>
    
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Gestion du profil</a></li>
                                            <li class="breadcrumb-item active">Devenir prestataire</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/simplebar.min.js"></script>

<!-- Sparkline Js-->
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Js-->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- Chart Custom Js-->
 <script src="assets/pages/knob-chart-demo.js"></script>

<!-- Morris Js-->
<script src="assets/plugins/morris-js/morris.min.js"></script>

<!-- Raphael Js-->
<script src="assets/plugins/raphael/raphael.min.js"></script>

<!-- Custom Js -->
<script src="assets/pages/dashboard-demo.js"></script>

<!-- App js -->
<script src="assets/js/theme.js"></script>

</body>

</html>
      
</body>
        </main>
        <?php include('includes/footer.php') ?>
	</body>
</html>

