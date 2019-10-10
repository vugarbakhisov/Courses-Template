<?php 
class rezervasiya{


	public function Rgetir()
	{
		global $db;
		$getir=$db->prepare("SELECT * FROM rezervasiya");
		$getir->execute();
		$x=array();
		while ($rgetir = $getir->fetch(PDO::FETCH_ASSOC)){
			array_push($x,$rgetir);
		}

		return $x;
	}
	public function Tesdiq($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE rezervasiya set status=:status where id=:id");
		$x=$deyis->execute(array(
			'status'=>"tesdiq",
			'id'=>$post['id']
		));

		return $x == 1 ? 1 : 0;

	}public function Legv($post)
	{
		global $db;

		$deyis = $db->prepare("UPDATE rezervasiya set status=:status where id=:id");
		$x=$deyis->execute(array(
			'status'=>"legv",
			'id'=>$post['id']
		));

		return $x == 1 ? 1 : 0;

	}
}






 ?>