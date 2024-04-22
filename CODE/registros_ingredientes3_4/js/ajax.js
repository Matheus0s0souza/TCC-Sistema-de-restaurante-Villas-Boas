//============= metodo de pesquisa ======================================

function Pesq()
{

    var DadosForm =$('#ingredientes').serialize();

    $.ajax(
        {
            method: 'GET',
            url: 'controleIngredientes.php?Pesquisar',
            data: DadosForm,
            beforeSend: function()
            {
                $("h2").html("Carregando consulta..")
            }
        })
    
    .done(function(dadosPHP)
    {
        if(dadosPHP!=="nenhum ingrediente encontrado")
        {
        $("h2").html("Dados da pesquisa...");
        var ingr = JSON.parse(dadosPHP);
        var Tabela = '';
        Tabela += "<tr><td>Id</td><td>Nome</td><td>gramas</td><td>Descrição</td><td>Adimistração</td></tr>";

        for(i=0;i<ingr.length;i++)
        {
            Tabela += "<tr>";
                Tabela += "<td>"+ingr[i].id_ingr+"</td>";
                Tabela += "<td>"+ingr[i].nm_ingr+"</td>";
                Tabela += "<td>"+ingr[i].gra_ingr+"</td>";
                Tabela += "<td>"+ingr[i].desc_ingr+"</td>";
                Tabela += "<td>" + '<button onclick="deletarIngr(' + ingr[i].id_ingr + ')">Deletar</button>' + "</td>";
                Tabela += "</tr>";
        }
        Tabela += "</table>";
        $("#tabela").html(Tabela);
    }
    else {alert("nenhum ingrediente encontrado")}
    })

    .fail(function()
    {
        alert("falha na consulta");
    });
    
    return false;


}

function deletarIngr(idingr) 
{

    $.ajax({
        method: 'GET',
        url: 'controleIngredientes.php?Deletar',
        data: { id_ingr: idingr },
        success: function(response) {
            alert("deletado com sucesso");
            location.reload();
        },
        error: function(error) {
            alert("Erro ao deletar prato: " + error);
        }
    });
}