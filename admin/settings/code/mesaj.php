<?php 

$mesaj= new MESAJ();

$data = $mesaj->Getir();
$x= $mesaj->MGetir();

if (@$_GET['status']=="oxundu") {
	$mesaj->Tesdiq($_GET) ? header("Location:mesaj.php?status=ok") : header("Location:mesaj.php?status=no");
}



 ?>