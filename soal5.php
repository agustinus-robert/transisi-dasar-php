<?php 
	$str = "DFHKNQ";

	$bagi_string = str_split($str);

	$str_gabung = '';
	foreach($bagi_string as $index => $value){
		if($index == 0){
			$str_gabung .= chr(ord($value) + 1);
		} else if($index == 1){
			$str_gabung .= chr(ord($value) - 2);
		} else if($index == 2){
			$str_gabung .= chr(ord($value) + 3);
		} else if($index == 3){
			$str_gabung .= chr(ord($value) - 4);
		} else if($index == 4){
			$str_gabung .= chr(ord($value) + 5);
		} else if($index == 5){
			$str_gabung .= chr(ord($value) - 6);
		}
	}

	echo 'String Awal: '.$str.'<br />';
	echo 'String Akhir: '.$str_gabung;
?>