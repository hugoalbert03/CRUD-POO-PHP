<?php 
	require_once "users.php";

class Aluno{
	public $id;
	public $nome;
	public $matricula;
	public $turma;
	public $turno;
	public $modalidade;

	public function __construct($ind,$nm,$mat,$turm,$turn,$curso){
		$this->id = $ind;
		$this->nome = $nm;
		$this->matricula = $mat;
		$this->turma = $turm;
		$this->turno = $turn;
		$this->modalidade = $curso;
	}
}

?>