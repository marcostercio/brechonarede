<?php

//pegar dados
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$senhaconfirmacao = $_POST['senharepetir'];
$email = $_POST['email'];
$telefone1 = $_POST['tel'];
$telefone2 = $_POST['tel2'];
$sexo = $_POST['sexo'];
$cep = $_POST['cep'];
$cpf = $_POST['cpf'];
$bairro = $_POST['bairro'];
$localidade = $_POST['estado'];
$cidade = $_POST['cidade'];
$logradouro = $_POST['endereco'];
$perfil = 3;

//dados form
//echo $nome.$senha.$senhaconfirmacao.$email.$telefone1.$telefone2.$sexo.$cep.$bairro;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'modelo/classeCliente.php';
require_once 'modelo/DAO/classeClienteDAO.php';


//Objeto da Classe Cliente
$novoCliente = new classeCliente();
$novoCliente->setNome($nome);
$novoCliente->setSenha($senha);
$novoCliente->setEmail($email);
$novoCliente->setTel1($telefone1);
$novoCliente->setTel2($telefone2);
$novoCliente->setSexo($sexo);
$novoCliente->setCep($cep);
$novoCliente->setCpf($cpf);
$novoCliente->setBairro($bairro);
$novoCliente->setCidade($cidade);
$novoCliente->setLocalidade($localidade);
$novoCliente->setPerfil($perfil);
$novoCliente->setLogradouro($logradouro);

//Validação
if ($senha == $senhaconfirmacao) {
    //chamei a função que conecta
    $pdo = conexao::getInstance();
    $search = $pdo->prepare("SELECT * FROM cliente where email=:email");
    $search->bindValue(':email', $email);
    $search->execute();
    //verifica se ha algum usuario com esse email
    if($search->rowCount()!=1){
   $novoClienteDAO = new classeClienteDAO();
   $novoClienteDAO->cadastrarCliente($novoCliente);
            
    }
    else{
     echo '
       <script type="text/javascript">
       alert("Email ja Cadastrado!");
       location.href="index.php?link=formCadastroCliente";
       </script>  
        ' ;
    }
    
    if ($novoClienteDAO = TRUE) {
        
        
       
          $_SESSION['msg'] = 'Cadastro efetuado com sucesso!';
        header('location:index.php?msg=ok');
         
        
    } else {
          $_SESSION['msg'] = 'Cadastro Invalido!';
        header('location:index.php?msg=erro');
         
    }
} else {
    
         
           $_SESSION['msg'] = 'A senha de confirmação esta diferente da senha escolhida!';
        header('location:index.php?link=formCadastroCliente&msg=aviso');
         
}