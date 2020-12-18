<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class classeProduto {
    private $idProduto;
    private $nome;
    private $foto;
    private $tamanho;
    private $cor;
    private $genero;
    private $preco;
    private $tipo;
    private $descricao;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    function getPreco() {
        return $this->preco;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    function getFoto() {
        return $this->foto;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }
    function getDescricao() {
        return $this->descricao;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }



}
