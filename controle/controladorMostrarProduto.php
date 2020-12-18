<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h1><i class='novo'></i>Novos Produtos</h1>";
require_once 'modelo/DAO/classeProdutoDAO.php';
$obj = new classeProdutoDAO();
$func = $obj->amostraDeProdutos();
if (isset($func)) {
    foreach ($func as $dados) {
//se nao achar a img ele poem a padrao
        if (file_exists('img/produtos/'.$dados->foto.'.jpg')):
            //adicionar foto
            $ft = "<img src='img/produtos/$dados->foto.jpg' >";
        else:
            $ft = "<img src='img/semft.jpg' >";
        endif;
        
echo "<div class='box'>
      
<a href='index.php?ctrl=controladorInformacaoProduto&&pdt=$dados->idProduto'>
$ft
<span class='titulo'>".substr($dados->nome, 0, 15)."</span>
  
<span class='price'><p> R$".number_format($dados->preco,'2',',','.')." </p></span>

</a>
</div>

    ";
    }
}
else {

    echo "Nao encontramos nenhum Produto!";
}
