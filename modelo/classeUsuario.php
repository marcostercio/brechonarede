<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Abstract class ClasseUsuario {

    private $nome;
    private $senha;
    private $email;
    private $cidade;
    private $localidade;
    private $logradouro;
    private $cep;
    private $cpf;
    private $bairro;
    private $tel1;
    private $tel2;
    private $perfil;
    private $sexo;

    
    function getLogradouro() {
        return $this->logradouro;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

        function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getLocalidade() {
        return $this->localidade;
    }

    function getCep() {
        return $this->cep;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getTel1() {
        return $this->tel1;
    }

    function getTel2() {
        return $this->tel2;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setLocalidade($localidade) {
        $this->localidade = $localidade;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setTel1($tel1) {
        $this->tel1 = $tel1;
    }

    function setTel2($tel2) {
        $this->tel2 = $tel2;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

}
