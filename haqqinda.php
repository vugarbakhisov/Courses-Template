<?php require_once "header.php"; ?>

<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase wow fadeInDown" style="">Haqqinda</h2>
<p class="wow fadeInUp">Lorem İpsum – dizayn nəşrlərində istifadə olunan düzgün olmayan mətndir. Dəqiq quruluşa malik </p>
</div>
</div>
</div>
</section>

<section class="about2">
<div class="container">
<div class="row wow fadeInUp">
<div class="col-md-5">
<img src="<?=$hgetir['sekil'] ?>" class="img-responsive" alt="" />
</div>
<div class="col-md-7 text-left">
<h2 class="text-left">Haqqimizida</h2>
<p><?=$hgetir['mezmun'] ?></p>

</div>
</div>
</div>
</section>

<section class="services">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<h1 class="white">XÜSUSİ XİDMƏT<small>Yanliz Bizdə</small></h1>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="services-slider wow fadeIn">
<div class="service-content text-center">
<iframe style="" width="630" height="315" src="https://www.youtube.com/embed/<?= $hgetir['video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="service-content text-center">
<img src="img/ico2.png" class="center-block" alt="" />
<h4 class="text-uppercase">Sevgi ilə xidmət edirik</h4>
<p>Bizim Kreativ Video Çarxımızı İzleye bilersiniz</p>
</div>

</div>
</div>
</div>
</div>
</section>




<?php require_once "footer.php";?>