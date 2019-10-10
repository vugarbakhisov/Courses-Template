<?php 

class Xidmet{

	public function Getir()
	{
		global $db;
		$getir = $db->prepare("SELECT * from xidmet order by id DESC");
		$getir->execute();
		$x = array();

		while ($xidmet = $getir->fetch(PDO::FETCH_ASSOC)){
			array_push($x,$xidmet);
		}

		return $x;
	}
public function R_Getir($post)
	{
		global $db;
		$getir = $db->prepare("SELECT * from xidmet where id=:id ");
		$getir->execute(array('id'=>$post['id']));
		$x= $getir->fetch(PDO::FETCH_ASSOC);

		return $x;
	}

	public function Deaktiv($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE xidmet set status=:status where id=:id");
		$x=$deyis->execute(array(
			'status'=>0,
			'id'=>$post['id']
		));

		return $x == 1 ? 1 : 0;

	}

	public function Aktiv($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE xidmet set status=:status where id=:id");
		$x=$deyis->execute(array(
			'status'=>1,
			'id'=>$post['id']
		));

		return $x == 1 ? 1 : 0;

	}

	public function Sil($post)
	{
		global $db;

		$deyis = $db->prepare("DELETE from xidmet  where id=:id");
		$x=$deyis->execute(array(
			'id'=>$post['id']
		));

		if ($x) {
			$sekil = $post['sekil'];
			unlink("../../../$sekil");
			return 1;
		}
		else{
			return 0;
		}

	}

	public function ElaveEt($post)
	{
		global $db;
		$sekil_ad=$_FILES['sekil']['name'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$size=$_FILES['sekil']['size'];
		$type=$_FILES['sekil']['type'];
		$tipler=array("image/jpeg","image/svg+xml","image/png");
		if($size>0){
			if (in_array($type,$tipler)) {

				$yol="../../../sekil/xidmet/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$sekil_ad;
				$elaveet=$db->prepare("INSERT into xidmet set 
					basliq=:ad,
					yazi=:y,
					sekil=:sekil

					");
				$ins=$elaveet->execute(array(
					'ad'=>$post['basliq'],
					'y'=>$post['yazi'],
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
		$tipler=array("image/jpeg","image/svg+xml","image/png");
		if($size>0){
			if (in_array($type,$tipler)) {

				$yol="../../../sekil/xidmet/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$sekil_ad;
				$yenile=$db->prepare("UPDATE  xidmet set 
					basliq=:ad,
					yazi=:y,
					sekil=:sekil

					");
				$update=$yenile->execute(array(
					'ad'=>$post['basliq'],
					'y'=>$post['yazi'],
					'sekil'=>substr($sekil_yol,9)
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
			$yenile=$db->prepare("UPDATE xidmet set 
				basliq=:basliq,
					yazi=:mezmun
				where id=:id
				");
			$update=$yenile->execute(array(
				'basliq'=>$post['basliq'],
				'mezmun'=>$post['mezmun'],
				'id'=>$post['id']
			));
			if($update){
				return 1;
			}else{
				return 0;
			}
		}	
	}

	
}

?>