<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h1><i class='editar'></i>Editar Funcionario</h1>";
require_once "modelo/DAO/classeFuncionarioDAO.php";
//buscar e mostrar dados
//atualizar dados
if (isset($_GET['idFuncionario'])) {
    $idDoFuncionario = $_GET['idFuncionario'];
    $objId = new classeFuncionarioDAO();
    $buscar = $objId->pesquisarFuncionarioPorId($idDoFuncionario);
    foreach ($buscar as $pronto) {
        echo "
     <form method='post' action='index.php?ctrl=controladorAlterarFuncionario&att&idFuncionario=$idDoFuncionario'>
     <fieldset>
        <legend>Editar </legend>
        <label for ='nome'>Nome</label>
        <p><input type='text' name='nome' id='nome' value='$pronto->nome'></p>
        <label for ='email'>Email</label>
       <p> <input type='text'id='email' name='email' value='$pronto->email'></p>
        <label for ='senha'>Senha</label>
       <p> <input type='text'id='senha' name='senha' value='$pronto->senha'></p>
        <p><input type='submit' value ='Alterar'  onclick='return confirmAlt()'></p>
    </fieldset>
     </form>";
        //se o formulario for enviado com att na url ele recebe e atualiza
        if (isset($_GET['att'])) {

            $nomeform = $_POST['nome'];
            $emailform = $_POST['email'];
            $senhaform = $_POST['senha'];
            $atualize = new classeFuncionarioDAO();
            $atualize->alterarFuncionario($_GET['idFuncionario'], $nomeform, $emailform, $senhaform);
            if ($atualize = TRUE)
                echo '<script type="text/javascript">alert("Funcionario alterado com sucesso!");
            location.href="index.php";</script>';
            else
                echo '<script type="text/javascript">alert("Erro ao alterar cliente!");
            location.href="index.php";</script>';
        }

        //dados form
    }
} else {
    echo ' <script type="text/javascript">
    alert("Funcionario não especificado!");
    location.href="index.php";
    </script>';
}
 echo "<a href='index.php?ctrl=controladorListarFuncionarios'><i class='voltar'></i></a>";