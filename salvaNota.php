<?php

include 'conexão.php';

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['idaluno'];
echo "<br>";
echo $_GET['idturma'];
echo "<br>";
echo $_GET['nota'];


$codigoSQL = "INSERT INTO `notas` (`id`, `valor`, `id_aluno`, `id_turma`) VALUES (NULL, :nt, :ida, :idt)";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('ida' => $_GET['idaluno'], 'idt' => $_GET['idturma'], 'nt' => $_GET['nota']));

    if($resultado) {
	echo "Comando executado!";
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?>