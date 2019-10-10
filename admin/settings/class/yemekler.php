<?php 
class Yemekler{

	public function F_K_Getir()
	{
		global $db;
		$getir=$db->prepare("SELECT * FROM kateqoriyalar ORDER BY id ASC");
    $getir->execute();
    $massiv = array();
  
		while ($x=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$x);
		}

		return $massiv;
}

public function Getir()
	{
		global $db;

		$getir = $db->prepare("SELECT * from yemekler");
		$getir->execute();

		$massiv = array();

		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$sl_getir);
		}

		return $massiv;

	}
	public function R_getir($post)
	{
		global $db;
		$getir = $db->prepare("SELECT * from yemekler where id=:id ");
		$getir->execute(array('id'=>$post['id']));
		$x = $getir->fetch(PDO::FETCH_ASSOC);

		return $x;
	}
public function K_Getir()
	{
		global $db;

		$getir = $db->prepare("SELECT * from kateqoriyalar");
		$getir->execute();

		$massiv = array();

		while ($sl_getir=$getir->fetch(PDO::FETCH_ASSOC)) {
			array_push($massiv,$sl_getir);
		}

		return $massiv;

	}


public function RGetir($id)
	{
		global $db;

		$getir = $db->prepare("SELECT * from kateqoriyalar where id=:id");
		$getir->execute(array('id'=>$id));

		$x=$getir->fetch(PDO::FETCH_ASSOC);

		return $x['kateqoriya'];

	}


	
	




public function Aktiv($post)
{
	global $db;
	$aktiv=$db->prepare("UPDATE yemekler set status=:status where id=:id");
	$x=$aktiv->execute(array(
		'status'=>1,
		'id'=>$post['id']
	));

	return $x==1 ? 1: 0 ;


}public function Deaktiv($post)
{
	global $db;
	$deaktiv=$db->prepare("UPDATE yemekler set status=:status where id=:id");
	$x=$deaktiv->execute(array(
		'status'=>0,
		'id'=>$post['id']
	));

	return $x==1 ? 1: 0 ;
}
public function K_Aktiv($post)
{
	global $db;
	$aktiv=$db->prepare("UPDATE kateqoriyalar set status=:s where id=:id");
	$x=$aktiv->execute(array(
		's'=>1,
		'id'=>$post['id']

	));
	return $x==1 ? 1:0;
}
public function K_Deaktiv($post)
{
	global $db;
	$deaktiv=$db->prepare("UPDATE kateqoriyalar set status=:s where id=:id");
	$x=$deaktiv->execute(array(
		's'=>0,
		'id'=>$post['id']

	));

	return $x==1 ? 1:0;
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

				$yol="../../../sekil/yemekler/";
				$image= new SimpleImage();

				$image->load($tmp);
				$image->resize(1416,990);//en hundurluk
				$image->save($tmp);
				$rnd=rand(1000,9999);
				$sekil_yol=$yol.$rnd."-".$sekil_ad;
				$elaveet=$db->prepare("INSERT into yemekler set 
					kateqori_id=:k,
					sekil=:sekil,
					ad=:ad,
					melumat=:m,
					qiymet=:qiymet
					
					");
				$ins=$elaveet->execute(array(
					'k'=>$post['kateqori_id'],
					'ad'=>$post['ad'],
					'm'=>$post['melumat'],
					'qiymet'=>$post['qiymet'],
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
				$elaveet=$db->prepare("UPDATE yemekler set 
					kateqori_id=:k,
					sekil=:sekil,
					ad=:ad,
					melumat=:m,
					seo=:seo,
					qiymet=:qiymet
					where id=:id
					
					");
				$ins=$elaveet->execute(array(
					'k'=>$post['kateqori_id'],
					'ad'=>$post['ad'],
					'm'=>$post['melumat'],
					'seo'=>$this->seo($post['kateqori_id']),
					'qiymet'=>$post['qiymet'],

					'sekil'=>substr($sekil_yol,9),
					'id'=>$post['id']
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

			$elaveet=$db->prepare("UPDATE yemekler set 
					kateqori_id=:k,
					ad=:ad,
					melumat=:m,
					qiymet=:qiymet
					where
					id=:id
					
					");
				$ins=$elaveet->execute(array(
					'k'=>$post['kateqori_id'],
					'ad'=>$post['ad'],
					'm'=>$post['melumat'],
					'qiymet'=>$post['qiymet'],
					'id'=>$post['id']
					
				));

			return 1;
		}else{
			return 0;
		}

	}
	public function Y_Aktiv($post)
	{
		global $db;
		$aktiv=$db->prepare("UPDATE yemekler set status=:s where id=:id");
		$x=$aktiv->execute(array(
			's'=>1,
			'id'=>$post['id']


		));
		return $x == 1 ? 1 : 0;
		
	}public function Y_Deaktiv($post)
	{
		global $db;
		$aktiv=$db->prepare("UPDATE yemekler set status=:s where id=:id");
		$x=$aktiv->execute(array(
			's'=>0,
			'id'=>$post['id']

			

		));
		return $x == 1 ? 1 : 0;
	}
	private function seo($str, $options = array())
	{
		$str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
		$defaults = array(
			'delimiter' => '-',
			'limit' => null,
			'lowercase' => true,
			'replacements' => array(),
			'transliterate' => true
		);
		$options = array_merge($defaults, $options);
		$char_map = array(

        // Latin symbols
			'©' => '(c)',

        // AZ
			'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G','Ə' => 'E',
			'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g','ə' => 'e',
		);
		$str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
		if ($options['transliterate']) {
			$str = str_replace(array_keys($char_map), $char_map, $str);
		}
		$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
		$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
		$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
		$str = trim($str, $options['delimiter']);
		return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
	}

	public function k_elaveet($post)
	{
		global $db;
		$k=$db->prepare("INSERT INTO kateqoriyalar set
			kateqoriya=:kateqoriya,
			sira=:s,
			seo=:seo


			");
		$x=$k->execute(array(
			'kateqoriya'=>$post['kateqoriya'],
			's'=>$post['sira'],
			'seo'=>$this->seo($post['kateqoriya'])


		));
	}
	public function Sil($post)
	{
		global $db;
		$delete=$db->prepare("DELETE FROM yemekler where id=:id");
		$x=$delete->execute(array('id'=>$post['id']));
		if ($x) {
			$sekil=$post['sekil'];
			unlink("../../../$sekil");
			return 1;
		}else{
			return 0;
		}
	}
	public function Sira()
	{
		global $db;

		$getir = $db->prepare("SELECT sira from kateqoriyalar order by sira ASC");
		$getir->execute();

		$massiv = array();
		while ($tgetir=$getir->fetch(PDO::FETCH_ASSOC)) {

			array_push($massiv,$tgetir);
			

			
		}

		//$sira .="</select>";
		sort($massiv);
		return $massiv;
	}
	public function K_Sil($post)
	{
	global $db;
	$sil=$db->prepare("DELETE FROM kateqoriyalar where id=:id");
	$x=$sil->execute(array('id'=>$post['id']));
	
	
	}
	public function Y_Sil($post)
	{
	global $db;
	$sil=$db->prepare("DELETE FROM yemekler where kateqori_id=:id");
	$x=$sil->execute(array('id'=>$post['id']));
	if ($x) {
	$sekil=$post['sekil'];
	unlink("../../../$sekil");
	}

}
}




	







 ?>