<?php
//define('BASE_PATH', __DIR__);
class clsIngredientes{

private $ingre;
private $gramas;
private $descricao;
///
private $img

private $conexao; // conexao com o database

public function __construct($conexao) { 
    $this->conexao = $conexao;
}

//--------------------------------------------------------
public function getingre()
{
    return $this->ingre;
}
public function setingre($ig)
{
    $this->ingre = $ig;
}

//--------------------------------------------------------

public function getgramas()
{
    return $this->gramas;
}
public function setgramas($gm)
{
    $this->gramas = $gm;
}
//--------------------------------------------------------

public function getdescricao()
{
    return $this->descricao;
}
public function setdescricao($desc)
{
    $this->descricao = $desc;
}
//--------------------------------------------------------
///
public function getimg()
{
    return $this->img;
}
public function setimg($img)
{
    $this->img = $img;
}
//--------------------------------------------------------

//------------------registro------------------------------

public function Registrar()
{

    //include "conexao.php";
    try{
        $comando=$this->conexao->prepare("insert into tb_ingredientes (nm_ingr, gra_ingr, desc_ingr, pra_img) values (?,?,?,?)");
        $comando->bindParam(1,$this->ingre);
        $comando->bindParam(2,$this->gramas);
        $comando->bindParam(3,$this->descricao);
        //
        $comando->bindParam(4,$this->img);

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
    //include "conexao.php";

        try
        {
            //$comando=$this->conexao->prepare("SELECT * FROM tb_ingredientes;");
            $comando=$this->conexao->prepare("SELECT * FROM tb_ingredientes "); //WHERE nm_ingr = ? or gra_ingr = ?;");
           // $comando->bindParam(1,$this->ingre);
           // $comando->bindParam(2,$this->gramas);

            if($comando->execute())
            {
                if($comando->rowCount()>0)
                {
                    $Tabela     = $comando->fetchAll(PDO::FETCH_ASSOC);
                    $retorno    = json_encode($Tabela);
                   // var_dump($retorno);
                    //exit;
                    
                }
                else
                {
                    $retorno= "nenhum ingrediente encontrado";
                }
            }
        }
        catch(PDOException $erro)
        {
            $retorno = "Erro ".$erro-> getMessage();
        }
        return $retorno;
    }
}

?>