<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classeProdutoDAO
 *
 * @author Casa
 */
require_once 'conexao.php';

class classeProdutoDAO {

    //put your code here


    public function cadastrarProduto(classeProduto $objProduto) {
        try {
            $pdo = conexao::getInstance();
            $sql = "INSERT INTO produto(nome,foto,genero,tipo,cor,tamanho,preco,descricao)VALUES(:nome,:foto,:genero,:tipo,:cor,:tamanho,:preco,:descricao)";
            $cadastrar = $pdo->prepare($sql);
            $cadastrar->bindValue(':nome', $objProduto->getNome());
            $cadastrar->bindValue(':foto', $objProduto->getFoto());
            $cadastrar->bindValue(':genero', $objProduto->getGenero());
            $cadastrar->bindValue(':tipo', $objProduto->getTipo());
            $cadastrar->bindValue(':cor', $objProduto->getCor());
            $cadastrar->bindValue(':tamanho', $objProduto->getTamanho());
            $cadastrar->bindValue(':preco', $objProduto->getPreco());
            $cadastrar->bindValue(':descricao', $objProduto->getDescricao());
            return $cadastrar->execute();
        } catch (PDOException $mostraErro) {
            echo $mostraErro->getMessage();
        }
    }

    public function amostraDeProdutos() {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * from produto  order by idproduto desc limit 12";
            $pesq = $pdo->prepare($sql);
            $pesq->execute();
            $array = array();
            while ($joga = $pesq->fetchObject(__CLASS__)) {

                $array[] = $joga;
            }

            return $array;
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
//    public function barraDePesquisa($valor){
//    try{
//       $pdo = conexao::getInstance();
//      
//       $pesquisa = $pdo->prepare("SELECT * FROM produto WHERE nome like '%:nome%' OR descricao like '%:descricao%'");
//       $pesquisa->bindValue(':nome', $valor);
//       $pesquisa->bindValue(':descricao', $valor);
//       $pesquisa->execute();
//        $retorno = array();
//                while ($valores = $pesquisa->fetchObject(__CLASS__)) {
//                    $retorno[] = $valores;
//                }
//
//                return $retorno;
//    }catch(PDOException $erro){
//    echo $erro->getMessage();    
//    }
//    }
    public function buscarProduto($por, $valor) {
        try {
            $pdo = conexao::getInstance();


            switch ($por) {
                case "":
                    $sql = "SELECT * from produto order by idproduto desc";
                    break;
                case "preco":
                    $sql = "SELECT * from produto where preco like '%$valor%'";
                    break;
                case "nome":
                    $sql = "SELECT * from produto where nome like '%$valor%'";


                    break;
                case "tamanho":
                    $sql = "SELECT * from produto where tamanho like '%$valor%'";
                    break;
                case "cor":
                    $sql = "SELECT * from produto where cor like '%$valor%'";

                    break;
                case "genero":
                    $sql = "SELECT * from produto where genero like '%$valor%'";

                    break;
                case "tipo":
                    $sql = "SELECT * from produto where tipo like '%$valor%'";

                    break;
            }
            $pesquisa = $pdo->prepare($sql);
            $pesquisa->execute();
            //se nao encontrar nenhum usuario retorna a msg de erro e redireciona
            if (!$pesquisa->rowCount() == 1) {
                echo '<script type="text/javascript">
         alert("Nenhum produto encontrado com valor informado!");
         location.href ="index.php?link=formBuscarProduto";    
    </script>';
            } else {
                $retorno = array();
                while ($valores = $pesquisa->fetchObject(__CLASS__)) {
                    $retorno[] = $valores;
                }

                return $retorno;
            }
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
    public function informacaoProduto($pdt){
        try{
        $pdo=conexao::getInstance();
        $sql = "select * from produto where idproduto=:produto";
        $pesquisa = $pdo->prepare($sql);
        $pesquisa->bindValue(':produto', $pdt);
        $pesquisa->execute();
        $array = array();
        while($valores = $pesquisa->fetchObject(__CLASS__)){
        $array[] = $valores;   
        }
        return $array;
        }
        catch(PDOException $erro){
            echo $erro;
        }
    }
//    public function pesquisaBarra($valor){
//        try{
//        $pdo=conexao::getInstance();
//        $sql = "select * from produto where nome like ':nome'";
//        $pesquisa = $pdo->prepare($sql);
//        $pesquisa->bindValue('%:nome%', $valor);
//        $pesquisa->execute();
//        $array = array();
//        while($valores = $pesquisa->fetchObject(__CLASS__)){
//        $array[] = $valores;   
//        }
//        return $array;
//        }
//        catch(PDOException $erro){
//            echo $erro;
//        }
//    }
    public function pesquisaBarra($nome){
    $pdo = conexao::getInstance();
    $pesquisa = $pdo->prepare('SELECT * FROM produto WHERE nome like :nome');
    $pesquisa->bindValue(":nome",'%'.$nome.'%');
    $pesquisa->execute();
    $array= array();
    while($result = $pesquisa->fetchObject(__CLASS__)){
    $array[] = $result;
    
    }
    return $array;
   // $idProdutoarray = array();
    
   
    }
    public function ProdutosCliente($sexo, $precomin, $precomax, $nomeproduto, $pg) {
        $numero = 12;
        $apartir =($pg==1) ? 1 : ($pg * $numero)-$numero;
        $pdo = conexao::getInstance();
        if ($sexo == '' && $precomin == '' && $precomax == '' && $nomeproduto == '') {
            $sql = "SELECT * FROM produto where idproduto >= $apartir  limit $numero ";
        } elseif ($sexo != '' && $precomin == '' && $precomax == '' && $nomeproduto == '') {
            $sql = "SELECT * FROM produto where genero='$sexo' and idProduto>=$apartir  limit $numero";
        } elseif ($sexo == '' && $precomin != '' && $precomax == '' && $nomeproduto == '') {
            $sql = "SELECT * FROM produto where preco between $precomin and $precomax  and idProduto>=$apartir  limit $numero ";
        } elseif ($sexo == '' && $precomin == '' && $precomax != '' && $nomeproduto == '') {
            $sql = "SELECT * FROM produto where preco between $precomin and $precomax and idProduto>=$apartir  limit $numero ";
        } elseif ($sexo == '' && $precomin != '' && $precomax != '' && $nomeproduto == '') {
            $sql = "SELECT * FROM produto where preco between $precomin and $precomax and idProduto>=$apartir  limit $numero";
        } elseif ($sexo == '' && $precomin == '' && $precomax == '' && $nomeproduto != '') {
            $sql = "SELECT * FROM produto where nome like '%$nomeproduto%' and idProduto>=$apartir  limit $numero";
        } elseif ($sexo != '' && $precomin == '' && $precomax == '' && $nomeproduto != '') {
            $sql = "SELECT * FROM produto WHERE genero='$sexo' AND nome like '%$nomeproduto%' and idproduto>=$apartir  limit $numero";
        }

        $pesquisa = $pdo->prepare($sql);
        $pesquisa->execute();
        $armazem = array();
        while ($result = $pesquisa->fetchObject(__CLASS__)) {
            $armazem[] = $result;
        }
        return $armazem;
    }
 public function excluirProduto($idProduto){
    try{
        $pdo = conexao::getInstance();
        $excluirProduto=$pdo-> prepare("DELETE FROM produto WHERE idProduto=:idProduto");
        $excluirProduto ->bindValue(':idProduto',$idProduto);
        return $excluirProduto->execute();
    }   
    catch(PDOException $erro){
        echo $erro->getMessage();
    }
        
    }
    public function pesquisarProdutoPorId($idDoProduto){
    $pdo = conexao::getInstance();
    $pesquisa = $pdo->prepare('SELECT * FROM produto WHERE idProduto=:idProduto');
    $pesquisa->bindValue(':idProduto',$idDoProduto);
    $pesquisa->execute();
    $array= array();
    while($result=$pesquisa->fetchObject(__CLASS__)){
    $array[]=$result;
    
    }
    return $array;
   // $idProdutoarray = array();
    
   
    }
     public function alterarProduto($alterarProdutoId,$alterarProdutoFoto,$alterarProdutoNome,$alterarProdutoCor,$alterarProdutoTamanho,$alterarProdutoGenero,$alterarProdutoPreco,$descricao){
    try{
     $pdo = conexao::getInstance();
     $buscar = $pdo->prepare("UPDATE produto SET foto=:foto,nome=:nome,cor=:cor,tamanho=:tamanho,genero=:genero,preco=:preco,descricao=:descricao WHERE idProduto=:idProduto ");
     
     $atualizar=$buscar->bindValue(':foto',$alterarProdutoFoto);
     $atualizar=$buscar->bindValue(':nome',$alterarProdutoNome);
     $atualizar=$buscar->bindValue(':cor',$alterarProdutoCor);
     $atualizar=$buscar->bindValue(':tamanho',$alterarProdutoTamanho);
     $atualizar=$buscar->bindValue(':genero',$alterarProdutoGenero);
     $atualizar=$buscar->bindValue(':preco',$alterarProdutoPreco);
       $atualizar=$buscar->bindValue(':descricao',$descricao);
     $atualizar=$buscar->bindValue(':idProduto',$alterarProdutoId);
   
     return $atualizar=$buscar->execute();
    }
   
    
    catch(PDOException $erro){
    echo $erro->getMessage();    
    }
       
    }
}
