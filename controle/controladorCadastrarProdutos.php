<?php

$nomeProduto = $_POST['nome'];
$fotoProduto = $_POST['foto'];
$tamanhoProduto = $_POST['tamanho'];
$corProduto = $_POST['cor'];
$generoProduto = $_POST['genero'];
$precoProduto = $_POST['preco'];
$tipoProduto = $_POST['tipo'];
$descricaoProduto = $_POST['descricao'];

require_once 'modelo/DAO/classeProdutoDAO.php';
require_once 'modelo/classeProduto.php';
//instancio objeto da classeProduto para seta os atributos
$objProduto = new classeProduto();
$objProduto->setNome($nomeProduto);
$objProduto->setFoto($fotoProduto);
$objProduto->setTamanho($tamanhoProduto);
$objProduto->setCor($corProduto);
$objProduto->setGenero($generoProduto);
$objProduto->setPreco($precoProduto);
$objProduto->setTipo($tipoProduto);
$objProduto->setDescricao($descricaoProduto);

//instancia a classe produtosdao pra enviar
$produtoDAO = new classeProdutoDAO;
$cadastrar = $produtoDAO->cadastrarProduto($objProduto);
//nao cadastra se houver o mesmo nome
$pdo =conexao::getInstance();
$sql = 'SELECT * FROM produto where nome=:nome';
$pesquisa = $pdo->prepare($sql);
$pesquisa->bindValue(':nome', $nomeProduto);
$pesquisa->execute();
//verifico se ja existe produto com esse nome
if($pesquisa->rowCount()!=1){
    echo "
        <script type='text/javascript'>
        alert('Ja existe um produto com esse nome!');
        location.href='visao/formCadastrarProduto.php';
        </script>";  
}
//se nao existir eu cadastro!
else{
if ($cadastrar = TRUE) {
     $_SESSION['msg'] = 'Produto cadastrado com sucesso!';
        header('location:index.php?link=formCadastrarProduto&msg=ok');
         
        
    } else {
          $_SESSION['msg'] = 'Erro ao cadastrar produto!';
        header('location:index.php?link=formCadastrarProduto&msg=erro');
        
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

