<html>
<head>
	<title>Aplicacion 8</title>
</head>
<body>

	<?php

		$v [1] = 90;
		$v [30] = 30;
		$v ['e'] = 99;
		$v ['hola'] = 'mundo';

		foreach ($v as $dato) 
		{
			//echo "$dato";
			var_dump($dato);
			echo "<br>";
		}

	?>
</body>
</html>