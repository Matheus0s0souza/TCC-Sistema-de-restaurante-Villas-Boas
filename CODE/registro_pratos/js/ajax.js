//============= metodo de pesquisa ======================================

function Pesq()
{

    var DadosForm =$('#Pratos').serialize();

    $.ajax(
        {
            method: 'GET',
            url: 'controlePratos.php?Pesquisar',
            data: DadosForm,
            beforeSend: function()
            {
                $("h2").html("Carregando consulta..")
            }            
        })
    
    .done(function(dadosPHP)
    {
        if(dadosPHP!=="nenhum prato encontrado")
        {
        console.log("Response from server:", dadosPHP);
        $("h2").html("Dados da pesquisa...");
        var prato = JSON.parse(dadosPHP);
        var Tabela = '';
        Tabela += "<tr><td>Id</td><td>Nome</td><td>1º ingrediente</td><td>2º ingrediente</td><td>3º ingrediente</td><td>Preço</td><td>administração</td></tr>";

        for(i=0;i<prato.length;i++)
        {
            Tabela += "<tr>";
                Tabela += "<td>"+prato[i].id_prato+"</td>";
                Tabela += "<td>"+prato[i].nm_prato+"</td>";
                Tabela += "<td>"+prato[i].prato_ingr_1+"</td>";
                Tabela += "<td>"+prato[i].prato_ingr_2+"</td>";
                Tabela += "<td>"+prato[i].prato_ingr_3+"</td>";
                Tabela += "<td>"+"R$"+prato[i].preco_prato+"</td>";
                Tabela += "<td>" + '<button onclick="deletarPrato(' + prato[i].id_prato + ')">Deletar</button>' + "</td>";
                Tabela += "</tr>";
        }
        Tabela += "</table>";
        $("#tabela").html(Tabela);
    }
    else {alert("nenhum prato encontrado")}
    })

    .fail(function()
    {
        alert("falha na consulta");
    });
    
    return false;


}

function deletarPrato(idPrato) 
{

    $.ajax({
        method: 'GET',
        url: 'controlePratos.php?Deletar',
        data: { id_prato: idPrato },
        success: function(response) {
            alert(response);
            location.reload();
        },
        error: function(error) {
            alert("Erro ao deletar prato: " + error);
        }
    });
}