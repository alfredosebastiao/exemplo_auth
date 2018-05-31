<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conectar
 *
 * @author Hercilio
 */
class Conexao{
    
    
    private $database ;
    private $user ;
    private $pass;
    private $conection;
    



    public function conectar(){
    
        try {

             $conection = new PDO("mysql:dbname=exemplo_auth;host=localhost","root","");
             return $conection;
        } catch (PDOException $ex) {
            
            print_r($ex);
        }
    }
    
    public function desconectar(){
        try {
             $conection = null;
        } catch (Exception $ex) {
            
        }
    }


}

