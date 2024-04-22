<?php
//define('BASE_PATH', __DIR__);
class clsPratos{

private $idPrato;   
private $Prato;     
private $PratoIngr1;
private $PratoIngr2;
private $PratoIngr3;
private $PrecoPrato;

private $conexao; // conexao com o database

public function __construct($conexao) { 
    $this->conexao = $conexao;
}

//--------------------------------------------------------
public function getidPrato()
{
    return $this->idPrato;
}
public function setidPrato($Ip)
{
    $this->idPrato = $Ip;
}

//--------------------------------------------------------
public function getPrato()
{
    return $this->Prato;
}
public function setPrato($Pt)
{
    $this->Prato = $Pt;
}

//--------------------------------------------------------

public function getPratoIngr1()
{
    return $this->PratoIngr1;
}
public function setPratoIngr1($Pi1)
{
    $this->PratoIngr1 = $Pi1;
}
//--------------------------------------------------------

public function getPratoIngr2()
{
    return $this->PratoIngr2;
}
public function setPratoIngr2($Pi2)
{
    $this->PratoIngr2 = $Pi2;
}

//--------------------------------------------------------

public function getPratoIngr3()
{
    return $this->PratoIngr3;
}
public function setPratoIngr3($Pi3)
{
    $this->PratoIngr3 = $Pi3;
}
//--------------------------------------------------------

public function getPrecoPrato()
{
    return $this->PrecoPrato;
}
public function setPrecoPrato($Pp)
{
    $this->PrecoPrato = $Pp;
}

//------------------registro------------------------------

public function Registrar()
{

    //include "conexao.php";
    try{
        $comando=$this->conexao->prepare("insert into tb_pratos (nm_prato, prato_ingr_1, prato_ingr_2,prato_ingr_3,preco_prato) values (?,?,?,?,?)");
        $comando->bindParam(1,$this->Prato);
        $comando->bindParam(2,$this->PratoIngr1);
        $comando->bindParam(3,$this->PratoIngr2);
        $comando->bindParam(4,$this->PratoIngr3);
        $comando->bindParam(5,$this->PrecoPrato);

        if($comando->execute())
        {
            $retorno= "<script>alert('gravado com sucesso');</script>";
        }
    }
    catch(PDOException $erro)
    {
        $retorno = "Erro ".$erro-> getMessage();
    }
    return $retorno;
}

//---------------------------verificar--------------------------------------------
public function Consultar()
{
        try
        {
            $comando=$this->conexao->prepare("SELECT * FROM tb_pratos WHERE nm_prato = ? or prato_ingr_1 = ? or prato_ingr_2= ? or prato_ingr_3 = ? or preco_prato =?;");
            $comando->bindParam(1,$this->Prato);
            $comando->bindParam(2,$this->PratoIngr1);
            $comando->bindParam(3,$this->PratoIngr2);
            $comando->bindParam(4,$this->PratoIngr3);
            $comando->bindParam(5,$this->PrecoPrato);
            
            if($comando->execute())
            {
                if($comando->rowCount()>0)
                {
                    $Tabela     = $comando->fetchAll(PDO::FETCH_ASSOC);
                    $retorno    = json_encode($Tabela);

                }
                else
                {
                    $retorno= "nenhum prato encontrado";
                }
            }
        }
        catch(PDOException $erro)
        {
            $retorno = "Erro ".$erro-> getMessage();
        }
        return $retorno;
    }

//---------------------------- Deletar ------------------------------------------

public function Deletar() {
    try {
        $comando = $this->conexao->prepare("DELETE FROM tb_pratos WHERE id_prato = ?");
        $comando->bindParam(1, $this->idPrato);

        if ($comando->execute()) 
        {
            $retorno = "deletado";
        } 
    } 
    catch (PDOException $erro) 
    {
        $retorno = $erro->getMessage();
    }
    return $retorno;
}
}
?>