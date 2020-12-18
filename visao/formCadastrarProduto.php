<?php
require_once 'controle/controladorLoginVerificaUsuario.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Cadastrar Produtos</title>
        <meta charset="UTF-8">
    </head>
     <h1><i class='registropdt'></i>Cadastro Produtos</h1>
    <form class="cadastro" action="index.php?ctrl=controladorCadastrarProdutos" method="POST">
        <fieldset>
            <legend>Cadastrar Produtos</legend>
            <label for="nome" id="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required><br><br>
            <label for="foto" id="foto">Foto Url:</label>
            <input type="text" name="foto" id="foto" required=""><br><br>
            <label for="tamanho">Tamanho:</label>
            <input type="text" name="tamanho" id="tamanho" required=""><br><br>
            <label for="cor">Cor:</label>
            <input type="text" name="cor" id="cor" required=""><br><br>
            <label for="genero">Genero:</label>
            <select  name="genero" id="genero" required>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select><br><br>
            <label for="preco" >Preço:</label>
            <input type="text" name="preco" id="preco" required=""><br><br>
            <label for="tipo">Tipo:</label>
            <select id='tipo' name='tipo'> 
                <option value='calcado'>calçado</option>
                <option value='acessorios'>acessório</option>
                <option value='vestimentos'>Vestimentos</option>
            </select><br><br>
            <label for="estoque">Estoque:</label>
            <input type="text" name="estoque" id="estoque" required=""><br><br>
            <label for='descricao'>Descrição:</label>
            <textarea name='descricao' placeholder="sobre o produto"></textarea><br><br>
            <input type="submit" value="Cadastrar Produtos">
        </fieldset>
    </form>
    <a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>
</html>