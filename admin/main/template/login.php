<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>

<?php @session_start();  require_once '../../settings/db.php'; require_once '../../settings/class/login.php'; require_once '../../settings/code/login.php'; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Giris</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    <div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
    <div class="login-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-md-5">
                    <div class="form-input-content">
                        <div class="card card-login">
                            <div class="card-header text-center d-block">
                                <a href="index-2.html">
                                    <h4 class="mb-0 p-2"><strong>Blog Page</strong></h4>
                                </a>
                            </div>
                            <div class="text-center my-3">
                                <img class="rounded-circle" src="https://img.icons8.com/bubbles/2x/administrator-male.png" width="80" height="80" alt="">
                            </div>
                            <div class="card-body">
                                <form method="POST" action="#">
                                        <input type="hidden" name="id" value="<?=$getir['id'] ?>">
                                        <input type="hidden" name="username" value="<?=$getir['username'] ?>">
                                    <div class="form-group mb-4">
                                        <input type="email"  name="email" class="form-control" placeholder="İstifadəçi">
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="password" class="form-control" name="pass" placeholder="Şifrə">
                                    </div>
                                  
                                
                                    <button class="btn btn-primary btn-block border-0" name="tesdiq" type="submit">Daxil ol</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
    <!-- Common JS -->
    <script src="../../assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/quixnav.js"></script>
</body>


</html>