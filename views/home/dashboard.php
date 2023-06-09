<!DOCTYPE html>
<html>
	
    	<?php session_start(); 
        $title = 'Dashboard'; 
        include('../views/includes/head.php');
        include('../views/includes/header.php');?>

        <section class="bannerdash"></section>

        <main>
        <body>
        
        <body>
        <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                        <?php include('assets/css/svg/icon_svg.php');?>
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
                                    <i class="mdi"><? include('assets/css/svg/dashboard_svg.php');?></i>Dashboard
                                </a>
                            </li>
                        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" style="color:rgba(255, 255, 255, 0.5);" href="#" id="topnav-components" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi"><? include('assets/css/svg/profile_svg.php');?></i>Gestion du Profil
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
                                    <i class="mdi"><? include('assets/css/svg/serv_svg.php');?></i>Services
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
                              <i class="mdi"><? include('assets/css/svg/messagerie_svg.php');?></i>Messagerie
                              </a>
                            </li>

                            <li class="nav-item">
                              <a class="nav-link" href="calendrier.php" style="color:rgba(255, 255, 255, 0.5);">
                                  <i class="mdi"><? include('assets/css/svg/calendrier_svg.php');?></i>Calendrier
                              </a>
                            </li>


                            <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle arrow-none" style="color:rgba(255, 255, 255, 0.5);" href="#" id="topnav-more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi"><? include('assets/css/svg/admin_svg.php');?></i>Administration
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-more">
                                    <a href="administration_utilisateurs" class="dropdown-item">Utilisateurs</a>
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
                            <h4 class="mb-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Cook Master</a></li>
                                    <li>→  Dashboard</li>
                                </ol>
                            </div>
                            
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Bienvenue sur votre dashboard,</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            PSEUDO
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress shadow-sm" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div><!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Cours à venir</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            Aucun cours
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress shadow-sm" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width:100%;">
                                    </div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div><!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Votre recette favorite</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-10">
                                        <h2 class="d-flex align-items-center mb-0">
                                            Aucune recette
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress shadow-sm" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                        <h5 class="card-title mb-0">Evenement à venir</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            Ouverture
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress shadow-sm" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;"></div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div><!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->


                <div class="row">
                    <div class="col-lg-9">

                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="card-title">Vos infos</h4>
                                        
                                    </div>

                                    <div class="col-lg-4">

                                        <h4 class="card-title">Vos contributions</h4>
                                        <p class="card-subtitle mb-4">Vos contributions à Cook Master : leçons, evenements, recettes...</p>

                                        <div class="text-center">
                                            <input data-plugin="knob" data-width="165" data-height="165"
                                                data-linecap=round data-fgColor="#000" value="12"
                                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                data-thickness=".15" />

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-3">

                        <div class="card">
                            <div class="card-body">
                            </div>
                            <!--end card body-->
                        </div>
                        <!--end card-->

                    </div><!-- end col -->

                </div>
                <!--end row-->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title d-inline-block">Incoming</h4>


                                <div class="row text-center mt-4">
                                    <div class="col-6">
                                        <h4>2</h4>
                                        <p class="text-muted mb-0">Lecons complétés</p>
                                    </div>
                                    <div class="col-6">
                                        <h4>17</h4>
                                        <p class="text-muted mb-0">Participation d'événements</p>
                                    </div>
                                </div>

                            </div>
                            <!--end card body-->

                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Messagerie</h4>
                                <p class="card-subtitle mb-4 font-size-13">Vos derniers messages
                                </p>

                                <div class="table-responsive">
                                    <table class="table table-centered table-striped table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Pseudo</th>
                                                <th>Date</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table-user">
                                                    <img src="assets/images/users/avatar-4.jpg" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                                </td>
                                                <td>
                                                   23/05/2023
                                                </td>
                                                <td>
                                                    Hey, un avis sur la dernière recette que j'ai posté ?
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="table-user">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="table-user" class="mr-2 avatar-xs rounded-circle">
                                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                                </td>
                                                <td>
                                                    19/05/2023
                                                </td>
                                                <td>
                                                    Bonjour à toi.... BIENVENUE SUR COOK....
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!--end card body-->

                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->

                
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

