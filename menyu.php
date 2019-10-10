<?php require_once"header.php"; ?>

<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Menu</h2>
<p>Bütün Yeməklər</p>
</div>
</div>
</div>
</section>

<section class="menu menu2">
<div class="container">
<div class="row">
<div class="col-md-12">

</div>
</div>
<div>
<div class="row">
<div class="col-md-12">
<div class="menu-tags4">
<span data-filter="*" class="tagsort4-active">Bütün Yeməklər</span>

</div>
</div>
</div>

<?php for ($i=0; $i <count($y_getir) ; $i++) { 
	
 ?>
<div class="menu-item4 col-sm-4 col-xs-12 breakfast desserts starter">
<div class="menu-info">
<a href="#">
<img src="<?=$y_getir[$i]['sekil'] ?>" class="img-responsive" alt="" />
<div class="menu4-overlay">
<h4><?=$y_getir[$i]['ad'] ?></h4>
<p><?=$y_getir[$i]['melumat'] ?></p>
<span class="price"><?=$y_getir[$i]['qiymet'] ?> AZN</span>
</div>
</a>
</div>
</div>
<?php } ?>




</div>

</section>


<?php require_once"footer.php"; ?>
