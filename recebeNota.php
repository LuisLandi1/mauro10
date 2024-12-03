<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe Notas</title>
</head>
<body>
    <form action="salvaNota.php">
	<label for="idaluno">Id do Aluno:</label>
	<input type="text" name="idaluno"><br>
    <label for="idturma">Id da Turma:</label>
	<input type="text" name="idturma"><br>
    <label for="nota">Nota:</label>
	<input type="number" min=0 max=10 name="nota"><br>
	<input type="submit">
    </form>
</body>
</html>