<?php
include_once '../model/Utilizador.php';
include_once '../model/Conexao.php';
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09-Jun-17
 * Time: 11:35 AM
 */
if(isset($_POST)){

    $action = $_POST['action'];
    if($action == "1"){
        autenticar();
    }elseif ($action == "2"){
        sair();
    }
}

function autenticar(){

    $utilizador = new Utilizador();
    $utilizador->validarUser($_POST);

}

function sair(){

    $utilizador = new Utilizador();
    $utilizador->sair();

}