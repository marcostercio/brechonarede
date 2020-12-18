<?php
require_once 'modelo/DAO/classeClienteDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$novoClienteDAO = new classeClienteDAO();
$clientes =$novoClienteDAO->listarClientes();

 echo "<h1><i class='cliente'></i>Clientes</h1>";
if(isset($clientes)){
//varre os objetos
    foreach($clientes as $clientesBuscados){
   
    echo "<div class='mostrabuscausuario'>";
    echo "<ul class='mostraruser'>";
    echo "<li><b>nome: </b>".$clientesBuscados->nome."</li>";
    echo " <li> <b>email: </b>".$clientesBuscados->email."</li>";
    echo "<a href='index.php?ctrl=controladorAlterarCliente&&idCliente=".$clientesBuscados->idCliente."'><i class='editar'></i>"; 
    echo "<a href='index.php?ctrl=controladorExcluirCliente&idCliente=".$clientesBuscados->idCliente."' onclick='return confirmDel()'><i class='lixo'></i></a>";
    echo "</ul>";
    echo "</div>";
    
    }   
    
}
else{
    echo "Nenhum usuario para listar";
}
echo "<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>";