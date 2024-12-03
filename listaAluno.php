<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecione a turma</title>
</head>
<body>
    <form action="mostraAluno.php">
    <label for="turmas">Selecione a turma:</label>
	<select name="idturmas"> 
    <?php
    include 'conexão.php';
    $comandoSQL = 'SELECT * FROM `turmas`';

    foreach($conexao->query($comandoSQL) as $linha){
        echo"<option value = '{$linha['id']}'>{$linha['nome']}</option>";
    }

?>
</select>
	<input type="submit">
    </form>
</body>
</html>
