

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'modelo/DAO/classeProdutoDAO.php';
@$sexo = $_GET['sexo'];
@$precomin = $_GET['min'];
@$precomax = $_GET['max'];
@$nomeproduto = $_GET['nomeproduto'];
if (!isset($_GET['pg'])):
    $pg = $_GET['pg'] = 1;
endif;
$pg = $_GET['pg'];

$obj = new classeProdutoDAO;
$objeto = $obj->ProdutosCliente($sexo, $precomin, $precomax, $nomeproduto, $pg);
$pesquisa = $obj->buscarProduto("", "");
include "visao/formPaginaProduto.php";
echo "<br>";
$resultadoqtd =(isset($_GET['submit']))? sizeof($pesquisa) :     sizeof($objeto);
echo "<span class='numeracao'> quantidade:".sizeof($objeto)." </span><br><br>";
foreach ($objeto as $resultado) {
    if (file_exists('img/produtos/' . $resultado->foto . '.jpg')):
        //adicionar foto
        $ft = "<img src='img/produtos/$resultado->foto.jpg' >";
    else:
        $ft = "<img src='img/semft.jpg' >";
    endif;

    echo "<div class='box'>
      
<a href='index.php?ctrl=controladorInformacaoProduto&pdt=$resultado->idProduto'>
$ft
<span class='titulo'>" . substr($resultado->nome, 0, 15) . "</span>
  
<span class='price'><p>R$" . number_format($resultado->preco, '2', ',', '.') . " </p></span>

</a>
</div>


    ";
}
if (!$objeto) {
    echo "<span class='erro'>Nao encontrado</span>";
}
if($sexo == '' && $precomin =='' && $precomax==''){
$tdspdt = count($pesquisa);
$qtdpgs = ($tdspdt % 12 == 0) ? ($tdspdt / 12) : ($tdspdt / 12) + 1;
echo '<br><br>';

echo "<ul class='paginasbtn'>";
 
for ($i = 1; $i <= $qtdpgs; $i++) {




    echo '<li><a href="?ctrl=controladorPaginaProdutos&&pg='. $i .'" class="btnpg">' . $i . '</a></li>';
}
}
echo "</ul><br><br><a href='index.php'><i class='voltar'></i></a>";
//echo sizeof($objeto);
//echo "wtf";


