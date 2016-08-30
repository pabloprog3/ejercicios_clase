<?php

abstract class FigurasGeometricas
{
	
	protected $_color;
	protected $_perimetro;
	protected $_superficie;

	public function getColor()
	{
		return $this->_color
	}

	public function setColor($unColor)
	{
		$this->color = $unColor;
	}


	function __construct()
	{
		$this->CalcularDatos();
	}

	public abstract function Dibujar()
	{

	}

	protected function CalcularDatos($p, $s)
	{
		$this->_perimetro = $p;
		$this->_superficie = $s;

	}

	public function toString()
	{
		echo "hoLA";
	}

}

/**
* 
*/



	







?>