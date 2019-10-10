
<?php require_once "header.php"; ?>
<?php require_once "admin/settings/db.php"; ?>



<section class="features">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<h1 class="white"><small style=" color:white;
font-size: 40px;font-family:Arial Black, Gadget, sans-serif;">Günün Yeməkləri</small></h1>
</div>
</div>
</div>
<div class="row wow fadeInUp">
		<?php 

		$say = 0;
		for ($i=0; $i <count($sgetir) ; $i++) {
			if ($say == 3) {
				break;
			}
			$say++;

		 ?>
<div class="col-md-4 col-sm-6">
<div class="features-tile">
<div class="features-img">
<img src="<?=$sgetir[$i]['sekil'] ?>" alt="" />
</div>
<div class="features-content">
<div class="page-header">
<h1><?=$sgetir[$i]['Ad'] ?></h1>
</div>
<p><span class="price"><?=$sgetir[$i]['qiymet'] ?>AZN</span></p>
</div>
</div>
</div>
<?php } ?>

<div class="col-md-4 col-sm-6 visible-sm">
<div class="features-tile">
<div class="features-img">
<img src="img/thumb5.png" alt="" />
</div>

</div>
</div>
</div>
</div>
</section>

<section class="reservation">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<h1><small style="font-size: 40px;font-family:Arial Black, Gadget, sans-serif;">Rezervasiya</small></h1>
</div>
</div>
</div>
<div class="reservation-form wow fadeInUp">
<form id="gonder" method="POST" action="#">
<div class="row">
<div class="col-md-4 col-sm-6">
<div class="form-group">
<label for="datepicker">Tarix</label>
<input type="text" name="vaxt" class="form-control" id="datepicker" placeholder="tarixi daxil Edin" title="tarixi daxil Edin" required>
<i class="fa fa-calendar-o"></i>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="form-group">
<label for="name">Ad Soyad</label>
<input type="text" class="form-control" id="name" name="adsoyad" placeholder="Adınızı Daxil Edin" title="Adınızı Daxil Edin" required>
<i class="fa fa-pencil-square-o"></i>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="form-group">
<label for="timepicker">Saat</label>
<input type="text" class="form-control" id="timepicker" name="saat" placeholder="Saatınızı daxil Edin" title="Saatınızı daxil Edin" required>
<i class="fa fa-clock-o"></i>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="form-group">
<label for="guests">Qonaqların Sayı</label>
<input class="form-control" type="number" id="guests" name="sayi" placeholder="Qonaqların sayını Daxil edin" title="Qonaqların sayını Daxil edin" required>
<i class="fa fa-user"></i>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="form-group">
<label for="phone">Telefon Nömrəsi</label>
<input type="text" class="form-control" id="phone" name="tel" placeholder="Əlaqə nömrəsini Daxil edin" title="Əlaqə nömrəsini Daxil edin" required>
<i class="fa fa-phone"></i>
</div>
</div>
<div class="col-md-12 col-sm-12">
<div id="OT_submitWrap" class="reservation-btn">
<button name="sifaris" type="submit" class="btn btn-default btn-lg OT_TableButton">Sifariş Et</button>
</div>
</div>
</div>
</form>
</div>
<div class="reservation-footer">
<p>Əlaqə Nömrəsi: <strong><?=$ngetir['tel'] ?></strong></p>
<span></span>
</div>
</div>
</section>




<section class="menu">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<small style="font-size: 40px;font-family:Arial Black, Gadget, sans-serif;">Yeməklərimiz<small></small></h1>
</div>
</div>
</div>

<?php


$say=0;
 for ($i=0; $i <count($y_getir) ; $i++) { 
		if ($say == 10) {
			break;
		}
		$say++;
 ?>

<div class="menu-item4 col-sm-4 col-xs-12 starter dinner desserts">
<div class="menu-info">
<img src="<?=$y_getir[$i]['sekil'] ?>" class="img-responsive" alt=""/>
<a href="#">
<div class="menu4-overlay">
<h4><?=$y_getir[$i]['ad'] ?></h4>
<p><?=$y_getir[$i]['melumat'] ?></p>
<span class="price"><?=$y_getir[$i]['qiymet'] ?>AZN</span>
</div>
</a>
</div>
</div>

<?php } ?>
<div style="margin-left: 380px;" class="col-md-12">
<div class="menu-btn">
	<p class="<?= $umumi->URL("menyu.php") ?>" >
<a  class="btn btn-default btn-lg" href="menyu" role="button">Hamsina Bax</a></p>
</div>
</div>
</section>





<?php require_once "footer.php"; ?>
