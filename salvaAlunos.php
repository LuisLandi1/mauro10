<?php

include 'conexão.php';

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";
echo $_GET['idturma'];


$codigoSQL = "INSERT INTO `alunos` (`id`, `nome`, `id_turma`) VALUES (NULL, :nm, :idt)";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'idt' => $_GET['idturma']));

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