<?php 
$nome = isset($_POST['nome'])? $_POST['nome']: "[Sem nome]";
$matricula = isset($_POST['matricula'])? $_POST['matricula']: "[N/A]";
$turma = isset($_POST['turma'])? $_POST['turma']: "[Sem turma]";
$turno = isset($_POST['turno'])? $_POST['turno']: "[Sem turno]";
$curso = isset($_POST['curso'])? $_POST['curso']: "[Curso não Declarado]";
$indice = 0;
if($nome != "[Sem nome]"){
	$indice++;
} else{	
	$indice = 0;
}



/*$aluno = array($indice, $nome ,$matricula ,$turma ,$turno , $curso);*/

?>