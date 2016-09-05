
<?php

require_once ('FiguraGeometrica.php');

class Rectangulo extends FigurasGeometricas
{
	private $_ladoUno;
	private $_ladoDos;


	
	function __construct($l1, $l2)
	{
		$this->_ladoUno = $l1;
		$this->_ladoDos = $l2;
	}

	public function Dibujar()
	{
		
	}

}




?>