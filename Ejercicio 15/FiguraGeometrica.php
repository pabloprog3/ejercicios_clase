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

/**
* 
*/
class Triangulo extends FiguraGeometrica
{

	private $_altura;
	private $_base;
	
	function __construct($b, $h)
	{
		$this->_altura = $h;
		$this->_base = $b;
	}
}


class Rectangulo extends FiguraGeometrica

{

	private $_ladoUno;
	private $_ladoDos;


	
	function __construct($l1, $l2)
	{
		$this->_ladoUno = $l1;
		$this->_ladoDos = $l2;
	}



}

	







?>