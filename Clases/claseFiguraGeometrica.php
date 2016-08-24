
<?php

		 abstract class FiguraGeometrica
		{
			
			protected $_color;
			protected $_superficie;
			protected $_perimetro;


			function __construct()
			{
				$this->_color = "azul";
				$this->_superficie = 10;
				$this->_perimetro = 15;
			}

			function getColor()
			{
				return $this->$_color;
			}

			function setColor($color)
			{
				$this->_color= $color;
			}



			//public function ToString ();

			public abstract function Dibujar();

			protected abstract function CalcularDatos();


			
		}
?>
