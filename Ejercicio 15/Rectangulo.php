<?php

include_once 'ClaseFigura.php';


public /**
* 
*/
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