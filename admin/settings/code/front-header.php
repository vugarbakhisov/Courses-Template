<?php 


ob_start();
require_once 'admin/settings/db.php';

/*Class*/
require_once 'admin/settings/class/nizam.php';
require_once 'admin/settings/class/umumi.php';
require_once 'admin/settings/class/haqqinda.php';
require_once 'admin/settings/class/slider.php';
require_once 'admin/settings/class/yemekler.php';
require_once 'admin/settings/class/rezervasiya.php';
require_once 'admin/settings/class/mesaj.php';





$nizam = new Nizam();
$Haqqinda = new Haqqinda();
$Slider = new Slider();
$yemekler= new yemekler();
$umumi = new Umumi();
$rezervasiya = new rezervasiya();
$mesaj = new MESAJ();



$kgetir= $yemekler->F_K_Getir();
$hgetir = $Haqqinda->Getir();
$y_getir=$yemekler->Getir();
$ngetir = $nizam->Getir();
$sgetir = $umumi->F_S_Getir();
$hgetir = $Haqqinda->Getir();
$rgetir = $rezervasiya->Rgetir();

if (isset($_POST['sifaris'])) {
	$x=$umumi->elaveet($_POST);

	if ($x) {

		header("Location:index.php?sifaris=qebul olundu");
	}else{
		header("Location:index.php?sifaris=qebul olunmadi");

	
	}
}if (isset($_POST['rey_gonder'])) {
	$mesaj->ElaveEt($_POST) ? header("Location:$url?status=ok") : header("Location:$url?status=no");
}
	if (@$_GET['kateqori_id']==!null) {
	$x=$umumi->F_Y_Getir($_GET);
	$x=$umumi->FYSGetir($_GET);
	$k=$umumi->F_SGetir($_GET);
}

	








?>