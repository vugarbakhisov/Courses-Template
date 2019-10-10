<?php ob_start();
 require_once "header.php";

 ?>
<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="text-uppercase">Menyu</h2>
<p></p>
</div>
</div>
</div>
</section>

<section class="menu menu2">

<div class="container">
<div class="row">

</div>
<div class="food-menu wow fadeInUp">
<div class="row">
<div class="col-md-12">
<div class="menu-tags4">

<span data-filter="*" class="tagsort4-active"></span>

</div>
</div>
</div>
 



<?php


	

	for ($i=0; $i <count($x) ; $i++) { 
		# code...
	
		
	

		 ?>
<div class="menu-item4 col-sm-4 col-xs-12 starter dinner desserts">
<div class="menu-info">
<img src="<?=$x[$i]['sekil'] ?>" class="img-responsive" alt="" />
<a href="">
<div class="menu4-overlay">
<h4><?=$x[$i]['ad'] ?></h4>
<p><?=$x[$i]['melumat'] ?></p>
<span class="price"><?=$x[$i]['qiymet'] ?>AZN</span>


</div>

</a>
</div>
</div>
<?php } ?>


</div>
</div>
</section>



<?php require_once "footer.php"; ?>

