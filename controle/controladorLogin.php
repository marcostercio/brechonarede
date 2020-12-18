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
    $emailorcpf = $_POST['login'];
    $senha = $_POST['senha'];

//chama a função do objeto $loginDAO

    $usuario = $loginDAO->fazerLogin($emailorcpf, $senha);
//caso a função fazerLogin retorne nao retorne falsa exiba a mensagem de ok e redirecione
    if ($usuario != FALSE) {
        $_SESSION['msg'] = 'Login efetuado!';
        echo '<script type="text/javascript">
    location.href="index.php?ctrl=controladorPainelUsuario&msg=ok";</script>';
    }
//se nao envie mensagem de erro e redirecione
    else {
        echo '<script type="text/javascript">
    window.alert("Seu login ou senha estao errados!");
    location.href="index.php";</script>';
        $_SESSION['msg'] = 'Seu login ou senha estao errados!';
        header('location:index.php?msg=erro');
    }
//fim se n for logout e login
}