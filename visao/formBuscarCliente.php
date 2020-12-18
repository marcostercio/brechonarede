<?php
require_once 'controle/controladorLoginVerificaUsuario.php';
?>
<DOCTYPE html>
    <html>   
        <head>
            <title>Buscar cliente</title>
        </head>
        <body>
             <h1><i class="procurar"></i>Buscar Cliente</h1>
            <form method="post" class="buscarform" action="index.php?ctrl=controladorBuscarCliente">
                <fieldset>
<!--                    <legend>Buscar Cliente</legend>-->
                    <label for="tipo">Por</label>
                    <SELECT id="tipo" name="tipo">
                        <OPTION value="todos">Selecione</OPTION>
                        <OPTION value="masculino">SexoMasculino</OPTION>
                        <OPTION value="feminino">SexoFeminino</OPTION>
                        <OPTION value="nome">Nome</OPTION>
                        <OPTION value="email">Email</OPTION>
                        <OPTION value="bairro">Bairro</OPTION>
                        <OPTION value="cidade">cidade</OPTION>
                        <OPTION value="cep">Cep</OPTION>
                        <OPTION value="cpf">Cpf</OPTION>
                      
                    </SELECT>
                    <label for="valor">Valor:</label>
                    <input name="valor" id="nome" type="search" placeholder="Digite seus dados" autofocus>
                    <input type="submit" value="Buscar">
                </fieldset>
            </form>
            <br>
            <br>
            <a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>
        </body>
    </html>