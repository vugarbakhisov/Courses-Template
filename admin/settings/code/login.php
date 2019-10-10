<?php 
if (session_status() == PHP_SESSION_NONE) {session_start();}
$login = new Login();
$email = $_SESSION["admin_email"] ?? '';
$getir = $login->ADGetir($email);





	
	

if (isset($_POST['admin_yenile'])) {
	$redakte=$login->Redakte($_POST,$getir['id']);
	$id = $_POST["id"] ;
	$redakte == 1 ? header("Location:index.php?status=ok") : header("Location:profil.php?status=no");
}
	

if (isset($_POST['admin_redakte'])) {
	$id=$_POST['id'];
	header("Location:profil.php?id=$id");
}




if (isset($_POST['tesdiq'])) {
	$id=$_POST['id'];
	$login->Giris($_POST) ? header("Location:index.php?id=$id") : header("Location:login.php?status=zirt");
}

if (isset($_POST['tesdiq'])) {
	$x=$admin->AGetir($_POST);
	$id=$_POST['email'];
	$x==1 ? 1 : 0;
}

if (isset($_POST['elave_et'])) {
	$elave=$login->Elaveet($_POST);
	$elave== 1 ? header("Location:index.php?status=ok") : header("Location:profil-elave.php?status=no");
}

 ?>