<?php

class Login{
	public function ADGetir($email)
	{
		global $db;
		$getir=$db->prepare("SELECT * FROM admin WHERE email = :email");
		$getir->execute(['email' => $email]);
		$x=$getir->fetch(PDO::FETCH_ASSOC);
		
		return $x;
	}
	public function APGetir($post)
	{
		global $db;
		$getir = $db->prepare("SELECT * from admin where email=:mail");
		$getir->execute(array('mail'=>$mail));
		$goster=$getir->fetch(PDO::FETCH_ASSOC);
		return $goster > 0 ? 1 : 0;
	}
	public function Giris($post){
		global $db;

		$massiv=array("=","*","/","'","\"","and","or","not","&","|","!","select","delete","update","insert","order","by","limit","inner",",");
		$mail=str_replace($massiv,"", strip_tags(strtolower($post['email'])));
		$pass=strip_tags(md5($post['pass']));
		$admin=$db->prepare("SELECT * from admin where email=:mail and sifre=:pass and status=:status");
		$admin->execute(array(
			'mail'=>$mail,
			'pass'=>$pass,
			'status'=>1
		));
		$say=$admin->rowCount();
		$admin_getir=$admin->fetch(PDO::FETCH_ASSOC);
		if ($say==1) {
			$_SESSION['admin_user']=$admin_getir['username'];
			$_SESSION['admin_email']=$mail;
			//var_dump($_SESSION);exit;//die($_SESSION["admin_email"]);
			return 1;
		}
		else{
			return 0;
		}	
		
	}
	public function Getir($mail)
	{
		global $db;
		$getir = $db->prepare("SELECT * from admin where email=:mail");
		$getir->execute(array('mail'=>$mail));
		$say=$getir->rowCount();
		return $say > 0 ? 1 : 0;
	}

	public function Yoxla($email)
	{
		return $email==$_SESSION['admin_email'] && $this->Getir($email) ? 1 : 0;

	}

	public function Yoxla2(){
		return isset($_SESSION['admin_email']);
	}




public function R_Getir($post)
{
	global $db;
	$getir=$db->prepare("SELECT * FROM admin where id=:e");
	$getir->execute(array('e'=>$post['id']));
	$x=$getir->fetch(PDO::FETCH_ASSOC);

		return $x;

}public function Redakte($post,$id)
	{
		global $db;

		$username=trim(strip_tags($_POST['username']));
		$mail=trim(strip_tags($_POST['email']));
		$sifre=trim(strip_tags($_POST['sifre']));
		$ok_sifre=md5($sifre);

		$sekil_ad=$_FILES['sekil']['name'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$size=$_FILES['sekil']['size'];
		$type=$_FILES['sekil']['type'];
		$k_sekil=$post['k_sekil'];
		$tipler=array("image/jpeg","image/png");
		if($size>0){
			if (in_array($type,$tipler)) {

			$yol="../../../sekil/profil/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(200,200);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$sekil_ad;
				//die($sekil_yol);
					$yenile=$db->prepare("UPDATE admin set 
						username=:u,
						email=:e,
						" . ($sifre ? 'sifre=:s,' : '') . "
						sekil=:sekil
						where id=:id
						");

					$params  = [
						'u'=>$username,
						'e'=>$mail,
						's'=>$ok_sifre,
						'sekil'=>substr($sekil_yol,9),
						'id'=>$id
					];

					if(!$sifre) unset($params['s']);

					$update=$yenile->execute($params);
					
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
			$yenile=$db->prepare("UPDATE admin set 
					username=:u,
					email=:e
					" . ($sifre ? ',sifre=:s' : '') . "
					where id=:id
				");
			$params = [
				'u'=>$username,
				'e'=>$mail,
				's'=>$ok_sifre,
				'id'=>$id
			];
			
			if(!$sifre) unset($params['s']);

			$update=$yenile->execute($params);

			// $insan = new Insan();
			// $insan->ad = $post['ad'];
			// $insan->soyad = $post['soyad'];
			// $insan->yash = $post['yash'];
			// $insan->save();

			if($update){
				return 1;
			}else{
				return 0;
			}
		}

	}

	public function ElaveEt($post)
	{
			$username=trim(strip_tags($_POST['username']));
		$mail=trim(strip_tags($_POST['email']));
		$sifre=trim(strip_tags($_POST['sifre']));
		$ok_sifre=md5($sifre);
		global $db;
		$sekil_ad=$_FILES['sekil']['name'];
		$tmp=$_FILES['sekil']['tmp_name'];
		$size=$_FILES['sekil']['size'];
		$type=$_FILES['sekil']['type'];
		$tipler=array("image/jpeg","image/png");
		if($size>0){
			if (in_array($type,$tipler)) {

				$yol="../../../sekil/yemekler/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(1416,990);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$sekil_ad;
				$elaveet=$db->prepare("INSERT into admin set 
					username=:u,
						email=:e,
						sifre=:s,
						status=:status,
						sekil=:sekil
						
					
					");
				$ins=$elaveet->execute(array(
					'u'=>$username,
						'e'=>$mail,
						's'=>$ok_sifre,
						'status'=>1,
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
}

?>