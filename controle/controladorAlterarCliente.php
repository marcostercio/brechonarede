<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "modelo/DAO/classeClienteDAO.php";
//buscar e mostrar dados
//atualizar dados
echo "<h1><i class='editar'></i>Editar Cliente</h1>";

if (isset($_GET['idCliente'])) {
    $idDoCliente = $_GET['idCliente'];
    $objId = new classeClienteDAO();
    $buscar = $objId->pesquisarClientePorId($idDoCliente);
    foreach ($buscar as $pronto) {
        echo "
     <form method='post' action='index.php?ctrl=controladorAlterarCliente&att&idCliente=$idDoCliente'>
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
            $atualize = new classeClienteDAO();
            $atualize->alterarCliente($_GET['idCliente'], $nomeform, $emailform, $senhaform);
            if ($atualize = TRUE)
                echo '<script type="text/javascript">alert("Cliente alterado com sucesso!");
            location.href="index.php";</script>';
            else
                echo '<script type="text/javascript">alert("Erro ao alterar cliente!");
            location.href="index.php";</script>';
        }

        //dados form
    }
} else {
    echo ' <script type="text/javascript">
    alert("Cliente não especificado!");
    location.href="index.php";
    </script>';
}
 echo "<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>";