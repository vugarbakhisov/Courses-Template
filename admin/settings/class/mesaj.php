<?php 

class MESAJ{
	public function Getir()
	{
		global $db;
		$getir = $db->prepare("SELECT * from mesaj order by tarix DESC");
		$getir->execute();
		$x = array();

		while ($rey= $getir->fetch(PDO::FETCH_ASSOC)){
			array_push($x,$rey);
		}

		return $x;
	}
	public function MGetir()
	{
		global $db;
		$getir = $db->prepare("SELECT * from mesaj order by status");
		$getir->execute();
		$x=$getir->fetch(PDO::FETCH_ASSOC);

		return $x;
	}
	
	
	public function Tesdiq($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE mesaj set status=:status where id=:id");
		$x=$deyis->execute(array(
			'status'=>"oxundu",
			'id'=>$post['id']
		));

		return $x == 1 ? 1 : 0;

	}


	public function ElaveEt($post)
	{
		global $db;
		$zererli = array("=","!","'","\"","\\","|","&","and","or","not",'select',"insert","update","delete","like","where","inner","join","*");
		$adsoyad = str_replace($zererli,"",mb_strtolower(strip_tags($post['AdSoyad'])));
		$email =str_replace($zererli,"",mb_strtolower(strip_tags($post['email'])));
		$mesaj =str_replace($zererli,"",mb_strtolower(strip_tags($post['mesaj'])));

		$elave=$db->prepare("INSERT into mesaj set 
				AdSoyad=:ads,
				email=:mail,
				mesaj=:mesaj,
				tarix=:tarix



			");
		$insert=$elave->execute(array(
			'ads'=>$adsoyad,
			'mail'=>$email,
			'mesaj'=>$mesaj,
			'tarix'=>date("Y-m-d H:i:s")
		));

		return $insert ? 1 : 0;

	}
}


?>