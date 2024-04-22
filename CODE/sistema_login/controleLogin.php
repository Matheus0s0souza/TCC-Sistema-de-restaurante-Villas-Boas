<?php
include_once "clsLogin.php";

$cad = new clsLogin();

$nome       = filter_input(INPUT_POST, "nome");
$email      = filter_input(INPUT_POST, "email");
$senha      = filter_input(INPUT_POST, "senha");
$nasc       = filter_input(INPUT_POST, "nasc");
$tel        = filter_input(INPUT_POST, "tel");
$ende       = filter_input(INPUT_POST, "ende");

$senhaVer   = filter_input(INPUT_POST, "senhaVer");


$cad->setnome($nome);
$cad->setemail($email);
$cad->setsenha($senha);
$cad->setnasc($nasc);
$cad->settel($tel);
$cad->setende($ende);

$cad->setsenhaVer($senhaVer);


if (isset($_POST["cadastrar"])) {
    echo $cad->cadastrar();
}

//-------------------------------------------------------------------------------------------------------------------------

if (isset($_POST["entrar"])) {
    $dados = $cad->login();
    
if ($dados == "login invalido") {
        echo "invalido";
    } elseif ($dados->email == $email & $dados->senha == $senha) {
        header("location: excluir.html");
    }
}

//--------------------------------------------------------------------------------------------------------------------------

if (isset($_POST["excluir"])) {
    $dados = $cad->excluir();
    if($dados == 'dados errados'){
        echo "dados errados";
    }
/*if ($dados == "dados invalido") {
        echo "invalido";
    } elseif ($dados->email == $email && $dados->senha == $senha && $senhaVer == $dados->senha) {
        header("location: index.php");
    } elseif ($dados->email == $email && $dados->senha == $senha && $senhaVer != $dados->senha) {
        echo "verificação de sernha está errada";
    }  */
}