<?php

	$title = "Patroon 3";

	for ($row = 0; $row < 9; ++$row) {
		for ($col = 0; $col < $row; $col++) {
			echo '<div class="red_circle"></div>';
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