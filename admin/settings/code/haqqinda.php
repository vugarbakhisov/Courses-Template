<?php 
	
	$haqqinda = new Haqqinda();

	$getir=$haqqinda->Getir();

	if (isset($_POST['h_yenile'])) {
		
		$deyis=$haqqinda->Redakte($_POST);
		$deyis ? header("Location:haqqinda.php?status=ok") : header("Location:haqqinda.php?status=no");
	}

 ?>