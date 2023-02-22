<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Calcular Volum del Tronc d'un Con</title>
</head>
	<body>
		<p><u>RESULTAT</u></p>		
		<?php
			require 'operacions.php';
			$operacio = new operacions();
			$volum = $operacio->TroncCon($_GET["h"], $_GET["r1"] , $_GET["r2"]);;
			echo "<p>El Volum és igual: $volum</p>";			
		?>
		<a href="index.html">Torna a la pàgina anterior</a>
	</body>
</html>