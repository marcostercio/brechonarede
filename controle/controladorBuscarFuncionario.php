<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require "modelo/DAO/classeFuncionarioDAO.php";
$valor = $_POST['valor'];
$por=$_POST['tipo'];
$novoFuncionarioDAO = new classeFuncionarioDAO();
$funcionarios = $novoFuncionarioDAO->pesquisarFuncionarioPorNome($valor,$por);
if(isset($funcionarios)){
   
    echo "<h1> Funcionarios</h1>";
    
    foreach($funcionarios as $funcionarioVarrido){
         echo "<div class='mostrabuscausuario'>";
          echo "<ul class='mostraruser'>";
        echo "<li><b>Nome:</b>".$funcionarioVarrido->nome."</li>";
        echo " <li><b>Email:</b>".$funcionarioVarrido->email."</li>";
        echo " <a href='index.php?ctrl=controladorAlterarFuncionario&idFuncionario=".$funcionarioVarrido->idFuncionario. "' ><i class='editar'></i></a>";
        echo "  <a href='index.php?ctrl=controladorExcluirFuncionario&idFuncionario=".$funcionarioVarrido->idFuncionario. "' onclick='return confirmDel()'><i class='lixo'></i></a>";
        echo "</ul>";
        echo "</div>";
        
    }
   
    
}
else{
        echo "Ninguem encontrado!";
    }
 
    echo "<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>";
?>

