<html>
<head>
	<title>Aplicacion 10 (Arrays de Arrays)</title>
</head>
<body>
	<?php

		$lapicera1 = array('Color' => 'Azul' , 'Marca' => 'Parker' , 'Trazo' => 'Grueso', 'Precio' => '$5');
		$lapicera2 = array('Color' => 'Verde' , 'Marca' => 'Bic' , 'Trazo' => 'Mediano', 'Precio' => '$6');
		$lapicera3 = array('Color' => 'Roja' , 'Marca' => 'Uniball' , 'Trazo' => 'Fino', 'Precio' => '$7');


		$lapiceras = array($lapicera1,$lapicera2,$lapicera3);

		foreach ($lapiceras as $lapicera ) 
		{
			echo $lapicera["Color"]."<br>";

			echo $lapicera["Marca"]."<br>";
			
			echo $lapicera["Trazo"]."<br>";
			
			echo $lapicera["Precio"]."<br>";
		}

	?>

</body>
</html>