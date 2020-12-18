<?php

//adiciona a conexao
require_once 'conexao.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//classe
class classeFuncionarioDAO {

    //função cadastrar funcionario
    //pega objeto da classeFuncionario pra puxar os gets
    public function cadastrarFuncionario(classeFuncionario $novoFuncionario) {
        try{
        //vamo chamar a função dentro da classe nome da classe::funçao();
        $pdo = conexao::getInstance();//atribuo o pdou pra variavel cadastra em baixo
        //$sql = "INSERT INTO funcionario(nome,perfil,email,senha,dataCadastro) VALUES (?,?,?,?,now());";
        $cadastrar = $pdo->prepare("INSERT INTO funcionario(nome,cargo,cpf,cidade,localidade,perfil,email,telefone1,telefone2,cep,bairro,sexo,senha,salario,logradouro)VALUES(:nome,:cargo,:cpf,:cidade,:localidade,:perfil,:email,:telefone1,:telefone2,:cep,:bairro,:sexo,:senha,:salario,:logradouro)");
        $cadastrar->bindValue(':nome',$novoFuncionario->getNome());
        $cadastrar->bindValue(':cargo',$novoFuncionario->getCargo());
        $cadastrar->bindValue(':cpf',$novoFuncionario->getCpf());
        $cadastrar->bindValue(':cidade',$novoFuncionario->getCidade());
        $cadastrar->bindValue(':localidade',$novoFuncionario->getLocalidade());
        $cadastrar->bindValue(':perfil',$novoFuncionario->getPerfil());
        $cadastrar->bindValue(':email',$novoFuncionario->getEmail());
        $cadastrar->bindValue(':telefone1',$novoFuncionario->getTel1());
        $cadastrar->bindValue(':telefone2',$novoFuncionario->getTel2());
        $cadastrar->bindValue(':cep',$novoFuncionario->getCep());
        $cadastrar->bindValue(':bairro',$novoFuncionario->getBairro());
        $cadastrar->bindValue(':sexo',$novoFuncionario->getSexo());
        $cadastrar->bindValue(':senha',$novoFuncionario->getSenha());
        $cadastrar->bindValue(':salario',$novoFuncionario->getSalario());
        $cadastrar->bindValue(':logradouro',$novoFuncionario->getLogradouro());
        return $cadastrar->execute();
    }
    
    catch(PDOException $erro){
        echo $erro->getMessage();
    }
    //
    }
     
    public function listarFuncionarios(){
     try{
         $pdo = conexao::getInstance();
         $listarFuncionarios=$pdo->prepare("SELECT * FROM funcionario");
         $listarFuncionarios->execute();
         $funcionarioslist= array();
         while($funcionariosObj=$listarFuncionarios->fetchObject(__CLASS__) ){
             $funcionarioslist[]=$funcionariosObj;
         }
         return $funcionarioslist;
     }   
     catch(PDOException $erro){
         echo $erro->getTraceAsString();
     }
    }
    public function alterarFuncionario($alterarFuncionarioId,$alterarFuncionarioNome,$alterarFuncionarioEmail,$alterarFuncionarioSenha){
    try{
     $pdo = conexao::getInstance();
     $buscar = $pdo->prepare("UPDATE funcionario SET nome=:nome,email=:email,senha=:senha WHERE idfuncionario=:idFuncionario ");
     
     $atualizar=$buscar->bindValue(':nome',$alterarFuncionarioNome);
     $atualizar=$buscar->bindValue(':email',$alterarFuncionarioEmail);
     $atualizar=$buscar->bindValue(':senha',$alterarFuncionarioSenha);
     $atualizar=$buscar->bindValue(':idFuncionario',$alterarFuncionarioId);
     return $atualizar=$buscar->execute();
    }
   
    
    catch(PDOException $erro){
    echo $erro->getMessage();    
    }
       
    }
    public function excluirFuncionario($idFuncionario){
    try{
        $pdo = conexao::getInstance();
        $excluirFuncionario=$pdo-> prepare("DELETE FROM funcionario WHERE idFuncionario=:idfuncionario");
        $excluirFuncionario ->bindValue(':idfuncionario',$idFuncionario);
        return $excluirFuncionario->execute();
    }   
    catch(PDOException $erro){
        echo $erro->getMessage();
    }
        
    }
    public function pesquisarFuncionarioPorId($idDoFuncionario){
    $pdo = conexao::getInstance();
    $pesquisa = $pdo->prepare('SELECT * FROM funcionario WHERE idFuncionario=:idFuncionario');
    $pesquisa->bindValue(':idFuncionario',$idDoFuncionario);
    $pesquisa->execute();
    $array= array();
    while($result=$pesquisa->fetchObject(__CLASS__)){
    $array[]=$result;
    
    }
    return $array;
   // $idFuncionarioarray = array();
    
   
    }
     public function pesquisarFuncionarioPorNome($valor,$por){
    $pdo=conexao::getInstance();
    
    switch($por){
    
    case 'todos':    
    $sql="SELECT * FROM funcionario";
    break;

    case 'masculino':    
    $sql="SELECT * FROM funcionario where sexo='masculino'";
    break;
    case 'feminino':    
    $sql="SELECT * FROM funcionario where sexo='feminino'";
    break;

    case 'nome':    
    $sql="SELECT * FROM funcionario WHERE nome like '%$valor%'";
    break;
    case 'email':    
    $sql="SELECT * FROM funcionario WHERE email like '%$valor%'";
    break;
    case 'bairro':    
    $sql="SELECT * FROM funcionario WHERE bairro like '%$valor%'";
    break;

    case 'cpf':    
    $sql="SELECT * FROM funcionario WHERE cpf like '%$valor%'";
    break;

    case 'cep':    
    $sql="SELECT * FROM funcionario WHERE cep like '%$valor%'";
    break;
    }
    $pesquisa=$pdo->prepare($sql);
    $pesquisa->execute();
    try{
    //se nao encontrar nenhum usuario retorna a msg de erro e redireciona
    if(!$pesquisa->rowCount()==1){
      echo '<script type="text/javascript">
         alert("Nenhum Usuario encontrado com nome informado!");
         location.href ="index.php?link=formBuscarFuncionario.php";    
    </script>';  
    }else{
    //variavel array que vai receber os valores do while
    $funcionarioArray=array();
    while($funcionario = $pesquisa->fetchObject(__CLASS__) ){
        $funcionarioArray[]=$funcionario;
       
    
    }
     return $funcionarioArray;
    }
    //fim try
    }
    catch(PDOException $erro){
        echo $erro->getMessage();
    }
    
    }
//fim da classe
}
