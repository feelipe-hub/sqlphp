<?php
include "conexao.php";
// Verificando se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Pegando os dados do formulário e sanitizando
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $municipio = $_POST["municipio"];

    // Criando a query correta para inserir apenas o nome
    $sql = "INSERT INTO formulario (nome,telefone,municipio) VALUES ('$nome','$telefone','$municipio')";

    // Executando a query e verificando se deu certo
    if ($conexao->query($sql) === TRUE) {
        echo "DADOS SALVOS COM SUCESSO!";
    } else {
        echo "Erro ao salvar os dados: " . $conexao->error;

    
    }
}
$conexao->close();  
// Fechando a conexão com o banco

?>
