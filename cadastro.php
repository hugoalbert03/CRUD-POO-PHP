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
    <?php 
        require_once 'classCadastro.php'; 
        if($_POST['curso'] == "Selecione"){
             echo "<h1>Cadastro negado!</h1>";
             echo "<b>Volte e selecione a Modalidade</b>";
        } else {
            echo "<h1>Cadastro com sucesso!</h1>";
            $cad = new Aluno($nome, $matricula, $turma, $turno, $curso); 
                $arquivo = fopen("dados.txt", "a+");
                if($arquivo){

                       foreach($cad as $valor){

                           fwrite($arquivo, $valor. PHP_EOL);
                       }

                        fclose($arquivo);


                }
        }
       
    ?>
</body>
</html>