<?php

	$title = "Patroon 10";

	for ($row = 0; $row < 9; $row++) {
		for ($col = 0; $col < 9; $col++) {
			if ($row == 8 - $col || $row == $col) {
				echo '<div class="red_circle"></div>';
			} elseif ($row > $col && $col < 9 - $row || $col > 8 - $row && $col > $row) {
				echo '<div class="blue_circle"></div>';
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