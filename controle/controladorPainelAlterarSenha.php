<?php
echo "<h1><i class='editar'></i>Alterar Senha</h1>";
require_once 'modelo/dao/classeLoginDAO.php';

if (isset($_SESSION['idUsuario'])) {
    $obj = new classeLoginDAO();
    $objeto = $obj->buscarUsuarioPorId($_SESSION['idUsuario']);

    foreach ($objeto as $listar) {

//      echo "
//          <form action='' method='get'>
//          <label for='cpf'>Cpf</label>
//          <input type='text'name='cpf' placeholder='digite o cpf da sua conta'>
//          <input type='text' name='ctrl' value='controladorPainelAlterarSenha' placeholder='digite o cpf da sua conta' hidden>
//          <input type='submit'>
//          </form>
//      ";
if($_SESSION['usuarioLogado']==1){
        echo "
      
      <form class='altsenha' action='' method='POST'>
        
         <label for='senhaantiga'>Senha atual</label>
         <input type='password' name='password' value='$listar->senha' id='senhaantiga' placeholder='preencha sua senha atual' required></input>
          <label for='novasenha'>Nova Senha</label>
         <input type='password' name='senhanova'id='senhanova'  required></input>
          <label for='senhanova2'>Confirme a Senha</label>
         <input type='password' name='senhanova2' id='senhanova2'  required></input>
         <input type='hidden' name='pos' ></input>
         <input type='hidden' name='ctrl' value='controladorPainelAlterarSenha' ></input>
         
         <input type='submit' onclick='return confirmAlt()'></input>
      </form>

    ";
    }
    else{
       echo "<script type='text/javascript'>alert('logue-se primeiro')</script>"; 
       echo "<script type='text/javascript'>location.href='index.php'</script>"; 
    }
    }
    
    if (isset($_POST['pos'])) {
        if ($_POST['senhanova'] != $_POST['senhanova2']) {
            echo "senhas de confirma��o diferentes";
        } else {
            if (@$_SESSION['senhaUsuarioLogado'] != @$_POST['password']) {
                echo "<script type='text/javascript'>alert('senha antiga invalida')</script>";
            } else {


                $insert = $obj->atualizarUsuario($_SESSION['idUsuario'], $_POST['senhanova'], $_SESSION['perfilUsuarioLogado']);
                if ($insert) {
                    echo "<script type='text/javascript'>alert('Senha atualizada!');</script>";
                    unset($_SESSION['senhaUsuarioLogado']);
                    unset( $_SESSION['usuarioLogado']);
                     echo "<script type='text/javascript'>location.href='index.php'</script>"; 
                } else {
                    echo "Nao foi possivel atualizar senha";
                }
            }
        }
    }
} else {
    echo "
      <script type='text/javascript'>alert('Logue-se primeiro');</script>   
      "
    ;
}
 
echo "<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>";