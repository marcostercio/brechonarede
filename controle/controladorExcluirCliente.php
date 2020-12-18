<?php
require_once 'modelo/DAO/classeClienteDAO.php';
if(isset($_GET['idCliente'])){
$idCliente =$_GET['idCliente']; 
}
$clientedao = new classeClienteDAO();
$excluir=$clientedao->excluirCliente($idCliente);
if($excluir){
    echo "<script type='text/javascript'>
     alert('Usuario excluido com sucesso!');
     location.href='index.php';
     </script>";
}

?>