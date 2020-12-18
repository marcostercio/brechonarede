<?php

//se nao existir sessao logado
//admi=1;
//funcionario=2;
//cliente =3;
if (!isset($_SESSION['usuarioLogado']) OR $_SESSION['perfilUsuarioLogado']==3) {
    echo "<script type='text/javascript'>
     alert('Página restrita!');
     window.location.href='index.php';
    </script>";
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

