<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classeLoginDAO
 *
 * @author Casa
 */
require_once 'conexao.php';

class classeLoginDAO {

    //Funçao que vai logar
    public function fazerLogin($cpfouemail, $senha) {
        try {
            $pdo = conexao::getInstance();
            //pesquisa nas duas tabelas
            $sql = "
  
    SELECT idFuncionario,email,nome,senha,perfil FROM funcionario where email=:cpfouemail   and senha=:senha or cpf=$cpfouemail and
senha=:senha    ";
            $smtp = $pdo->prepare($sql);
            $smtp->bindValue(':cpfouemail', $cpfouemail);
            $smtp->bindValue(':senha', $senha);            
            $smtp->execute();
            $usuario = $smtp->fetch(PDO::FETCH_ASSOC);
            if ($smtp->rowCount() == 1) {
                session_start();
                $_SESSION['usuarioLogado'] = 1;
                $_SESSION['nomeUsuarioLogado'] = $usuario['nome'];
                $_SESSION['senhaUsuarioLogado'] = $usuario['senha'];
                $_SESSION['perfilUsuarioLogado'] = $usuario['perfil'];
                if (isset($usuario['idCliente'])) {
                    $_SESSION['idUsuario'] = $usuario['idCliente'];
                } else {
                    $_SESSION['idUsuario'] = $usuario['idFuncionario'];
                }
                return $usuario;
            }
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
    
    //busca o usuario por id
    public function buscarUsuarioPorId($id) {
        try{
        $pdo = conexao::getInstance();
        $sql = 'SELECT nome,email,senha,cpf from funcionario where idFuncionario=:idFuncionario
        union
        SELECT nome,email,senha,cpf from cliente where idCliente=:idCliente
    
       ';
        $pesq = $pdo->prepare($sql);
        $pesq->bindValue(':idFuncionario', $id);
        $pesq->bindValue(':idCliente', $id);
        $pesq->execute();
        $array = array();
        while($pronto=$pesq->fetchObject(__CLASS__)){
        $array[]=$pronto;    
        }
        return $array;
        }
        catch(PDOException $mostraerro){
            echo $mostraerro->getMessage();
        }
    }
    public function atualizarUsuario($id,$senha,$perfil){
    try{
        $pdo = conexao::getInstance();
    if($perfil==1):
    $sql = 'update  funcionario set senha=:senha where idFuncionario=:id';
    else:
      $sql = 'update cliente set senha=:senha where idCliente=:id';   
    
    endif;
    $exec=$pdo->prepare($sql);
   
    $exec->bindValue(':senha', $senha);
    $exec->bindValue(':id', $id);
    $exec->execute();
    return $exec;
    
    }
    
    catch(PDOException $mostrarerro){
        echo $mostrarerro->getMessage();
    }
    }
//    public function painelAlterarSenha($alterarClienteId, $alterarClienteSenha) {
//        try {
//            $pdo = conexao::getInstance();
//            $buscar = $pdo->prepare("UPDATE cliente SET senha=:senha WHERE idcliente=:idCliente ");
//
//          
//            $atualizar = $buscar->bindValue(':senha', $alterarClienteSenha);
//            $atualizar = $buscar->bindValue(':idCliente', $alterarClienteId);
//            return $atualizar = $buscar->execute();
//        } catch (PDOException $erro) {
//            echo $erro->getMessage();
//        }
//    }

    //tira a sessao logado
    public function fazerLogout() {
        try {

            unset($_SESSION['usuarioLogado']);
            //redireciona pra index
           $_SESSION['msg'] = 'Você foi desconectado!';
        header('location:index.php?msg=aviso');
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

}
