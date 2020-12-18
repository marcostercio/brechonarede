<?php
require_once 'modelo/DAO/classeFuncionarioDAO.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$novoFuncionarioDAO = new classeFuncionarioDAO();
$funcionarios =$novoFuncionarioDAO->listarFuncionarios();
echo "<h1><i class='funcionario'></i>Funcionarios</h1>";

if(isset($funcionarios)){
//varre os objetos
    foreach($funcionarios as $funcionariosBuscados){
        
    echo "<div class='mostrabuscausuario'>";
    echo "<ul class='mostraruser'>";
    echo "<li><b>nome: </b>".$funcionariosBuscados->nome."</li>";
    echo "<li>  <b>email: </b>".$funcionariosBuscados->email."</li>";
    echo "</ul>";
    echo "<a href='index.php?ctrl=controladorAlterarFuncionario&&idFuncionario=".$funcionariosBuscados->idFuncionario."'><i class='editar'></i>"; 
    echo "<a href='index.php?ctrl=controladorExcluirFuncionario&idFuncionario=".$funcionariosBuscados->idFuncionario."' onclick='return confirmDel()'><i class='lixo'></i></a>";
   
    echo "</div>";
    
    
    }   
    
}
else{
    echo "Nenhum usuario para listar";
}
echo "<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>";