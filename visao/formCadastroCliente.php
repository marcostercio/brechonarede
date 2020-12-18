<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1><i class="registro"></i>Cadastro</h1>
        <form class='cadastro' id="cadastro" method ="post" action="index.php?ctrl=controladorcliente">
            <fieldset>
           
                <div class="formleft">
                <label for="nome">Nome Completo *:</label>

                <input type="text" id="nome" name="nome" required autofocus>
                
                
                  <label for="cpf" >Cpf *:</label>
                <input type="text" class="cpf" id='cpf' name="cpf" required>
                
                
                <label for="senha" >Senha *:</label>
                <input type="password"  id="senha" name="senha" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Deve conter pelo menos um número e uma letra maiúscula e minúscula e pelo menos 8 ou mais caracteres">
                
                
                <label for="senharepetir" >Confirme a Senha *:</label>
                <input type="password" id="senha2" name="senharepetir" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Deve conter pelo menos um número e uma letra maiúscula e minúscula e pelo menos 8 ou mais caracteres">
                
                
                <label for="email">Email*:</label>
                <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                
                
                <label for="email">DDD+Telefone1:</label>
                <input type="tel" class='phone_with_ddd' id="tel" name="tel">
                
                
                <label for="email">DDD+Telefone2:</label>
                <input type="tel" class='phone_with_ddd' id="tel2" name="tel2">
                
                
                </div>
                <div class='formright'>
                <label for="sexo" >Sexo:</label> 
                
                
                <input id='masculino' type="radio" name="sexo" value="masculino" checked>
                <label for="masculino">Masculino</label> 
                
                <input type="radio" name="sexo" id='feminino' value="feminino" >
                <label for="feminino">Feminino</label> 
                
                <br>
                <br>
                <label for="email" >Cep *:</label>
                <input type="text" class='cep' id="cep" name="cep" required>
                
                
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco">
                
                
                <label for="bairro" >Bairro*:</label>
                <input type="text" id="bairro" name="bairro" required>
                
                
                <label for="cidade">Cidade *:</label>
                <input type="text" id="cidade" name="cidade" required>
                
                
                <!--estados-->
                <label for="estado">Estado *:</label>
                <select name="estado" id="estado" required> 
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
                
                
               
                                   
                </div>                   
                <input type="submit" value="Efetuar Cadastro">
            </fieldset> 
            <br>
<a href='index.php?ctrl=controladorPainelUsuario'><i class='voltar'></i></a>
        </form> 
   
    </body>
</html>
