<?php
//define('BASE_PATH', __DIR__);
include_once "conexao.php";
include_once "clsIngredientes.php";

$cad = new clsIngredientes($conexao);

$ingre      = $_GET["ingre"];
$gramas     = $_GET["gramas"];
$descricao  = $_GET["descricao"];

$cad->setingre($ingre);
$cad->setgramas($gramas);
$cad->setdescricao($descricao);

        if (isset($_GET["Registrar"]))
        {
            echo $cad->Registrar();
            echo "<script>javascript:window.location='index.php';</script>";
        }

        if (isset($_GET["Pesquisar"]))
        {

            $dado = $cad->Consultar();
            echo $dado;
        }
        if (isset($_GET["Deletar"]))
{
    $cad->setIdIngre($_GET["id_ingr"]); 
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