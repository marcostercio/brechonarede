<?php

if (isset($_GET['link'])) {
    if (file_exists('visao/' . @$_GET['link'] . '.php')) {

        include "visao/" . $_GET['link'] . ".php";
    } else {
        echo "Página nao encontrada!";
    }
} elseif(isset($_GET['ctrl'])){
     if (file_exists('controle/' . @$_GET['ctrl'] . '.php')) {

        include "controle/" . $_GET['ctrl'] . ".php";
    } else {
        echo "Página nao encontrada!";
    }
}
else{

    include "controle/controladorMostrarProduto.php";
}
?>             