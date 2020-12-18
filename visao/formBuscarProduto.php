<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1><i class="procurar"></i>Buscar Produto</h1>
<form class="buscarform" action="index.php?ctrl=controladorBuscarProduto" method="post">
    <fieldset>
        
        <label for="por">Por:</label>
        <select name="por" id="por">
            <option value="">Selecione</option>
            <option value="nome">Nome</option>
            <option value="genero">Genero</option>
            <option value="tamanho">Tamanho</option>
            <option value="tipo">Tipo</option>
            <option value="cor">Cor</option>
            <option value="preco">Preco</option>
        </select>
        <label for="valor"></label>
        <input type="search" id="valor" name="valor" placeholder="Preencha aqui"></input>
        <input type="submit" value="Pesquisar"></input>
    </fieldset>    
    
</form>
<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>