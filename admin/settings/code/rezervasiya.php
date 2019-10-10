<?php 
$rezervasiya= new rezervasiya();
$r_getir=$rezervasiya->Rgetir();
if (@$_GET['status']=="tesdiq") {
	$rezervasiya->Tesdiq($_GET) ? header("Location:index.php?status=ok") : header("Location:index.php?status=no");
}
if (@$_GET['status']=="legv") {
	$rezervasiya->Legv($_GET) ? header("Location:index.php?status=ok") : header("Location:index.php?status=no");
}






 ?>