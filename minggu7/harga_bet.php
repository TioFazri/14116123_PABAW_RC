<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
		echo "Nama : ", $_GET['nama'];
		echo "<br>";
		
		echo "warna : ", $_GET['warna'];
		echo "<br>";


		$jum_kar = strlen($_GET['nama']);


		if (($jum_kar > 1) && ($jum_kar <= 10)) {
		$harga = 300*$jum_kar;
		} elseif (($jum_kar > 10) && ($jum_kar <= 20)) {
			$harga = 500*$jum_kar;
		} else {
			$harga = 700*$jum_kar;
		}


		echo "harga : Rp $harga <br>";

		function bar($color = 'blue') {
			echo '<font color ="'.$color.'"> INI CONTOH WARNA YANG DIINGINKAN</font> <br>';
		}
		bar($_GET['warna']);


		?>
	


	
</body>
</html>