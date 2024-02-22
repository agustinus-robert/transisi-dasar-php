<?php 
	$str = "TranSISI";

	function huruf_kecil_inputan($str){
		$arr=str_split($str);
		$h_kecil=sizeof(array_filter($arr,'ctype_lower'));
		return $h_kecil;
	}

	echo "Jumlah huruf kecil pada string <b>".$str."</b> = ".huruf_kecil_inputan($str);
?>