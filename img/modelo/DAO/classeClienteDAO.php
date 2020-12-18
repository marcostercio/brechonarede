<?php

//adiciona a conexao
require_once 'conexao.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//classe
class classeClienteDAO {

    //função cadastrar cliente
    //pega objeto da classeCliente pra puxar os gets
    public function cadastrarCliente(classeCliente $novoCliente) {
        try{
        //vamo chamar a função dentro da classe nome da classe::funçao();
        $pdo = conexao::getInstance();//atribuo o pdou pra variavel cadastra em baixo
        //$sql = "INSERT INTO cliente(nome,perfil,email,senha,dataCadastro) VALUES (?,?,?,?,now());";
        $cadastrar = $pdo->prepare("INSERT INTO cliente(nome,cpf,cidade,localidade,perfil,email,telefone1,telefone2,cep,bairro,sexo,senha,logradouro)VALUES(:nome,:cpf,:cidade,:localidade,:perfil,:email,:telefone1,:telefone2,:cep,:bairro,:sexo,:senha,:logradouro)");
        $cadastrar->bindValue(':nome',$novoCliente->getNome());
        $cadastrar->bindValue(':cpf',$novoCliente->getCpf());
        $cadastrar->bindValue(':cidade',$novoCliente->getCidade());
        $cadastrar->bindValue(':localidade',$novoCliente->getLocalidade());
        $cadastrar->bindValue(':perfil',$novoCliente->getPerfil());
        $cadastrar->bindValue(':email',$novoCliente->getEmail());
        $cadastrar->bindValue(':telefone1',$novoCliente->getTel1());
        $cadastrar->bindValue(':telefone2',$novoCliente->getTel2());
        $cadastrar->bindValue(':cep',$novoCliente->getCep());
        $cadastrar->bindValue(':bairro',$novoCliente->getBairro());
        $cadastrar->bindValue(':sexo',$novoCliente->getSexo());
        $cadastrar->bindValue(':senha',$novoCliente->getSenha());
        $cadastrar->bindValue(':logradouro',$novoCliente->getLogradouro());
        return $cadastrar->execute();
    }
    
    catch(PDOException $erro){
        echo $erro->getMessage();
    }
    //
    }
     
    public function listarClientes(){
     try{
         $pdo = conexao::getInstance();
         $listarClientes=$pdo->prepare("SELECT * FROM cliente");
         $listarClientes->execute();
         $clienteslist= array();
         while($clientesObj=$listarClientes->fetchObject(__CLASS__) ){
             $clienteslist[]=$clientesObj;
         }
         return $clienteslist;
     }   
     catch(PDOException $erro){
         echo $erro->getTraceAsString();
     }
    }
    public function alterarCliente($alterarClienteId,$alterarClienteNome,$alterarClienteEmail,$alterarClienteSenha){
    try{
     $pdo = conexao::getInstance();
     $buscar = $pdo->prepare("UPDATE cliente SET nome=:nome,email=:email,senha=:senha WHERE idcliente=:idCliente");
     
     $atualizar=$buscar->bindValue(':nome',$alterarClienteNome);
     $atualizar=$buscar->bindValue(':email',$alterarClienteEmail);
     $atualizar=$buscar->bindValue(':senha',$alterarClienteSenha);
     $atualizar=$buscar->bindValue(':idCliente',$alterarClienteId);
     return $atualizar=$buscar->execute();
    }
   
    
    catch(PDOException $erro){
    echo $erro->getMessage();    
    }
       
    }
    
    public function excluirCliente($idCliente){
    try{
        $pdo = conexao::getInstance();
        $excluirCliente=$pdo-> prepare("DELETE FROM cliente WHERE idCliente=:idcliente");
        $excluirCliente ->bindValue(':idcliente',$idCliente);
        return $excluirCliente->execute();
    }   
    catch(PDOException $erro){
        echo $erro->getMessage();
    }
        
    }
    public function pesquisarClientePorId($idDoCliente){
    $pdo = conexao::getInstance();
    $pesquisa = $pdo->prepare('SELECT * FROM cliente WHERE idCliente=:idCliente');
    $pesquisa->bindValue(':idCliente',$idDoCliente);
    $pesquisa->execute();
    $array= array();
    while($result=$pesquisa->fetchObject(__CLASS__)){
    $array[]=$result;
    
    }
    return $array;
   // $idClientearray = array();
    
   
    }
    
    public function pesquisarClientePorNome($valor,$por){
    $pdo=conexao::getInstance();
    
    switch($por){
    
    case 'todos':    
    $sql="SELECT * FROM cliente";
    break;

    case 'masculino':    
    $sql="SELECT * FROM cliente where sexo='masculino'";
    break;
    case 'feminino':    
    $sql="SELECT * FROM cliente where sexo='feminino'";
    break;

    case 'nome':    
    $sql="SELECT * FROM cliente WHERE nome like '%$valor%'";
    break;
    case 'email':    
    $sql="SELECT * FROM cliente WHERE email like '%$valor%'";
    break;
    case 'bairro':    
    $sql="SELECT * FROM cliente WHERE bairro like '%$valor%'";
    break;

    case 'cpf':    
    $sql="SELECT * FROM cliente WHERE cpf like '%$valor%'";
    break;

    case 'cep':    
    $sql="SELECT * FROM cliente WHERE cep like '%$valor%'";
    break;
    }
    $pesquisa=$pdo->prepare($sql);
    $pesquisa->execute();
    try{
    //se nao encontrar nenhum usuario retorna a msg de erro e redireciona
    if(!$pesquisa->rowCount()==1){
      echo '<script type="text/javascript">
         alert("Nenhum Usuario encontrado com nome informado!");
         location.href ="index.php?link=formBuscarCliente.php";    
    </script>';  
    }else{
    //variavel array que vai receber os valores do while
    $clienteArray=array();
    while($cliente = $pesquisa->fetchObject(__CLASS__) ){
        $clienteArray[]=$cliente;
       
    
    }
     return $clienteArray;
    }
    //fim try
    }
    catch(PDOException $erro){
        echo $erro->getMessage();
    }
    
    } 
//fim da classe
}
