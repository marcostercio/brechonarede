<?php
require_once 'modelo/DAO/classeFornecedorDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$novoFornecedorDAO = new classeFornecedorDAO();
$fornecedores =$novoFornecedorDAO->listarFornecedores();
echo "<h1><i class='funcionario'></i>Fornecedores</h1>";

if(isset($fornecedores)){
//varre os objetos
    foreach($fornecedores as $fornecedoresBuscados){
        
    echo "<div class='mostrabuscausuario'>";
    echo "<ul class='mostraruser'>";
    echo "<li><b>nome: </b>".$fornecedoresBuscados->nome."</li>";
    echo "<li>  <b>email: </b>".$fornecedoresBuscados->email."</li>";
    echo "</ul>";
    echo "<a href='index.php?ctrl=controladorAlterarFornecedor&&idFornecedor=".$fornecedoresBuscados->idFornecedor."'><i class='editar'></i>"; 
    echo "<a href='index.php?ctrl=controladorExcluirFornecedor&idFornecedor=".$fornecedoresBuscados->idFornecedor."' onclick='return confirmDel()'><i class='lixo'></i></a>";
   
    echo "</div>";
    
    
    }   
    
}
else{
    echo "Nenhum usuario para listar";
}
echo "<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>";