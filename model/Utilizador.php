<?php
include_once 'Conexao.php';


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilizador
 *
 * @author Hercilio
 */
class Utilizador {
    //atributos
    private $username;
    private $senha;
    
//    function __construct($username, $senha) {
//        $this->username = $username;
//        $this->senha = $senha;
//    }
    
    function getUsername() {
        return $this->username;
    }

    function getSenha() {
        return $this->senha;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }




    /* Metodode insercao */


    public function validarUser($user) {

        $username = $user['username'];
        $senha = $user['password'];

        /**
         * Caso a senha esteja encriptada usando o algoritmo sha1 ou md5, respectivamente, faz -se a conversao da senha,
         * $senha = sha1($user['senha']); ,
         *  $senha = md5($user['senha']);
         */

        //



        try {
            $con = new Conexao();


            $resultado = $con->conectar()->query("SELECT * FROM `utilizador`
               WHERE `username`='$username' AND `password`='$senha';");




            if($resultado->rowCount()==1){

                $utilizador =  $resultado->fetch();


                session_start();


                $_SESSION['is_logado']="1";


                $_SESSION['username']= $utilizador['username'];


                $_SESSION['is_cliente']= $utilizador['is_cliente'];

//                echo  $_SESSION['is_cliente'];

                if($_SESSION['is_cliente'] == "0"){
                    header("Location://localhost/exemplo_auth/view/tela_gestor.php");
                }else{
                    header("Location://localhost/exemplo_auth/view/tela_cliente.php");
                }

            }else{

                header('Location:http://localhost/exemplo_auth/?error=user-nao-corresponde');
            }
        } catch(Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function sair(){
        // you must start session before destroying it
        session_start();
        session_destroy();


        header("Location:http://localhost/exemplo_auth/");
    }


}
