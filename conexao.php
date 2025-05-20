<?php 

// Conectando ao banco de dados
$conexao = new mysqli("localhost", "root", "", "crud");



// Verificando erro na conexão
if ($conexao->connect_error) { 
    die("Erro de conexão: " . $conexao->connect_error);
}
?>

