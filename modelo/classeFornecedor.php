<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classeFornecedores
 *
 * @author Casa
 */
require_once 'classeUsuario.php';
class classeFornecedor extends ClasseUsuario {

    //put your code here
    private $idfornecedor;
    private $cnpj;
   
    function getIdfornecedor() {
        return $this->idfornecedor;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function setIdfornecedor($idfornecedor) {
        $this->idfornecedor = $idfornecedor;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }


   

}
