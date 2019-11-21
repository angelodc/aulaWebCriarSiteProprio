<?php

require_once 'Crud.php';

class Experiencias extends Crud{
	
	protected $table = 'experiencias';
	private $empresa;
    private $experiencias;
    private $periodo;

	public function setempresa($empresa){
		$this->empresa = $empresa;
	}

	public function getempresa(){
		return $this->empresa;
	}

}