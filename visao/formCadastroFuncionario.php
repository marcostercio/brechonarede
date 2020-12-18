<?PHP
//verifica se e um administrador se nao redireciona
require_once 'controle/controladorLoginVerificaUsuario.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1><i class='registro'></i>Cadastro Funcionário</h1>
        <form class="cadastro" method ="post" action="index.php?ctrl=controladorFuncionario">
            <fieldset>
                
                <div class="formleft">
                <label for="nome">Nome *:</label>

                <input type="text" id="nome" name="nome" required autofocus>
                <br>
                <br>
                <label for="cidade">Cidade *:</label>
                <input type="text" id="cidade" name="cidade" required>
                <br>
                <br>
                <!--estados-->
                <label for="estado">Estado *:</label>
                <select name="estado" id='estado' required> 
                    <option value="estado">Selecione o Estado</option> 
                    <option value="ac">Acre</option> 
                    <option value="al">Alagoas</option> 
                    <option value="am">Amazonas</option> 
                    <option value="ap">Amapá</option> 
                    <option value="ba">Bahia</option> 
                    <option value="ce">Ceará</option> 
                    <option value="df">Distrito Federal</option> 
                    <option value="es">Espírito Santo</option> 
                    <option value="go">Goiás</option> 
                    <option value="ma">Maranhão</option> 
                    <option value="mt">Mato Grosso</option> 
                    <option value="ms">Mato Grosso do Sul</option> 
                    <option value="mg">Minas Gerais</option> 
                    <option value="pa">Pará</option> 
                    <option value="pb">Paraíba</option> 
                    <option value="pr">Paraná</option> 
                    <option value="pe">Pernambuco</option> 
                    <option value="pi">Piauí</option> 
                    <option value="rj">Rio de Janeiro</option> 
                    <option value="rn">Rio Grande do Norte</option> 
                    <option value="ro">Rondônia</option> 
                    <option value="rs">Rio Grande do Sul</option> 
                    <option value="rr">Roraima</option> 
                    <option value="sc">Santa Catarina</option> 
                    <option value="se">Sergipe</option> 
                    <option value="sp">São Paulo</option> 
                    <option value="to">Tocantins</option> 
                </select>
                <br><br>
                <label for='cargo'>Cargo:</label>
                <select name='cargo' id='cargo'>
                    <option value="" checked>Selecione</option>
                    <option value='Administrador'>Administrador</input>
                    <option value='Gerente'>Gerente</input>
                    <option value='AuxiliarOperacional'>Auxiliar Operacional</input>
                        
                </select>
                <br><br>
                <label for='perfil'>perfil do site:</label>
                <select name='perfil' id='perfil'>
<!--                    <option value="1">Cliente</option>-->
                    <option value='1'>Administrador</option>
                    <option value='2'>funcionário</option>
<!--                    <option value='4'>Auxiliar Operacional</option>-->
                        
                </select>
                <br><br>
                <label for='salario'>Salário:</label>
                <input name='salario' type="number" min="1" minlength="1">
                <br>
                <br>
                <label for="senha" >Senha *:</label>
                <input type="password" id="senha" name="senha" required>
                <br>
                <br>
                <label for="senharepetir" >Confirme a Senha *:</label>
                <input type="password" id="senha" name="senharepetir" required >
                <br>
                <br>
                </div>
                <label for="email">Email*:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <br>
                <label for="email">DDD+Telefone1:</label>
                <input type="tel" class='phone_with_ddd' id="tel" name="tel">
                <br>
                <br>
                <label for="email">DDD+Telefone2:</label>
                <input type="tel" class='phone_with_ddd' id="tel2" name="tel2">
                <br>
                <br>
                
                <label for="sexo" >Sexo:</label> 
                
                
                <input type="radio" id='masculino' name="sexo" value="masculino" checked>
                <label for="masculino">Masculino</label> 
                
                <input type="radio" id='feminino' name="sexo" value="feminino" >
                <label for="feminino">Feminino</label> 

                <br>
                <br>
                <label for="email" >Cep *:</label>
                <input type="text" class='cep' id="cep" name="cep" required>
                <br>
                <br>
                <label for="email" >Cpf *:</label>
                <input type="text" class='cpf' id="cpf" name="cpf" required>
                <br>
                <br>
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco">
                 <br>
                <br>
                <label for="bairro" >Bairro*:</label>
                <input type="text" id="bairro" name="bairro" required>
                <br><br>
                <input type="submit" value="Efetuar Cadastro">
            </fieldset> 

        </form> 
        <br>
        <br>
        <a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>

    </body>
</html>
