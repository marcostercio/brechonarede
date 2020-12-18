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
$cargo = $_POST['cargo'];
$perfil = $_POST['perfil'];
$cpf = $_POST['cpf'];
$bairro = $_POST['bairro'];
$localidade = $_POST['estado'];
$cidade = $_POST['cidade'];
$salario = $_POST['salario'];
$logradouro = $_POST['endereco'];

//dados form
//echo $nome.$senha.$senhaconfirmacao.$email.$telefone1.$telefone2.$sexo.$cep.$bairro;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'modelo/classeFuncionario.php';
//require_once '../modelo/DAO/classeClienteDAO.php';
require_once 'modelo/DAO/classeFuncionarioDAO.php';


//Objeto da Classe Cliente
$novoFuncionario = new classeFuncionario();
$novoFuncionario->setNome($nome);
$novoFuncionario->setSenha($senha);
$novoFuncionario->setEmail($email);
$novoFuncionario->setTel1($telefone1);
$novoFuncionario->setTel2($telefone2);
$novoFuncionario->setSexo($sexo);
$novoFuncionario->setCep($cep);
$novoFuncionario->setCpf($cpf);
$novoFuncionario->setBairro($bairro);
$novoFuncionario->setCidade($cidade);
$novoFuncionario->setLocalidade($localidade);
$novoFuncionario->setCargo($cargo);
$novoFuncionario->setPerfil($perfil);
$novoFuncionario->setSalario($salario);
$novoFuncionario->setLogradouro($logradouro);

//Validação
if ($senha == $senhaconfirmacao) {
    //chamei a função que conecta
    $pdo = conexao::getInstance();
    $search = $pdo->prepare("SELECT * FROM funcionario where email=:email");
    $search->bindValue(':email', $email);
    $search->execute();
    //verifica se ha algum usuario com esse email
    if ($search->rowCount() != 1) {
        $novoFuncionarioDAO = new classeFuncionarioDAO();
        $novoFuncionarioDAO->cadastrarFuncionario($novoFuncionario);
    } else {
        echo '
       <script type="text/javascript">
       alert("Email ja Cadastrado!");
       location.href="index.php?link=formCadastroFuncionario";
       </script>  
        ';
    }
    if ($novoFuncionarioDAO == TRUE) {
        $_SESSION['msg'] = 'Cadastro efetuado com sucesso!';
        header('location:index.php?link=formCadastroFuncionario&msg=ok');
    } else {
        $_SESSION['msg'] = 'Cadastro Invalido!';
        header('location:index.php?link=formCadastroFuncionario&msg=erro');
    }
} else {
    $_SESSION['msg'] = 'A senha de confirmação esta diferente da senha escolhida!';
    header('location:index.php?link=formCadastroFuncionario&msg=aviso');
}