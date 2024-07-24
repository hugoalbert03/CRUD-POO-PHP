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
    <a href="index.php" target="__self">Voltar</a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Turma</th>
            <th>Turno</th>
            <th>Modalidade</th>
            <th colspan="2">Controles</th>
        </tr>
       <?php           
            $conteudo = file_get_contents("dados.txt");
            $vals = explode(";",$conteudo);
            
            
            
            if($conteudo == false){
                echo "<h3 style='color:red;'>Registro sem valor</h3>";
            } else {
                foreach($vals as $valores){
                    $v = explode(",", $valores);
                    echo "<tr>";   
                        foreach($v as $dados){
                            echo "<td>$dados</td>";
                        }    
                        echo "<td><a href='editar.php'>Editar</a></td>";
                        echo "<td><a href=''>Excluir</a></td>";
                    echo "</tr>";
                
                }
                
            }
         
        ?>
    </table>
</body>
</html>