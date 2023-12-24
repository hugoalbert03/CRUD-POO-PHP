<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Registros</title>
    <style>
        table{
            margin:auto;
        }
    </style>
</head>
<body>
    <a href="index.php">Voltar</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Turma</th>
            <th>Turno</th>
            <th>Modalidade</th>
        </tr>
       <?php 
            require_once 'classCadastro.php'; 
            $cad = new Aluno($indice, $nome, $matricula, $turma, $turno, $curso);  
            echo "<tr>"; 
            foreach($cad as $dados){
                echo "<td> $dados </td>";
            }
            echo "</tr>";
            #var_dump($cad)
        ?>
    </table>
</body>
</html>