<?php
//define('BASE_PATH', __DIR__);
include_once "conexao.php";
include_once "clsPratos.php";

$cad = new clsPratos($conexao);

$Prato          = $_GET["Prato"];
$PratoIngr1     = $_GET["PratoIngr1"];
$PratoIngr2     = $_GET["PratoIngr2"];
$PratoIngr3     = $_GET["PratoIngr3"];
$PrecoPrato     = $_GET["PrecoPrato"];


$cad->setPrato($Prato);
$cad->setPratoIngr1($PratoIngr1);
$cad->setPratoIngr2($PratoIngr2);
$cad->setPratoIngr3($PratoIngr3);
$cad->setPrecoPrato($PrecoPrato);

        if (isset($_GET["Registrar"]))
        {
            echo $cad->Registrar();
            echo "<script>javascript:window.location='index.php';</script>";
        }

        if (isset($_GET["Pesquisar"]))
        {
            $dado = $cad->Consultar();
            if($dado>0)
            {
            echo $dado;
            }
            else 
            {
                echo "nenhum prato encontrado";
            }
        }
        if (isset($_GET["Deletar"]))
        {
            $cad->setIdPrato($_GET["id_prato"]); 
            $dados = $cad->Deletar();
            if($dados == "deletado")
            {
                echo "Deletado com sucesso')";
            }
            else
            {
                echo "Erro: " . $dados;
            }
            exit;
        }
?>