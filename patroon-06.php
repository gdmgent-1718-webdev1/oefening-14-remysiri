<?php

	$title = "Patroon 6";

	for ($row = 0; $row < 9; $row++) {
		for ($col = 0; $col < 9; $col++) {
			if ($col%3 == 0) {
				echo '<div class="red_circle"></div>';
			} elseif ($col%3 == 1) {
				echo '<div class="green_circle"></div>';
			} elseif ($col%3 == 2) {
				echo '<div class="blue_circle"></div>';
			}
		}
		echo '<br/>';
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title;?></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
</body>
</html>