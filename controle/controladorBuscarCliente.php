<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require "modelo/DAO/classeusuarioDAO.php";
$valor = $_POST['valor'];
$por=$_POST['tipo'];
$novousuarioDAO = new classeusuarioDAO();
//$Usuario = $novousuarioDAO->pesquisarusuarioPorNome($valor,$por);
if(isset($Usuario)){
   
    echo "<h1> Usuario</h1>";
    
    foreach($Usuario as $usuarioVarrido){
         echo "<div class='mostrabuscausuario'>";
          echo "<ul class='mostraruser'>";
        echo "<li><b>Nome:</b>".$usuarioVarrido->nome."</li>";
        echo " <li><b>Email:</b>".$usuarioVarrido->email."</li>";
        echo " <a href='index.php?ctrl=controladorAlterarusuario&idusuario=".$usuarioVarrido->idusuario. "' ><i class='editar'></i></a>";
        echo "  <a href='index.php?ctrl=controladorExcluirusuario&idusuario=".$usuarioVarrido->idusuario. "' onclick='return confirmDel()'><i class='lixo'></i></a>";
        
        echo "</ul>";
        echo "</div>";
        
    }
   
    
}
else{
        echo "Ninguem encontrado!";
    }
    echo "<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>";
?>

