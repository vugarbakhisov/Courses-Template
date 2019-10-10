<?php require_once "admin/settings/db.php"; 
    require_once 'admin/settings/code/front-header.php';


?>




<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/tomato/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Apr 2019 19:25:01 GMT -->
<head>
<meta charset="utf-8">
<title><?=$ngetir['title'] ?></title>
<meta name="author" content="Surjith S M">

<meta name="description" >
<meta name="keywords">

<script src="../../cdn-cgi/apps/head/-mEFVS8y7qx5pVzWHQTCQu5gnVM.js"></script><link rel="shortcut icon" href="img/favicon.ico">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/plugin.css">
<link rel="stylesheet" href="css/main.css">
<!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->


<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1530003103982991');
    fbq('track', "PageView");
    </script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1530003103982991&amp;ev=PageView&amp;noscript=1" /></noscript>

</head>
<body id="intro2">
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="preloder animated">
<div class="scoket">
<img src="img/preloader.svg" alt="" />
</div>
</div>
<div class="body">
<div class="main-wrapper">

<nav class="navbar navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a    href="index.php">
<img src="img/nav-logo.png" alt="nav-logo">
</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="index.php" >Ana Səyfə</a>

</li>
<li  class="dropdown">

<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menyu</span></a>
<ul class="dropdown-menu">
<?php 
  
 
for ($i=0; $i <count($kgetir) ; $i++) { 
   

?>
     
<li>
    
    <a  href="yemek-etrafli.php?kateqori_id=<?=$kgetir[$i] ['id'] ?>" ?><?=$kgetir[$i]['kateqoriya'] ?>
    
    </a></li>
<?php } ?>
</ul>
</li>

<li class="" class="dropdown">
<a href="haqqinda.php">Haqqinda</span></a>
</li>

<li><a href="elaqe.php">Əlaqə</a></li>
</div>

</div>
</nav>