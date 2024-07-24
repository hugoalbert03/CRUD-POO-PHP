<?php 
	require_once "users.php";

class Aluno{
	public $nome;
	public $matricula;
	public $turma;
	public $turno;
	public $modalidade;

	public function __construct($nm,$mat,$turm,$turn,$curso){
		$this->nome = "$nm ,";
		$this->matricula = "$mat ,";
		$this->turma = "$turm ,";
		$this->turno = "$turn ,";
		$this->modalidade = "$curso ;";
	}
}

?>