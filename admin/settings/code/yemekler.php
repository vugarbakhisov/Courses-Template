<?php 

$yemekler = new Yemekler();
$y_getir = $yemekler->Getir();
$getir= $yemekler->K_Getir();





$sira=$yemekler->Sira();
$x = array();
for ($i=0; $i <count($sira) ; $i++) { 
	array_push($x,$sira[$i]['sira']);
}



if (isset($_POST['y_elave'])) {
	$x = $yemekler->ElaveEt($_POST);
	$x == 1 ? header("Location:yemekler.php?status=ok") : header("Location:yemekler-elave.php?status=no");
}if (isset($_POST['y_redakte_et'])) {
	$id = $_POST["id"] ;
	header("Location:yemek-redakte.php?id=$id");
}
if (isset($_POST['y_aktiv'])) {
	$deyis=$yemekler->Y_Aktiv($_POST);
		$deyis == 1 ? header("Location:yemekler.php?status=ok") : header("Location:yemekler.php?status=no");
}if (isset($_POST['y_deaktiv'])) {
	$deyis=$yemekler->Y_Deaktiv($_POST);
		$deyis == 1 ? header("Location:yemekler.php?status=ok") : header("Location:yemekler.php?status=no");
}
if (isset($_POST['y_yenile'])) {
	$deyis=$yemekler->Redakte($_POST);
	$deyis==1 ? header("Location:yemekler.php?status=ok") : header("Location:yemek-redakte.php?status=no");
}
if (isset($_POST['k_elave'])) {
	$x = $yemekler->k_elaveet($_POST);
	$x==1 ? header("Location:kateqoriya.php?status=ok") : 0;
}if (isset($_POST['sil'])) {
	$sil=$yemekler->Sil($_POST);
	$sil==1 ? header("Location:yemekler.php?status=silindi!") : header("Location:yemekler.php?status=silinmedi...");
}if (isset($_POST['k_sil'])) {
	$sil=$yemekler->K_Sil($_POST);
	$ysil=$yemekler->Y_Sil($_POST);

	$sil && $ysil==1 ? header("Location:kateqoriya.php?status=silindi!") : header("Location:kateqoriya.php?status=silindi...");
}
if (isset($_POST['k_aktiv'])) {
	$aktiv=$yemekler->K_Aktiv($_POST);
	$aktiv == 1 ? header("Location:kateqoriya.php?status=ok") : header("Location:kateqoriya.php?status=no");
}
	if (isset($_POST['k_deaktiv'])) {
	$deaktiv=$yemekler->K_Deaktiv($_POST);
	$deaktiv == 1 ? header("Location:kateqoriya.php?status=ok") : header("Location:kateqoriya.php?status=no");

	}
?>