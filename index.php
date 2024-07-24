<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Alunos</title>
    <style>
        body{
            padding:0 8rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Cadastro alunos</h1>
        <a href="tabela.php"> Consulta </a>
    </header>
    <main>
        <form action="cadastro.php" method="post">  
            <p>
                <label for="nome">Nome: </label><input type="text" placeholder="Ex. Hugo Albert" name="nome" maxlength="100" id="nome" required>
            </p><p>
                <label for="matricula">Matricula: </label><input type="number" min="1000" max="9999" name="matricula" id="matricula" required>
            </p><p>
                <label for="turma">Turma: </label><input type="text" placeholder="Digite sua turma" name="turma" maxlength="30" id="turma" required>
            </p><p>
                <label>Turno</label>
                <select name="turno">
                    <option value="Manhã">Manhã</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>
            </p>
            <p>
                <label>Modalidade</label>
                <select name="curso">
                    <option value="Selecione">Selecione</option>
                    <optgroup label="Musical">
                        <option value="Bateria">Bateria</option>
                        <option value="Piano">Piano</option>
                        <option value="Saxofone">Saxofone</option>
                        <option value="Guitarra">Guitarra</option>    
                    </optgroup>              
                    <optgroup label="Artes">
                        <option value="Artes Plásticas">Artes Plásticas</option>
                        <option value="Artes Cênicas">Artes Cênicas</option>
                        <option value="Teatro">Teatro</option>
                    </optgroup>
                    <optgroup label="Luta">
                        <option value="Judô">Judô</option>
                        <option value="Karatê">Karatê</option>
                        <option value="MMA">MMA</option>
                        <option value="Krav Maga">Krav Maga</option>                        
                    </optgroup>
                    <optgroup label="Computação">
                        <option value="Informática Básica">Informática Básica</option>
                        <option value="Office Básico">Office Básico</option>
                        <option value="Windows Básico">Windows Básico</option>
                        <option value="Terminal Linux">Terminal Linux</option>
                    </optgroup>                    
                </select>
            </p>
            <p>
                <button type="submit">Enviar</button>
            </p>
        </form>
    </main>
    <footer>
    </footer>
</body>
</html>