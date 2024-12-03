<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe Alunos</title>
</head>
<body>
    <form action="salvaAlunos.php">
	<label for="nome">Nome:</label>
	<input type="text" name="nome"><br>
    <label for="turmas">Turmas:</label>
    <select name="idturma"> 
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