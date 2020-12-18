<?PHP
 unset($_SESSION['carrinho'][1]);
//verifica se esta logado
//if(!isset($_SESSION['usuarioLogado'])){
//   
//    echo "<script type='text/javascript'>
//      alert('Logue Primeiro!');  
//      location.href='index.php';
//      
//       </script>
//    ";    
//}

echo "<h1><i class='carrinho'></i>Carrinho de Compras</h1>";
if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho']=array();
}
//adiciona produto
if(isset($_POST['acao'] )OR isset($_GET['acao'])){
//se nao for deletar faz isso    
if(!isset($_GET['acao'])){
$quantidade = $_POST['quantidade'];
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$preco = $_POST['preco'];
$tamanho = $_POST['tamanho'];
$descricao = $_POST['descricao'];
$cor = $_POST['cor'];
$tipo = $_POST['tipo'];
}
    
//adiciona ao carrinho
   if(@$_POST['acao']=='add'){
   $id = intval($_POST['id']);
   
   if(!isset($_SESSION['carrinho'][$id])){
   $_SESSION['carrinho'][$id]=array("idLogado"=>$_SESSION['idUsuario'],"idProduto"=>$id,"nome"=>$nome,"quantidade"=>$quantidade,"genero"=>$genero,"preco"=>$preco,"tamanho"=>$tamanho,"descricao"=>$descricao,"cor"=>$cor,"tipo"=>$tipo);  
   }
   else{
   $_SESSION['carrinho'][$id]=array("idLogado"=>$_SESSION['idUsuario'],"idProduto"=>$id,"nome"=>$nome,"quantidade"=>$quantidade,"genero"=>$genero,"preco"=>$preco,"tamanho"=>$tamanho,"descricao"=>$descricao,"cor"=>$cor,"tipo"=>$tipo);  
  
   }
   echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php?ctrl=controladorCarrinho'>";
   }
//deletar do carrinho
if(@$_GET['acao']=='remover'){
    $id = intval($_GET['id']);
   
   if(isset($_SESSION['carrinho'][$id])){
       unset($_SESSION['carrinho'][$id]);
       echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php?ctrl=controladorCarrinho'>";
      
   }
}   
}
 
//print_r($_SESSION['carrinho']);


if(count($_SESSION['carrinho'])==0){
     $_SESSION['msg'] = 'Nao existem produtos no carrinho';
        header('location:index.php?msg=aviso');
 echo "Nao existem produtos no carrinho";   
}
else{
    echo "<ul class='carrinhoul'><li>Produto:</li><li>quantidade:</li><li>preco:</li><li>SubTotal:</li><li>Remover:</li><li>Compra:</li>";
    foreach($_SESSION['carrinho'] as $indice=>$valor){
        //mostra só as compras de quem esta logado
      //  if(@$valor["idLogado"]==$_SESSION['idUsuario']){
        $subtotal = $valor['preco']*$valor['quantidade'];
        @$total += $subtotal;
        $total = number_format($total,2,',','.');
        echo "
          <ul >
         
          <li><b>".$valor['nome']."</b></li>
          <li>".$valor['quantidade']."</li>
          <li>R$ ".number_format($valor['preco'],2,',','.')."</li>
          <li>R$ ".number_format($subtotal,2,',','.')."</li>
          <li><a href='?ctrl=controladorCarrinho&acao=remover&id=".$valor['idProduto']."'>Remover</a></li>
          <li><a href='?ctrl=controladorCarrinho&acao=finalizar'>Finalizar Compra</a></li>
          </ul>";
      //fim do if nao precisa ser a conta q adicionou  }
    }
    echo "<b>total =</b>".$total;
    echo "</ul>";
  
}
  echo "<br><br><a href='?ctrl=controladorPaginaProdutos'><i class='voltar'></i></a>";
?>