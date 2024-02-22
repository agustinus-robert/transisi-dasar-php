<?php
	$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

	$str_to_array = explode(" ",$nilai);
	$str_to_array2 = explode(" ",$nilai);
	$jml_data_array = count($str_to_array);
	$jumlah = array_sum($str_to_array);

	//ambil nilai rata-rata
	$rata_rata = $jumlah / $jml_data_array;
	
	rsort($str_to_array);
	asort($str_to_array2);

	$str_tuju_tertinggi = [];
	$str_tuju_terendah = [];

	foreach($str_to_array as $index => $value){
		if($index < 7){
			$str_tuju_tertinggi[] = $value;
		}
	}

	$i = 0;
	foreach($str_to_array2 as $index => $value){
			$str_tuju_terendah[$i] = $value;
			$i++;
	}

	$to_str_tuju_terendah = [];
	foreach($str_tuju_terendah as $index => $value){
		if($index < 7){
			$to_str_tuju_terendah[] = $value;
		}
	}

	

	echo "Nilai rata-rata: ".$rata_rata."</br>";
	echo "Nilai tujuh tertinggi: ".implode(" ", $str_tuju_tertinggi)."</br>";
	echo "Nilai tujuh terendah: ".implode(" ", $to_str_tuju_terendah)."</br>";