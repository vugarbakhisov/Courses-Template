<?php 


class Haqqinda{

	public function Getir()
	{
		global $db;

		$getir = $db->prepare("SELECT * from haqqinda");
		$getir->execute(); 

		$x=$getir->fetch(PDO::FETCH_ASSOC);

		return $x;

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

				$yol="../../../sekil/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(603,519);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$sekil_ad;
				$yenile=$db->prepare("UPDATE haqqinda set 
					Basliq=:bas,
					mezmun=:mezmun,
					video=:video,
					sekil=:sekil

					");
				$update=$yenile->execute(array(
					'bas'=>$post['basliq'],
					'mezmun'=>$post['mezmun'],
					'video'=>$post['video'],
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
			$yenile=$db->prepare("UPDATE haqqinda set 
				Basliq=:bas,
				mezmun=:mezmun,
				video=:video

				");
			$update=$yenile->execute(array(
				'bas'=>$post['basliq'],
				'mezmun'=>$post['mezmun'],
				'video'=>$post['video']
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