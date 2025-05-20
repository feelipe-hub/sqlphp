<?php
 include 'conexao.php';
  
 if($_SERVER["REQUEST_METHOD"]== "POST"){
    $id=$_POST['id'];
   

    
    $sql = "DELETE FROM formulario  WHERE id=$id";

    if($conexao->query($sql)=== TRUE){

        echo "usuario excluido!";

    }else{
        echo "erro:" .$conexao->error;  
    
        $conexao->close();
    }
}


?>