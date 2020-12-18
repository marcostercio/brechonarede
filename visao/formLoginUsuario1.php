<!DOCTYPE html>
<?php
?>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <style>
	
	#newsletter_topics label.error {
		display: none;
		margin-left: 103px;
	}
	</style>
    </head>
    <body>
        <?PHP
       
        if (!isset($_SESSION['usuarioLogado'])) {
            
            echo "
     <form action='?ctrl=controladorLogin' id='login' method='post'>
         <fieldset>
             <legend>Login</legend>
             <label for='emailoucpf' >Email:</label>
             <input type='text' id='emailoucpf' placeholder='nome ou cpf' name='emailoucpf' required>
             
             <label for='senha'>Senha:<br></label>
             <input type='password' id='password'   placeholder='senha' id='senha' name='senha' required>
             <input type='submit' value='Logar'>
             
         </fieldset>
     </form>
     ";
         } else {
            echo "Bem vindo<br><b>" .$_SESSION['nomeUsuarioLogado']."</b>";
            
            echo '<span class="opcaobtn"><br><br><a href="index.php?ctrl=controladorPainelUsuario">Painel<i class="opcao"></i></a></span>';
            echo '<span class="logoutbtn"><a  href="index.php?ctrl=controladorLogin&&logout=1">Sair<i class="logout"></i></a></span>';
        }
        ?>
    </body>
</html>
