<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//criei uma classe abstrata
abstract class conexao {

//criei uma função construtiva    

    function __construct() {
        
    }

    //declarei uma função public e statica
    public static function getInstance() {
        //conexao com banco de dados
        try {
            $pdo = new PDO("mysql:host=us-cdbr-east-02.cleardb.com; dbname=heroku_f1d70e32715567e;", "bf575b78ebf4a1", "bba8ba0f");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
        //fim getInstance
    }

}
