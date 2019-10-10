<?php 
	
	class Nizam{

		public function Getir()
		{
			global $db;

			$x=$db->prepare("SELECT * from nizamlar");
			$x->execute();
			$data=$x->fetch(PDO::FETCH_ASSOC);
			return $data;
		}

		public function Redakte($post)
		{
			if($post['catagory']=="umumi"){
				global $db;
				$yenile=$db->prepare("UPDATE nizamlar set 
					title=:t,
					description=:description
					");
				$x=$yenile->execute(array(
					't'=>$post['title'],
					'description'=>$post['title']
				));

				return $x ? 1 : 0; 
			}

			if($post['catagory']=="elaqe"){
				global $db;
				$yenile=$db->prepare("UPDATE nizamlar set 
					unvan=:unvan,
					tel=:tel,
					ofis=:ofis,
					email=:mail,
					poct=:poct
					");
				$x=$yenile->execute(array(
					'unvan'=>$post['unvan'],
					'tel'=>$post['tel'],
					'ofis'=>$post['ofis'],
					'mail'=>$post['email'],
					'poct'=>$post['poct']
				));

				return $x ? 1 : 0; 
			}
		}
	}

 ?>