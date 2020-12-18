<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require "modelo/DAO/classeClienteDAO.php";
$valor = $_POST['valor'];
$por=$_POST['tipo'];
$novoClienteDAO = new classeClienteDAO();
$clientes = $novoClienteDAO->pesquisarClientePorNome($valor,$por);
if(isset($clientes)){
   
    echo "<h1> Clientes</h1>";
    
    foreach($clientes as $clienteVarrido){
         echo "<div class='mostrabuscausuario'>";
          echo "<ul class='mostraruser'>";
        echo "<li><b>Nome:</b>".$clienteVarrido->nome."</li>";
        echo " <li><b>Email:</b>".$clienteVarrido->email."</li>";
        echo " <a href='index.php?ctrl=controladorAlterarCliente&idCliente=".$clienteVarrido->idCliente. "' ><i class='editar'></i></a>";
        echo "  <a href='index.php?ctrl=controladorExcluirCliente&idCliente=".$clienteVarrido->idCliente. "' onclick='return confirmDel()'><i class='lixo'></i></a>";
        
        echo "</ul>";
        echo "</div>";
        
    }
   
    
}
else{
        echo "Ninguem encontrado!";
    }
    echo "<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>";
?>

