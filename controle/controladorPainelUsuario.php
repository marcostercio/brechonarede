<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Painel
        //header("location:visao/cadastro.html");
        if (isset($_SESSION['usuarioLogado'])) {
            switch ($_SESSION['perfilUsuarioLogado']) {
                //Painel Administradores
                case 1:

                    echo '<h1><i class="adm"></i>Area Administrativa </h1>
            Bem vindo <b>' . $_SESSION["nomeUsuarioLogado"] . '</b>!
            <ul class="painelusuario">
            
                <ul class="painelpesquisar">
                <h2><i class="procurar"></i>Pesquisar</h2>
                <li><a href="index.php?link=formBuscarCliente">Buscar Cliente!</a><br></li>
                <li><a href="index.php?link=formBuscarFuncionario">Buscar Funcionario!</a><br></li>
                 <li><a href="index.php?link=formBuscarProduto">Buscar Produto!</a><br></li>
                <li><a href="index.php?ctrl=controladorListarClientes">Listar Cliente</a><br></li>
                <li><a href="index.php?ctrl=controladorListarFuncionarios">Listar Funcionários</a><br></li>
                <li><a href="index.php?ctrl=controladorListarFornecedores">Listar Fornecedores</a><br></li>
                 <li><a href="index.php?ctrl=controladorCarrinho">Carrinho de compras</a><br></li>
                </ul>
                <ul class="painelcadastrar">
                
                <h2><i class="registropn"></i>Cadastrar</h2>
                <li><a href="index.php?link=formCadastroFuncionario">Cadastro Funcionário</a><br></li>
                <li><a href="index.php?link=formCadastroFornecedor">Cadastro Fornecedor</a><br></li>
                <li><a href="index.php?link=formCadastrarProduto">Cadastro Produtos</a><br></li>
                </ul>
               
               
           <!--     <li><a href="#">Minhas Compras</a></li>-->
                <ul class="painelalterar">
                <h2><i class="editarpn"></i>Alterar</h2>
                <li><a href="index.php?ctrl=controladorPainelAlterarSenha">Alterar Senha</a></li>
                </ul>
            </ul>
        ';
                    break;
                //Painel Funcionário 
                case 2:

                    echo ' <h1><i class="funcionario"></i>Funcionário</h1>
                     Bem vindo ' . $_SESSION["nomeUsuarioLogado"] . '!
            <ul class="painelusuario"> 
             <ul class="painelpesquisar">
                <h2><i class="procurar"></i>Pesquisar</h2>
                <li><a href="index.php?link=formBuscarCliente">Buscar Cliente!</a><br></li>
                <li><a href="index.php?ctrl=controladorListarClientes">Listar Cliente</a><br></li>
                 <li><a href="index.php?link=formBuscarProduto">Buscar Produto</a><br></li>
                  <li><a href="index.php?ctrl=controladorCarrinho">Carrinho de compras</a><br></li>
             </ul>    
              <ul class="painelcadastrar">
              <i class="registropn"></i>
                <h2>Cadastrar</h2>
                <li><a href="index.php?link=formCadastrarProduto">Cadastro Produtos</a><br></li>
              </ul>
              
              <ul class="painelalterar"> 
              <i class="editarpn"></i>
               <h2>Alterar</h2>
                <li><a href="index.php?ctrl=controladorPainelAlterarSenha">Alterar Senha</a></li>
              </ul>
            </ul>
             ';
                    break;
                default:
                    //Painel do usuario
                    echo '
             <h1>Painel do Usuario</h1>   
             Bem vindo ' . $_SESSION["nomeUsuarioLogado"] . '!    
             <ul class="painelusuario">
               <ul class="painelpesquisar">
               <h2><i class="procurar"></i>Pesquisar</h2>
               
                <li><a href="index.php?ctrl=controladorPainelAlterarSenha">Alterar Senha</a></li>
                <li><a href="index.php?ctrl=controladorCarrinho">Carrinho de compras</a><br></li>
                 </ul>
             </ul>
         ';

                    break;
            }
        }
        ?>
        <br>
        <br>
        <a href='index.php'><i class='voltar'></i></a>
    </body>
</html>
