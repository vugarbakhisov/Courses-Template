<?php 

$nizam = new Nizam();

$data = $nizam->Getir(); 

if (isset($_POST['u_yenile'])) {
	$x = $nizam->Redakte($_POST);
	$x ? header("Location:umumi-nizam.php?status=ok") : header("Location:umumi-nizam.php?status=no");
}
if (isset($_POST['e_yenile'])) {
	$x = $nizam->Redakte($_POST);
	$x ? header("Location:elaqe-nizam.php?status=ok") : header("Location:elaqe-nizam.php?status=no");
}

?>