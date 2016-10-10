<?php


class Mascota
{

	private $nombre;
	private $edad;
	private $fecha;
	private $tipo;
	private $sexo;

	
	function __construct()
	{
		# code...
	}


	public function getNombre()
	{
		return $this->nombre;
	}
	public function getEdad()
	{
		return $this->edad;
	}
	public function getFecha()
	{
		return $this->fecha;
	}
	public function getTipo()
	{
		return $this->tipo;
	}
	public function getSexo()
	{
		return $this->sexo;
	}


	public function setNombre($valor)
	{
		$this->nombre=$valor;
	}
	public function setEdad($valor)
	{
		$this->edad=$valor;
	}
	public function setFecha($valor)
	{
		$this->fecha=$valor;
	}
	public function setTipo($valor)
	{
		$this->tipo=$valor;
	}
	public function setSexo($valor)
	{
		$this->sexo=$valor;
	}


	









}













?>