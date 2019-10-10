<?php 

class Umumi{

public function F_SGetir($post)
{
	global $db;
	 $getir = $db->prepare("SELECT * from yemekler  where kateqori_id=?");
		$getir->execute([htmlspecialchars($_GET['kateqori_id'])]);
   if ($say=!$getir->rowCount()) {
   header("Location:index.php?yemədin_getdi");
   }
   return $say;
}
	
	public function AGetir($post)
	{
		global $db;
		$getir = $db->prepare("SELECT * from admin where id=:id");
		$getir->execute(array('id'=>$post['id']));
		$admin = $getir->fetch(PDO::FETCH_ASSOC);

		return $admin;

	}

	public function FYSGetir($post)
	{
		global $db;
		$getir = $db->prepare("SELECT * from yemekler where   status=:s and kateqori_id=:id");
		$getir->execute(array('s'=>1,'id'=>$_GET['kateqori_id']));
		$x = array();

		while ($meqale= $getir->fetch(PDO::FETCH_ASSOC)){
			array_push($x,$meqale);
		}

		return $x;

}
	public function F_Y_Getir($post)
	{
		global $db;
		 $getir = $db->prepare("SELECT * from yemekler  where kateqori_id=?");
		$getir->execute([htmlspecialchars($_GET['kateqori_id'])]);
		$massiv=array();
		while ($x=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$x);
	}
	return $massiv;
}
public function elaveet($post)
{
	global $db;
	$relave=$db->prepare("INSERT INTO rezervasiya set
			vaxt=:v,
			adsoyad=:a,
			saat=:sa,
			sayi=:s,
			tel=:tel
			

		");
	$n=$relave->execute(array(
		'v'=>$post['vaxt'],
		'a'=>$post['adsoyad'],
		'sa'=>$post['saat'],
		's'=>$post['sayi'],
		'tel'=>$post['tel']

	));
	return $n;
	
}

	public function URL($page)
	{
		
		$current = $_SERVER['SCRIPT_NAME'];
		if (substr($current,0,8)==="/blog/") {
			$current = substr($current,8);
		}

		if ($current==$page) {
			return "current";
		}

		if ($current=="yemek-etrafli.php" && $page=="index.php") {
			return "current";
		}

	}

	public function F_K_Getir($id)
	{
		global $db;
		$getir=$db->prepare("SELECT * FROM kateqoriyalar where id=:id");
		$getir->execute(array('id'=>$post['id']));
		$x=$getir->fetch(PDO::FETCH_ASSOC);
		return $x;
	}
	public function F_S_Getir()
	{
		global $db;
		$getir = $db->prepare("SELECT * from slider where status=:s order by sira");
		$getir->execute(array('s'=>1));
		$x = array();

		while ($slider = $getir->fetch(PDO::FETCH_ASSOC)){
			array_push($x,$slider);
		}

		return $x;
	}
}


	



	







 ?>