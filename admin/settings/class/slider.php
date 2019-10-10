<?php 

class Slider{

	public function Getir()
	{
		global $db;
		$getir = $db->prepare("SELECT * from slider order by id DESC");
		$getir->execute();
		$x = array();

		while ($slider = $getir->fetch(PDO::FETCH_ASSOC)){
			array_push($x,$slider);
		}

		return $x;
	}

	public function FGetir()
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

	public function R_getir($post)
	{
		global $db;
		$getir = $db->prepare("SELECT * from slider where id=:id ");
		$getir->execute(array('id'=>$post['id']));
		$slider = $getir->fetch(PDO::FETCH_ASSOC);

		return $slider;
	}

	public function Deaktiv($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE slider set status=:status where id=:id");
		$x=$deyis->execute(array(
			'status'=>0,
			'id'=>$post['id']
		));

		return $x == 1 ? 1 : 0;

	}
	public function Aktiv($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE slider set status=:status where id=:id");
		$x=$deyis->execute(array(
			'status'=>1,
			'id'=>$post['id']
		));

		return $x == 1 ? 1 : 0;

	}

	public function ElaveEt($post)
	{
		global $db;
		$sekil_ad=$_FILES['sekil']['name'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$size=$_FILES['sekil']['size'];
		$type=$_FILES['sekil']['type'];
		$tipler=array("image/jpeg","image/png");
		if($size>0){
			if (in_array($type,$tipler)) {

				$yol="../../../sekil/slider/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(1920,845);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$sekil_ad;
				$elaveet=$db->prepare("INSERT into slider set 
					Ad=:ad,
					sira=:s,
					qiymet=:qiymet,
					tarix=:t,
					sekil=:sekil

					");
				$ins=$elaveet->execute(array(
					'ad'=>$post['ad'],
					's'=>$post['sira'],
					'qiymet'=>$post['qiymet'],
					't'=>$post['tarix'],
					'sekil'=>substr($sekil_yol,9)
				));
				if($ins){
					move_uploaded_file($tmp,$sekil_yol);
					return 1;
				}else{
					return 0;
				}

			}else{
				return 0;
			}


		}elseif ($size==0) {
			return 0;
		}

	}

	public function Redakte($post)
	{
		global $db;
		$sekil_ad=$_FILES['sekil']['name'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$size=$_FILES['sekil']['size'];
		$type=$_FILES['sekil']['type'];
		$k_sekil=$post['k_sekil'];
		$tipler=array("image/jpeg","image/png");
		if($size>0){
			if (in_array($type,$tipler)) {

				$yol="../../../sekil/slider/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(1920,845);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$sekil_ad;
				$yenile=$db->prepare("UPDATE slider set 
					Ad=:ad,
					sira=:sira,
					qiymet=:qiymet,
					sekil=:sekil
					where id=:id
					");
				$update=$yenile->execute(array(
					'ad'=>$post['ad'],
					'sira'=>$post['sira'],
					'qiymet'=>$post['qiymet'],
					'sekil'=>substr($sekil_yol,9),
					'id'=>$post['id']
				));
				if($update){
					unlink("../../../$k_sekil");
					move_uploaded_file($tmp,$sekil_yol);
					return 1;
				}else{
					return 0;
				}

			}else{
				return 0;
			}


		}elseif ($size==0) {
			$yenile=$db->prepare("UPDATE slider set 
				Ad=:ad,
				sira=:sira
				qiymet=:qiymet
				where id=:id
				");
			$update=$yenile->execute(array(
				'ad'=>$post['ad'],
				'sira'=>$post['sira'],
				'qiymet'=>$post['qiymet'],
				'id'=>$post['id']
			));
			if($update){
				return 1;
			}else{
				return 0;
			}
		}

	}

	public function Sil($post)
	{
		global $db;
	$sil=$db->prepare("DELETE from slider where id=:id");
	$x=$sil->execute(array(
		'id'=>$post['id']

	));
	if ($x) {
			$sekil = $post['sekil'];
		unlink("../../../$sekil");
		return 1;
	}else{
		return 0;
	}

}
}

?>