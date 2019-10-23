<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

	function faktor($number) {
		if ($number < 2) {
			return 1;
		} else {
			return ($number * faktor($number-1));
		}
	}


$x = 5;
echo "faktorial $x = ";
echo faktor($x);
	?>
	
</body>
</html>