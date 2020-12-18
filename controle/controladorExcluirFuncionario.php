<?php
require_once 'modelo/DAO/classeFuncionarioDAO.php';
if(isset($_GET['idFuncionario'])){
$idFuncionario =$_GET['idFuncionario']; 
}
$clientedao = new classeFuncionarioDAO();
$excluir=$clientedao->excluirFuncionario($idFuncionario);
if($excluir){
    echo "<script type='text/javascript'>
     alert('Cliente excluido com sucesso!');
     location.href='index.php';
     </script>";
}

?>