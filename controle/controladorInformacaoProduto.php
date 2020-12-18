<!-- Trigger the Modal -->
<!--<img id="myImg" src="img_fjords.jpg" alt="Trolltunga, Norway" width="300" height="200">-->

<h1><i class='info'></i>Informação Produto</h1>
<?php
require_once 'modelo/dao/classeProdutoDAO.php';
$pdt = $_GET['pdt'];

$produto = new classeProdutoDAO();
$func =$produto->informacaoProduto($pdt);

foreach($func as $valores){
    $verificaft=  file_exists('img/produtos/'.$valores->foto.'.jpg');
    //div de informação
    echo "<div class='informacaoproduto'>";
    if($verificaft){
    echo "
    <img id='myImg' alt='".$valores->descricao."'  src='img/produtos/$valores->foto.jpg' width='200' height='200'>";
   
    }
    else{
     echo  " <img src='img/semft.jpg' width='400' height='400'><br>";
       
    }
    echo "
     <form method='post' onsubmit='return validarEstoque()' class='forminfo' action='index.php?ctrl=controladorCarrinho'> 
    <ul class='infopdt'>
    
    <li><b>Nome:</b>$valores->nome</li>
    <li><b>Genero:</b>$valores->genero</li>
    <li><b>Preço:</b>R$ ".number_format($valores->preco,2,',','.')."</li>
    <li><b>Tamanho:</b>$valores->tamanho</li>
    <li><b>descricao:</b>$valores->descricao</li>
    <li><b>Cor:</b>$valores->cor</li>
    <li><b>Tipo:</b>$valores->tipo</li>
  
         
    ";
}
echo "

<li><b>Quantidade:</b></li> 
<input type='number' name='quantidade' value='1' min='1' max-lenght='$valores->quantidade' max='$valores->quantidade'>    <br>
<input type='hidden' name='ft'  value='$valores->foto'>    
<input type='hidden' name='nome'  value='$valores->nome'>    
<input type='hidden' name='genero'  value='$valores->genero'>    
<input type='hidden' name='preco'  value='$valores->preco'>    
<input type='hidden' name='tamanho'  value='$valores->tamanho'>    
<input type='hidden' name='descricao'  value='$valores->descricao'>    
<input type='hidden' name='cor'  value='$valores->cor'>    
<input type='hidden' name='tipo'  value='$valores->tipo'>     
<input type='hidden' name='acao'  value='add'>    
<input type='hidden' name='id'  value='$pdt'>    
<input type='submit' value='Comprar'>    

   </ul>
</form>
";




echo "</div>";
?>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times<i class="x"></i></span>
  <i class="x"></i>
  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
<br>
<a href='index.php'><i class='voltar'></i></a>