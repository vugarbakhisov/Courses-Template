<?php ob_start(); ?><!DOCTYPE html>
<html lang="en">
<head>

    <?php 
    ob_start();
    require_once '../../settings/db.php';

    /*Class*/
    require_once '../../settings/class/nizam.php';
    require_once '../../settings/class/SimpleImage.php';
    require_once '../../settings/class/haqqinda.php';
    require_once '../../settings/class/slider.php';
    require_once '../../settings/class/yemekler.php';
      require_once '../../settings/class/rezervasiya.php';
      require_once '../../settings/class/login.php';
    require_once '../../settings/code/login.php';
    require_once '../../settings/class/mesaj.php';
    require_once '../../settings/code/mesaj.php';

   
  
    ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vugar Bakishov | Blog Page | 2019</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../../assets/plugins/owl.carousel/dist/css/owl.carousel.min.css">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <!-- Form step -->
    <link href="../../assets/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <!-- Dropify -->
    <link rel="stylesheet" href="../../assets/plugins/dropify/dist/css/dropify.min.css">
    <!-- Tagsinput -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <!-- Switchery -->
    <link href="../../assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
    <!-- Select 2 -->
    <link rel="stylesheet" href="../../assets/plugins/select2/css/select2.min.css">
    <!-- Touchspinner -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css">
    <!-- Input mask -->
    <link rel="stylesheet" href="../../assets/plugins/jasny-bootstrap/dist/css/jasny-bootstrap.min.css">
    <!-- x-editable -->
    <link href="../../assets/plugins/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <!-- Summernote -->
    <link href="../../assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="../../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="../../assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="../../assets/plugins/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="../../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="../../assets/plugins/pickadate/themes/default.css">
    <link rel="stylesheet" href="../../assets/plugins/pickadate/themes/default.date.css">


</head>

<body>

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
    <!--*******************
        Preloader end
        ********************-->


    <!--**********************************
        Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

        <!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="index.php">
                        <b class="logo-abbr">VB</b>
                        <span class="brand-title" style="font-size: 1.1em;">Vugar Bakishov</span>
                    </a>
                </div>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="fas fa-bars"></i></span>
                    </div>
                </div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->

        <!--**********************************
            Header start
            ***********************************-->
            <div class="header">    
                <div class="header-content clearfix">
                    <div class="header-right">

                        <ul class="clearfix">

                            <li class="icons">
                                <div class="user-img c-pointer">
                        
                                    <img src="../../../<?= $getir['sekil'] ?>" height="40" width="40" alt="avatar">
                                
                                    <strong class="ml-2"><?= $getir['username'] ?><span><i class="fas fa-caret-down ml-2"></i></span></strong>

                                </div>
                                <div class="drop-down dropdown-profile animated flipInX">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                   
                                        <a href="profil-elave.php"><button class="btn btn-warning" style="color: red;font-style: bold;">İstifadəçi əlavə et</button></a>
                                                <br>
                                                <br>
                                                <form method="POST" action="#">
                                                <input type="hidden" name="id" value="<?=$getir['id']?>">
                                              <button class="btn btn-danger" name="admin_redakte"><a href="profil.php?id=<?=$getir['id'] ?>"  style="color: blue;">Profilə Düzəliş et</a></button>
                                               </form>
                                               <br>
                                          
                                     
                                            <li><button class="btn btn-dark"><a href="../../../index.php">Çıxış</a></button>
                                            
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->