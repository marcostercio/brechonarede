<?php

require_once 'modelo/DAO/classeProdutoDAO.php';
@$por = $_POST['por'];
@$valor = $_POST['valor'];
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pesquisaProduto = new classeProdutoDAO();
$pesquisa=$pesquisaProduto->buscarProduto($por, $valor);
echo "<h1><i class='loja'></i>Buscar Produto</h1>";
if (isset($pesquisa)) {
    foreach ($pesquisa as $resultpesq) {
        $ft = file_exists('img/produtos/'.$resultpesq->foto.'.jpg');
        echo "<div class='mostrabuscaproduto'>";
        if($ft):
            
        echo " <img src='img/produtos/$resultpesq->foto.jpg' >";
        else:
        echo " <img src='img/semft.jpg' >";
        endif;
        echo "<ul class='pdtdetalhe'>";
        
        echo "<li> <b>Nome:</b>".$resultpesq->nome."</li>";
        echo "<li> <b>Tipo:</b>".$resultpesq->tipo."</li>";
        echo " <li><b>Cor:</b>". $resultpesq->cor."</li>";
        echo " <li><b>Tamanho:</b>".$resultpesq->tamanho."</li>";
        echo " <li><b>Genero:</b>".$resultpesq->genero."</li>";
        echo "<li> <b>Preco:</b>R$".number_format($resultpesq->preco,2,',','.')."</li>";
        echo "<a href='index.php?ctrl=controladorAlterarProduto&idProduto=$resultpesq->idProduto'><i class='editar'></i></a>";
        echo "<a   href='index.php?ctrl=controladorExcluirProduto&idProduto=".$resultpesq->idProduto."' onclick='return confirmDel()' > <i class='lixo'></i></a>";
            echo "</ul>";
            echo "</div>";
    }

} else {
    echo 'nenhum produto pra listar';
}
echo "<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>";