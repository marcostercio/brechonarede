<!DOCTYPE html>

<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <title>Brechó na rede</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="icon" href="img/icones/favicon.ico" type="image/x-icon" />






    </head>

    <body onclick="fecharbusca(this.value)" >

        <div class="menu">
            <ul>
                <a href='index.php'><li>Home</li></a>
                <!--                <a  href="index.php?link=formCadastroCliente"><li class="pink">Cadastro</li></a>-->
                <a href="index.php?link=sobre"><li>Sobre</li></a>
                <a href="index.php?ctrl=controladorPaginaProdutos"><li>Produtos</li></a>
                <a href="index.php?ctrl=controladorContatoCliente"><li>Contato</li></a>

                <form action="" class='pesquisatopo' method="POST">
                    <input type="search" onkeyup="busca(this.value)" name="buscar" id='barrapesquisa' class="buscar">

                </form>
            </ul>

        </div>
        <div id="tudo">
            <div id='banner' class="banner">
                <!--Alerta javascript div-->
                <div id='msg'></div>
                <div id='resultadopesquisatopo'  class='resultadopesquisatopo'>


                </div>
                <!--gancho-->
                <a name="chegaraqui"></a>
                <a href="index.php"> <img src="img/logo.png"></a>
                <div class="direitabloco">
                    <a href='?ctrl=controladorCarrinho'>  <button>

                            <?PHP
                            session_start();
                            //script mostrar carrinho se tiver
                            if (isset($_SESSION["carrinho"])) {
                                //ve se ta logado  if (isset($_SESSION["usuarioLogado"]) && count($_SESSION["carrinho"]) > 0)
                                if (count($_SESSION["carrinho"]) > 0) {

                                    echo '<span class="alerta">' . count($_SESSION["carrinho"]) . '</span>';
                                }
                            }
                            ?>
                            Carrinho</button>
                    </a>
                    </a>
                    <ul class="button">
                        <li class="pailogin">
                            <!--Login  a ser escondido-->
                            <div class="login">

                                <?php
                                include "visao/formLoginUsuario.php";
                                ?>
                            </div>

                        </li>
                        <?php
                        if (!isset($_SESSION["usuarioLogado"])) {
                            echo'
                        <li><a href="#"  class="loginlink">Login</a></li>
                        |
                        <li ><a class="pink" href="index.php?link=formCadastroCliente">Cadastrar&nbsp;</a></li>
                        ';
                        } else {
                            echo'
                             <li><a href="#"  class="loginlink">Painel</a></li>';
                        }
                        ?>
                    </ul>
                </div>    
            </div>

            <div class="conteudo">

                <!--<div class="slide"></div>-->
                <div class='puchapagina'> 
                    <?php
                    //inclui paginas por click
                    include 'controle/controladorPaginas.php';
                    ?>
                </div>
                <div>
                    <h1>siga-nos no facebook</h1>  
                    <!--Subir gancho-->
                    <a href="#chegaraqui"><img class="subir" src="img/subir.png"></a>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="rodape">
    <span class="span">
        <span class="texto">
            <h1>formas de pagamento</h1>  
            <img src='img/formaspagamento.png' width="220" height="72">
        </span>

        <span class="texto">
            <h1>contato</h1>
            <p>brechonarede@gmail.com</p>
        </span>
        <span class="copyright">copyright brecho na rede.</span>
    </span>


</div>


<script type="text/javascript" src="js/jquery-3.1.1.min.js" ></script>
<!--<script type="text/javascript" src="js/jquery.validate.min.js" ></script>-->
<script type="text/javascript" src="js/funcao.js" ></script>
<script type="text/javascript" src="js/main.js" ></script>

<script type="text/javascript" src="js/jquery.mask.js"></script>
</body>
<html>
    <?php
    //mensagem box
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'ok') {
            echo "
  <script>
  msgbox('" . $_SESSION['msg'] . "','ok');
  </script> 
  ";
        }
        if ($_GET['msg'] == 'erro') {
            echo "
  <script>
  msgbox('" . $_SESSION['msg'] . "','erro');
  </script> 
  ";
        }
        if ($_GET['msg'] == 'aviso') {
            echo "
  <script>
  msgbox('" . $_SESSION['msg'] . "','aviso');
  </script> 
  ";
        }
    }
    ?>