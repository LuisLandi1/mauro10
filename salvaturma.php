<?php

include 'conexão.php';

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['nome'];


$codigoSQL = "INSERT INTO `turmas` (`id`, `nome`) VALUES (NULL, :nm)";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome']));

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