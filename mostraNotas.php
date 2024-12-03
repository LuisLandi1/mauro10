<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos da Turma</title>
</head>
<body>
    <form action="mostraAluno.php">
    <label for="nota">Notas</label>
    <?php
    include 'conexão.php';
    $idd = $_GET['idalunos'];
    $comandoSQL = "SELECT  * FROM `notas` WHERE `id_aluno` = $idd";

    foreach($conexao->query($comandoSQL) as $linha){
       $nota = $linha['valor']; 
       echo "<br>$nota";
    }

?>
    </form>
</body>
</html>
