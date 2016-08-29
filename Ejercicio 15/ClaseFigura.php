<?php

abstract class FiguraGeometrica
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
		# code...
	}

	public abstract function Dibujar()
	{

	}

	protected abstract function DevolverDatos()
	{

	}

	public function toString()
	{

	}

}




?>