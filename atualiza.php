
<?php
 include 'conexao.php';
  
 if($_SERVER["REQUEST_METHOD"]== "POST"){
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $municipio=$_POST['municipio'];

    
    $sql = "UPDATE formulario SET nome='$nome', telefone='$telefone', municipio='$municipio' WHERE id=$id";

    if($conexao->query($sql)=== TRUE){

        echo "usuario atualizado!";

    }else{
        echo "erro:" .$conexao->error;  
    
        
    }
}
$conexao->close();

?>