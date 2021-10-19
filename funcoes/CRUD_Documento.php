<?php
include_once("conexao.php");
if (isset($_POST["nome"])) {
    $busca = $_POST["nome"];
    $query = "select * from documento where nome like '%" . $busca . "%' order by nome";
} else {
    $query = "select * from documento order by nome";
}
class CRUD_Documento
{

    private $conexao;

    function __construct()
    {
        $this->conexao = conectar();
    }


    function listar_todos()
    {
        $sqlBusca = 'SELECT	* FROM documento';
        $resultado = mysqli_query($this->conexao, $sqlBusca);
        $documentos = [];
        while ($documento = @mysqli_fetch_assoc($resultado)) {
            $documentos[] = $documento;
        }

        return $documentos;
    }

    function listar_por_id($id)
    {
        $sqlBusca = "SELECT	* FROM documento where idAluno={$id} and status=1 limit 7";
        $resultado = mysqli_query($this->conexao,    $sqlBusca);
        $doc = [];
        while ($documento = @mysqli_fetch_assoc($resultado)) {
            $doc[] = $documento;
        }

        return $doc;
    }
}
