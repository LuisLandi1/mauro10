<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos da Turma</title>
</head>
<body>
    <form action="mostraNotas.php">
    <label for="alunos">Selecione o Aluno:</label>
	<select name="idalunos"> 
    <?php
    include 'conexão.php';
    $id = $_GET['idturmas'];
    
    $comandoSQL = "SELECT * FROM `alunos` WHERE `id_turma` = $id";

    foreach($conexao->query($comandoSQL) as $linha){
        echo"<option value = '{$linha['id']}'>{$linha['nome']}</option>";
    }
   
?>
</select>
<button>Ver Nota</button>
    </form>
</body>
</html>
