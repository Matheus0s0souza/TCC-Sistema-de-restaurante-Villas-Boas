<?php
require_once 'conexao.php';
require_once 'clsIngredientes.php';
//$pesc = new clsIngredientes($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>

    <title>ingredientes</title>

    <style>
        #formulario{
            border: 1px solid orange;
        }
        td {
            border: 1px solid green
        }
        #tabela {
            border: 1px solid black
        }
        ;
    </style>
</head>

<body>
    <div>
    <section id="formulario">
        <form action="controleIngredientes.php" method="get" id="ingredientes">
            <label for="ingre">Nome do ingrediente:</label>
            <input type="text" name="ingre" id="ingre"><br><br>
            <label for="gramas">Gramas (g):</label>
            <input type="number" name="gramas" id="gramas"><br><br>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" cols="30" rows="5" maxlength="190"></textarea><br><br>
            
            <label for="img">Imagem</label>
            <input type="file" name="img">

            <input type="submit" value="Registrar" name="Registrar" id="Registrar">
            <input type="submit" value="consultar" name="Pesquisar" id="consultar">
            <input type="button" value="Pesquisar" name="Pesquisar" id="Pesquisar" onclick="Pesq()">
        </form>
    </section>
    </div>
    <div id="tabela">

    
    <!--<section>

                <table>
                
                    <tr>
                        <td>Id</td>
                        <td>Nome</td>
                        <td>gramas</td>
                        <td>Descrição</td>
                        <td>Adimistração</td>
                        </tr>
                    
                        <?php
                        /*$res=$pesc->Consultar();
                        if($res== "nenhum ingrediente encontrado")
                        {
                        $comando=$conexao->prepare("SELECT * FROM tb_ingredientes;");
                        $comando->execute();
                        $result = $comando->fetchAll(PDO::FETCH_ASSOC);
                        foreach($result as $dd)
                        {
                            echo "
                            <tr>
                                <td>{$dd['id_ingr']}</td>
                                <td>{$dd['nm_ingr']}</td>
                                <td>{$dd['gra_ingr']}</td>
                                <td>{$dd['desc_ingr']}</td>
                                <td></td>
                            </tr>";
                        }
                        }
                     else
                        {
                        foreach($res as $dd)
                        {
                            echo "
                            <tr>
                                <td>{$dd['id_ingr']}</td>
                                <td>{$dd['nm_ingr']}</td>
                                <td>{$dd['gra_ingr']}</td>
                                <td>{$dd['desc_ingr']}</td>
                                <td></td>
                                </td>";
                        }
                        }
                    */?>

                </table>
                </form>
    </section>-->
    </div>
</body>

</html>