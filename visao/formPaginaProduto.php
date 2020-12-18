<h1><i class="loja"></i>Produtos</h1>
<form  method="get" style="" action="">
    <fieldset>
        <legend>Pesquisar</legend>
       
<!--        <label for="sexo"></label>-->
        <select id="sexo" name="sexo" >
            <option value="">Todos</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>
        
        <input type="number" min="1" id="precomin" name="min" placeholder="preço min">
        <input type="hidden" name="ctrl" value="controladorPaginaProdutos" >
        <input type="number" min="1" id="precomax" name="max" placeholder="preço max">
<!--        
        <label input type="nome"  name="nomeproduto"></label>
        <input type="search" id="nomeproduto" placeholder="Nome do produto" name="nomeproduto">-->
<input class='submit' type="submit" name="submit" value="buscar" >
       
    </fieldset>
    
</form>


