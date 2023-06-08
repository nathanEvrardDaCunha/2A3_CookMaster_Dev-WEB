<!DOCTYPE html>
<html>
	
    	<?php session_start(); 
        $title = 'Gestion utilisateurs'; 
        include('../views/includes/head.php');
        include('../views/includes/header.php');?>

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
                                    <a href="vosrecettes.php" class="dropdown-item">Vos recettes</a>
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
                                    <a href="prestag.php" class="dropdown-item">Prestataires</a>
                                    <a href="gestionrecettes.php" class="dropdown-item">Recettes</a>
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
                                    <h4 class="mb-0 font-size-18">Gestion des utilisateurs</h4>
    
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Administration</a></li>
                                            <li class="breadcrumb-item active">Utilisateurs</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
    
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Basic Data Table</h4>
                                        <p class="card-subtitle mb-4">
                                            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                            function:
                                            <code>$().DataTable();</code>.
                                        </p>
                                        <div class="table-responsive">
                                    <table class="table table-centered table-striped table-nowrap mb-0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Pseudo</th>
                                                    <th>Email</th>
                                                    <th>NOM Prénom </th>
                                                    <th>Contributions</th>
                                                    <th>Date d'inscription</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <tr>
                                                    <td>Tnix</td>
                                                    <td>tiger.nixon00@gmail.com</td>
                                                    <td>NIXON Tiger</td>
                                                    <td>61</td>
                                                    <td>24/05/2023</td>
                                                    <td><div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Gérer
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Bannir</a>
                                                                <a class="dropdown-item" href="#">Supprimer</a>
                                                                <a class="dropdown-item" href="#">Suspendre</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Abonnement
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Abonnement 1</a>
                                                                <a class="dropdown-item" href="#">Abonnement 2</a>
                                                                <a class="dropdown-item" href="#">Abonnement 3</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Rôle
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Utilisateur</a>
                                                                <a class="dropdown-item" href="#">Chef</a>
                                                                <a class="dropdown-item" href="#">Prestataire</a>
                                                                <a class="dropdown-item" href="#">Administrateur</a>
                                                            </div>
                                                        </div>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>garew</td>
                                                    <td>wintersg@hotmail.fr</td>
                                                    <td>WINTERS Garrett</td>
                                                    <td>63</td>
                                                    <td>25/04/2023</td>
                                                    <td><div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Gérer
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Bannir</a>
                                                                <a class="dropdown-item" href="#">Supprimer</a>
                                                                <a class="dropdown-item" href="#">Suspendre</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Abonnement
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Abonnement 1</a>
                                                                <a class="dropdown-item" href="#">Abonnement 2</a>
                                                                <a class="dropdown-item" href="#">Abonnement 3</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Rôle
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Utilisateur</a>
                                                                <a class="dropdown-item" href="#">Chef</a>
                                                                <a class="dropdown-item" href="#">Prestataire</a>
                                                                <a class="dropdown-item" href="#">Administrateur</a>
                                                            </div>
                                                        </div>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Shad005</td>
                                                    <td>shad005@yahoo.com</td>
                                                    <td>DECKER Shad</td>
                                                    <td>51</td>
                                                    <td>13/05/2023</td>
                                                    <td><div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Gérer
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Bannir</a>
                                                                <a class="dropdown-item" href="#">Supprimer</a>
                                                                <a class="dropdown-item" href="#">Suspendre</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Abonnement
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Abonnement 1</a>
                                                                <a class="dropdown-item" href="#">Abonnement 2</a>
                                                                <a class="dropdown-item" href="#">Abonnement 3</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Rôle
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Utilisateur</a>
                                                                <a class="dropdown-item" href="#">Chef</a>
                                                                <a class="dropdown-item" href="#">Prestataire</a>
                                                                <a class="dropdown-item" href="#">Administrateur</a>
                                                            </div>
                                                        </div>
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>spiderdonna</td>
                                                    <td>sniderdonna@gmail.com</td>
                                                    <td>SNIDER Donna</td>
                                                    <td>27</td>
                                                    <td>25/02/2023</td>
                                                    <td><div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Gérer
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Bannir</a>
                                                                <a class="dropdown-item" href="#">Supprimer</a>
                                                                <a class="dropdown-item" href="#">Suspendre</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Abonnement
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Abonnement 1</a>
                                                                <a class="dropdown-item" href="#">Abonnement 2</a>
                                                                <a class="dropdown-item" href="#">Abonnement 3</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Rôle
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Utilisateur</a>
                                                                <a class="dropdown-item" href="#">Chef</a>
                                                                <a class="dropdown-item" href="#">Prestataire</a>
                                                                <a class="dropdown-item" href="#">Administrateur</a>
                                                            </div>
                                                        </div>
                                                    </div></td>
                                                </tr>
                                            </tbody>
                                        </table></div>
    
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->

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
        <?php include('../views/includes/footer.php') ?>
	</body>
</html>

