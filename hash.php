<?php
	echo "\n\n *** HASH GENERATOR *** ";
	echo "\n\n *** Code by Aryo *** ";
	echo "\n\n *** API by INDOSEC *** ";
	echo "\n\n === 1. Hash Generator === ";
	echo "\n\n === 2. Hash Cracker === ";
	echo "\n\n(*)Masukkan nomor (1/2) : ";
	$lol = trim(fgets(STDIN));
	switch ($lol) { 
		case 1: 
		echo "\n\n(*)Masukkan text : ";
		$text = trim(fgets(STDIN));
		$params = "?action=custom&value=$text&type=md5";
		$hash = file_get_contents("http://indosec.web.id/api/ultra_hash.php" . $params);
		 $datas = json_decode($hash);
		 $a = $datas->data->md5;
		 echo "HASH ===> $a";
		 break;

		 case 2: 
  		 echo "\n\n(*)Masukkan hash : ";
   		 $hhh = trim(fgets(STDIN));
    	$params = "?action=dec&value=$hhh";
    	$hash = file_get_contents("http://indosec.web.id/api/ultra_hash.php" . $params);
    	 $datas = json_decode($hash);

    	 if($datas->data == 'Tidak Ditemukan'){
 			echo "HASH Tidak Valid | $hhh";
 		}else{
 			echo "TEXT ===> $datas->data ";
}
		}