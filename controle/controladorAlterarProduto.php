<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h1><i class='editar'></i>Editar Produto</h1>";
require_once "modelo/DAO/classeProdutoDAO.php";
//buscar e mostrar dados
//atualizar dados
if (isset($_GET['idProduto'])) {
    $idDoProduto = $_GET['idProduto'];
    $objId = new classeProdutoDAO();
    $buscar = $objId->pesquisarProdutoPorId($idDoProduto);
    foreach ($buscar as $pronto) {
        echo "
     <form method='post' action='index.php?ctrl=controladorAlterarProduto&att&idProduto=$idDoProduto'>
     <fieldset>
        <legend>Editar </legend>
        <label for ='foto'>Foto</label>
        <p><input type='text' name='foto' id='foto' value='$pronto->foto'></p>
        <label for ='tipo'>Nome</label>
        <p><input type='text' name='nome' id='nome' value='$pronto->nome'></p>
        <label for ='tipo'>tipo</label><br>
        <select name='tipo' id='tipo'>
         <option value='calcado'>calçado</option>
         <option value='acessorios'>acessório</option>
                <option value='vestimentos'>Vestimentos</option>
        </select><br>
        <label for ='cor'>Cor</label>
       <p> <input type='text'id='senha' name='cor' value='$pronto->cor'></p>
        <label for ='tamanho'>Tamanho</label>
       <p> <input type='text'id='senha' name='tamanho' value='$pronto->tamanho'></p>
        <label for ='cor'>Genero</label>
       <p> <input type='text'id='genero' name='genero' value='$pronto->genero'></p>
        <label for ='cor'>Preco</label>
       <p> <input type='text'id='preco' name='preco' value='$pronto->preco'></p><br><br>
        <label for='descricao'>Descrição:</label>
        <textarea name='descricao' value='$pronto->descricao' placeholder='sobre o produto'>$pronto->descricao</textarea><br><br>
        <p><input type='submit' value ='Alterar' onclick='return confirmAlt()'></p>
    </fieldset>
     </form>";
        //se o formulario for enviado com att na url ele recebe e atualiza
        if (isset($_GET['att'])) {

            $fotoform = $_POST['foto'];
            $nomeform = $_POST['nome'];
            $tipoform = $_POST['tipo'];
            $corform = $_POST['cor'];
            $tamanhoform = $_POST['tamanho'];
            $generoform = $_POST['genero'];
            $precoform = $_POST['preco'];
            $descricaoform = $_POST['descricao'];
            $atualize = new classeProdutoDAO();
            $atualize->alterarProduto($_GET['idProduto'], $fotoform, $nomeform, $corform, $tamanhoform, $generoform, $precoform,$descricaoform);
            if ($atualize)
                echo '<script type="text/javascript">alert("Produto alterado com sucesso!");
            location.href="index.php?link=formBuscarProduto";</script>';
            else
                echo '<script type="text/javascript">alert("Erro ao alterar Produto!");
            location.href="index.php?link=formBuscarProduto";</script>';
        }

        //dados form
    }
} else {
    echo ' <script type="text/javascript">
    alert("Produto não especificado!");
    location.href="index.php";
    </script>';
}
 echo "<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>";