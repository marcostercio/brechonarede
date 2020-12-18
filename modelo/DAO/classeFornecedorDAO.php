<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'conexao.php';

class classeFornecedorDAO {

    //função cadastrar cliente
    //pega objeto da classeFornecedor pra puxar os gets
    public function cadastrarFornecedor(classeFornecedor $novoFornecedor) {
        try {
            //vamo chamar a função dentro da classe nome da classe::funçao();
            $pdo = conexao::getInstance(); //atribuo o pdou pra variavel cadastra em baixo
            //$sql = "INSERT INTO cliente(nome,perfil,email,senha,dataCadastro) VALUES (?,?,?,?,now());";
            $cadastrar = $pdo->prepare("INSERT INTO fornecedor(nome,cpf,cnpj,cidade,localidade,email,telefone,cep,bairro,sexo,logradouro)VALUES(:nome,:cpf,:cnpj,:cidade,:localidade,:email,:telefone,:cep,:bairro,:sexo,:logradouro)");
            $cadastrar->bindValue(':nome', $novoFornecedor->getNome());
            $cadastrar->bindValue(':cpf', $novoFornecedor->getCpf());
            $cadastrar->bindValue(':cnpj', $novoFornecedor->getCnpj());
            $cadastrar->bindValue(':cidade', $novoFornecedor->getCidade());
            $cadastrar->bindValue(':localidade', $novoFornecedor->getLocalidade());
//            $cadastrar->bindValue(':perfil', $novoFornecedor->getPerfil());
            $cadastrar->bindValue(':email', $novoFornecedor->getEmail());
            $cadastrar->bindValue(':telefone', $novoFornecedor->getTel1());
            $cadastrar->bindValue(':cep', $novoFornecedor->getCep());
            $cadastrar->bindValue(':bairro', $novoFornecedor->getBairro());
            $cadastrar->bindValue(':sexo', $novoFornecedor->getSexo());
            $cadastrar->bindValue(':logradouro', $novoFornecedor->getLogradouro());
//            $cadastrar->bindValue(':senha', $novoFornecedor->getSenha());
            return $cadastrar->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
        //
    }
        
     public function listarFornecedores(){
     try{
         $pdo = conexao::getInstance();
         $listarFornecedores=$pdo->prepare("SELECT * FROM fornecedor");
         $listarFornecedores->execute();
         $fornecedoreslist= array();
         while($fornecedoresObj=$listarFornecedores->fetchObject(__CLASS__) ){
             $fornecedoreslist[]=$fornecedoresObj;
         }
         return $fornecedoreslist;
     }   
     catch(PDOException $erro){
         echo $erro->getTraceAsString();
     }
    
    }

}
