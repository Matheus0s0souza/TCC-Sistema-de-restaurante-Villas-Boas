<?php
//define('BASE_PATH', __DIR__);
include_once "conexao.php";
include_once "clsIngredientes.php";

$cad = new clsIngredientes($conexao);

$ingre      = $_GET["ingre"];
$gramas     = $_GET["gramas"];
$descricao  = $_GET["descricao"];
//
$img  = $_GET["img"];

//
$cad->setimg($img);

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
            /*
            if(empty($dado))
            {
                $dado = $cad->consultar();
                echo"<script>alert('não localizado')</script>";
                echo "<script>document.location='index.php'</script>";
            }
            else
            {
                if($dado =="nenhum ingrediente encontrado")
                {
                echo"<script>alert('não localizado')</script>";
                echo "<script>document.location='index.php'</script>";
                }
                else
                {
                        foreach($dado as $dd)
                        {
                            echo " <table>
                            <tr>
                                <td>{$dd['id_ingr']}</td>
                                <td>{$dd['nm_ingr']}</td>
                                <td>{$dd['gra_ingr']}</td>
                                <td>{$dd['desc_ingr']}</td>
                                <td></td>";
                        }
                }
            }*/
        }
?>