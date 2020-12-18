<?php
require_once 'modelo/DAO/classeProdutoDAO.php';
if(isset($_GET['idProduto'])){
$idProduto =$_GET['idProduto']; 
}
$clientedao = new classeProdutoDAO();
$excluir=$clientedao->excluirProduto($idProduto);
if($excluir){
    echo "<script type='text/javascript'>
     alert('Produto excluido com sucesso!');
     location.href='index.php?ctrl=controladorBuscarProduto';
     </script>";
}

?>