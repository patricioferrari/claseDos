<html>
<head>
	<title>Guia PHP Parte 1 - Aplicacion 1</title>
</head>
<body>
	<?php  

		$numero=1;
	
		for ($i = 2; $numero < 1000; $i++) 
		{ 
			
			echo "A: $numero <br>";
			$numero = $numero + $i;
			
			echo "Le sumamos: $i <br>";
			//echo "Se suman: ".$numero"<br>";
			echo "La suma da: $numero <br>";

		}


		echo "Se sumaron ".$i." números <br>";



	?>
</body>
</html>