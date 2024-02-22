
<html>
<head>
	<title></title>
	<style>
		.black_white {
			color: white;
			background-color: black;
		}
	</style>
</head>
	<body>
		<table>

	<?php 
		$black_list = [1, 2, 5, 7, 10, 11, 13, 14, 17, 19, 22, 23, 25, 26, 29, 31, 34, 35, 37, 38, 41, 43, 46, 47, 49, 50, 53, 55, 58, 59, 61, 62];

		$number = range(1,64);
	
		for($i = 0; $i < count($number); $i++){
		
			if($number[$i] % 8 == 0){
				echo '<td style="text-center">'.$number[$i]."</td></tr>";
			} else {

				echo '<td '.(in_array($number[$i], $black_list) ? 'class="black_white"' : "").' style="text-center">'.$number[$i]."</td>";	
			}
		

		}

	?>
		</table>
	</body>
</html>