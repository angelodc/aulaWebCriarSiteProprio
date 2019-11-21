<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'usuario';
	private $nome;
	private $sobre;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setsobre($sobre){
		$this->sobre = $sobre;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, sobre) VALUES (:nome, :sobre)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':sobre', $this->sobre);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, sobre = :sobre WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':sobre', $this->sobre);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}