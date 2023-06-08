<!DOCTYPE html>
<html>

<?php session_start(); 
        $title = 'Inscription'; 
        include('../views/includes/head.php');
        include('../views/includes/db.php');?>

    
<div class="loginpage">   
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center min-vh-100">
                            <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="p-5">
                                            <div class="text-center mb-5">
                                            <a style="font-family: Coolvetica;font-size:30px; color:#ffa800;">cook</a><a style="font-family: Nexa;font-size:32px; color:#0c0c0b; ">MASTER</a>
                                            </div>
                                            <h1 class="h5 mb-1">Créer un compte</h1>
                                            <p class="text-muted mb-4">Pas de compte ? Créez-en un, cela vous prendre moins d'une minute.</p>
                                            <form class="user" action="verification/verifinscription.php" method="POST">
                                            <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" name="username" placeholder="Pseudo">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control form-control-user" name="prenom" placeholder="Prénom">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-control-user" name="nom" placeholder="Nom">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-user" name="email" placeholder="Adresse e-mail">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="password" class="form-control form-control-user" name="mdp" placeholder="Mot de passe">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="password" class="form-control form-control-user" name="confmdp" placeholder="Confirmer">
                                                    </div>
                                                </div>
                                                <button class="btn btn-warning btn-block waves-effect waves-light"> S'enregistrer </button>
    
                                            </form>
    
                                            <div class="row mt-4">
                                                <div class="col-12 text-center">
                                                    <p class="text-muted mb-0">Déjà inscrit ? <a href="connexion.php" class="text-muted font-weight-medium ml-1"><b>Connectez-vous</b></a></p>
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div> <!-- end .padding-5 -->
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div> <!-- end .w-100 -->
                        </div> <!-- end .d-flex -->
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
    
        <!-- App js -->
        <script src="assets/js/theme.js"></script>
    
    </body>
    
    </html>