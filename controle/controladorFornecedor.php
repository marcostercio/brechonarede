<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone1 = $_POST['tel'];
$sexo = $_POST['sexo'];
$cep = $_POST['cep'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$bairro = $_POST['bairro'];
$localidade = $_POST['estado'];
$logradouro = $_POST['endereco'];

require_once 'modelo/classeFornecedor.php';
require_once 'modelo/DAO/classeFornecedorDAO.php';


$novoFornecedor = new classeFornecedor();
$novoFornecedor->setNome($nome);
//$novoFornecedor->setSenha($senha);
$novoFornecedor->setEmail($email);
$novoFornecedor->setTel1($telefone1);
//$novoFornecedor->setTel2($telefone2);
$novoFornecedor->setSexo($sexo);
$novoFornecedor->setCep($cep);
$novoFornecedor->setCpf($cpf);
$novoFornecedor->setBairro($bairro);
$novoFornecedor->setCidade($cidade);
$novoFornecedor->setLocalidade($localidade);
$novoFornecedor->setLogradouro($logradouro);


//instancia para cadastrar
$istancia = new classeFornecedorDAO();
$cadastrar = $istancia->cadastrarFornecedor($novoFornecedor);

if ($cadastrar = TRUE) {
     $_SESSION['msg'] = 'Cadastro efetuado com sucesso!';
        header('location:index.php?msg=ok');
         
        
    } else {
          $_SESSION['msg'] = 'Cadastro Invalido!';
        header('location:index.php?msg=erro');
   
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

