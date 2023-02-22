<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="utf-8">
	<title>Calcular Volum d'un Ortoedre</title>
</head>
	<body>
		<p><u>RESULTAT</u></p>		
		<?php
			require 'operacions.php';
			$operacio = new operacions();
			$volum = $operacio->Ortoedre($_GET["l"]);
			echo "<p>El Volum és igual: $volum </p>";		
		?>
		<a href="index.html">Torna a la pàgina anterior</a>
	</body>
</html>