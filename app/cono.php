<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Calcular Volum i Superficie d'un Con</title>
</head>
	<body>
		<p><u>RESULTAT</u></p>		
		<?php
			require 'operacions.php';
			$operacio = new operacions();
			$volum = $operacio->cono($_GET["h"],$_GET["r"]);
			$superficie = $operacio->cono($_GET["h"],$_GET["r"]);
			echo "<p>El Volum és igual: " . $volum['volum']."</p>";
			echo "<p>La Superficie és igual: " . $superficie['superficie'] . "</p>";		
		?>
		<a href="index.html">Torna a la pàgina anterior</a>
	</body>
</html>