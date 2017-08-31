<!DOCTYPE html>
<html>
<head>
	<title>titulo del <?php echo "documento" ?></title>
</head>
<body>

	<?php
		$hora = date("h:i:s");
		echo "<b>la hora es: $hora</b>";
		phpinfo();
	?>

</body>
</html>