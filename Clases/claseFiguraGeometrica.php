
<?php

		class FiguraGeometrica
		{
			
			protected $_color;
			protected $_superficie;
			protected $_perimetro;


			function __construct()
			{

			}

			function getColor()
			{
				return this.$_color;
			}

			function setColor($color)
			{
				this.$_color= $color;
			}



			public function ToString ();

			public abstract function Dibujar();

			protected abstract function CalcularDatos();


			
		}
?>
