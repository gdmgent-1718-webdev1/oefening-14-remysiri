<?php

	$title = "Patroon 11";

	for ($row = 0; $row < 9; $row++) {
		for ($col = 0; $col < 9; $col++) {
			if ($row < $col + 5 && $row > 3 - $col) {
				echo '<div class="red_circle"></div>';
			} else {
				echo '<div class="green_circle"></div>';
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