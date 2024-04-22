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
        <form action="controlePratos.php" method="get" id="Pratos">
            <label for="Prato">Nome do prato:</label>
            <input type="text" name="Prato" id="Prato"><br><br>
            <label for="PratoIngr1">1º ingrediente:</label>
            <input type="text" name="PratoIngr1" id="PratoIngr1"><br><br>
            <label for="PratoIngr2">2º ingrediente:</label>
            <input type="text" name="PratoIngr2" id="PratoIngr2"><br><br>
            <label for="PratoIngr3">3º ingrediente:</label>
            <input type="text" name="PratoIngr3" id="PratoIngr3"><br><br>
            <label for="PrecoPrato">Preço do prato R$:</label>
            <input type="number" name="PrecoPrato" id="PrecoPrato" step="0.01"><br><br>

            <input type="submit" value="Registrar" name="Registrar" id="Registrar">
            <input type="submit" value="consultar" name="Pesquisar" id="consultar">
            <input type="button" value="Pesquisar" name="Pesquisar" id="Pesquisar" onclick="Pesq()">
        </form>
    </section>
    </div>
    <div id="tabela">
    </div>
</body>

</html>