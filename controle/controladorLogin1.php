<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header('Content-Type: text/html; charset=utf-8');

require_once 'modelo/DAO/classeLoginDAO.php';
//instância o objeto da classeLoginDAO
$loginDAO = new classeLoginDAO();
//se o link de sair mandar o logout pela url execute a função sair
if (isset($_GET['logout']) && $_GET['logout'] = TRUE) {
    $loginDAO->fazerLogout();
}
//se nao ele pega os campos login e senha enviados pelo form login
else {
    $emailoucpf = $_POST['emailoucpf'];
    $senha = $_POST['senha'];

//chama a função do objeto $loginDAO

    $usuario = $loginDAO->fazerLogin($emailoucpf, $senha);

//caso a função fazerLogin retorne nao retorne falsa exiba a mensagem de ok e redirecione
    if ($usuario != FALSE) {


        session_start();
        $_SESSION['msg'] = 'Usuario Conectado!';
        header('location:index.php?ctrl=controladorPainelUsuario&msg=ok');
    }
//se nao envie mensagem de erro e redirecione
    else {
        $_SESSION['msg'] = 'Usuario Invalido!';

        header('location:index.php?msg=erro');
    }
}
?>
