<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classeFuncionario
 *
 * @author Marcos
 */
require_once 'classeUsuario.php';

class classeFuncionario extends classeUsuario {

    //put your code here
    private $idfuncionario;
    private $cargo;
    private $salario;

    function getCargo() {
        return $this->cargo;
    }

    function getSalario() {
        return $this->salario;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function getIdfuncionario() {
        return $this->idfuncionario;
    }


}
