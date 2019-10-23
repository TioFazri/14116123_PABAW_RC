<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	function swap (&$value, &$y) {
		echo "nilai X awal = $value <br>";
		echo "nilai Y awal = $y <br>";
		$value = $value + $y;
		$y = $value - $y;
		$value = $value - $y;
	}

	$x = 5;
	$y = 3;
	swap($x, $y);
	echo "setelah swap <br>";
	echo "X = $x <br>";
	echo "Y = $y";
	?>
</body>
</html>