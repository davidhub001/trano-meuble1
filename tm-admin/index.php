﻿<?php
include 'connect.php';

?><!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Trano Meublé | Admin::Accueil</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-purple authentication sidebar-collapse">


<div class="page-header">
    <div class="page-header-image" style="background-image:url(../images/properties-9.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="post" action="<?= $_SERVER['PHP_SELF']?>">
                    <div class="header">
                        <div class="logo-container">
                            <img src="../images/tm-logo/trano-meuble.png" alt="Trano Meublé">
                        </div>
                        <h5>S'Indentifier</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" placeholder="Identifiant" name='identifiant'>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                            <input type="password" placeholder="Mot de passe" class="form-control" name='password'/>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <!-- <a href="dashboard.html" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">Entrer</a> -->
                        <button class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">Entrer</button>
                        <h6 class="m-t-20"><a href="forgot-password.html" class="link">Mot de passe oublié?</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
   <footer class="footer">
        <div class="container">
            
            <div class="copyright">
                Trano Meublé 2022 | 
                <span> by <a href="mailto:gasykara@gmail.com" target="_blank">Gasykara TIC</a></span>
            </div>
        </div>
    </footer>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
//=============================================================================
$('.form-control').on("focus", function() {
    $(this).parent('.input-group').addClass("input-group-focus");
}).on("blur", function() {
    $(this).parent(".input-group").removeClass("input-group-focus");
});
</script>
</body>
</html>