<html>
<head>
	<title>Aplicacion 9 </title>
</head>
<body>

	<?php

		$lapicera1 = array('Color' => 'Azul' , 'Marca' => 'Parker' , 'Trazo' => 'Grueso', 'Precio' => '$5');
		$lapicera2 = array('Color' => 'Verde' , 'Marca' => 'Bic' , 'Trazo' => 'Mediano', 'Precio' => '$6');
		$lapicera3 = array('Color' => 'Roja' , 'Marca' => 'Uniball' , 'Trazo' => 'Fino', 'Precio' => '$7');


		var_dump($lapicera1);
		echo "<br>";
		var_dump($lapicera2);
		echo "<br>";
		var_dump($lapicera3);
		echo "<br>";
		
		foreach ($lapicera1 as $dato) 
		{
			echo "$dato <br>";
		}
		
		foreach ($lapicera2 as $dato) 
		{
			echo "$dato <br>";
		}

		foreach ($lapicera3 as $dato) 
		{
			echo "$dato <br>";
		}


	?>
</body>
</html>