<?php 

$slider = new Slider();

$getir = $slider->Getir();


if (isset($_POST['s_elave'])) {
	$x = $slider->ElaveEt($_POST);
	$x == 1 ? header("Location:slider.php?status=ok") : header("Location:slider-elave.php?status=no");
}

if (isset($_POST['s_deaktiv'])) {
	$deyis = $slider->Deaktiv($_POST);
	$deyis == 1 ? header("Location:slider.php?status=ok") : header("Location:slider.php?status=no");
}

if (isset($_POST['s_aktiv'])) {
	$deyis = $slider->Aktiv($_POST);
	$deyis == 1 ? header("Location:slider.php?status=ok") : header("Location:slider.php?status=no");
}

if (isset($_POST['redakte_et'])) {
	$id = $_POST["id"] ;
	header("Location:slider-redakte.php?id=$id");
}

if (isset($_POST['s_yenile'])) {
	$deyis = $slider->Redakte($_POST);
	$id = $_POST["id"] ;
	$deyis == 1 ? header("Location:slider.php?status=ok") : header("Location:slider-redakte.php?id=$id");
}
if (isset($_POST['sil'])) {
$sil=$slider->Sil($_POST);
$sil == 1 ? header("Location:slider.php?status=ok") : header("Location:slider.php?status=no");
}
?>