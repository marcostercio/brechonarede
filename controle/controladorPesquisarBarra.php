<?php
//sleep(3);
require_once '../modelo/DAO/classeProdutoDAO.php';
$get =$_GET['p'];

$pesquisa = new classeProdutoDAO();
$pesquisaProduto = $pesquisa->pesquisaBarra($get);

    foreach ($pesquisaProduto as $resultpesq) {
        echo "
        <a href='index.php?ctrl=controladorInformacaoProduto&pdt=$resultpesq->idProduto'>
                    <span class='titulopesquisatopo'>".$resultpesq->nome."</span>   
                    <p>".$resultpesq->descricao."</p>
         </a>
        
        ";
    }
    
if($pesquisaProduto == false){
    echo "Produto não encontrado";
}
    
echo "<p ><font color='#ccc'>".sizeof($pesquisaProduto)." resultados</font></p>";


    