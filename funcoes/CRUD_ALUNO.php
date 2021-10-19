<?php
include("conexao.php");
if (isset($_POST["nome"])) {
	$busca = $_POST["nome"];
	$query = "select * from aluno where nome like '%".$busca."%' order by nome";
}
else {
	$query = "select * from aluno order by nome";
}
class CRUD_ALUNO
{

    private $conexao;

    function __construct()
    {
        $this->conexao = conectar();
    }


    function listar_todos()
    {
        $sqlBusca = 'SELECT	* FROM aluno';
        $resultado = mysqli_query($this->conexao, $sqlBusca);
        $alunos = [];
        while ($aluno = @mysqli_fetch_assoc($resultado)) {
            $alunos[] = $aluno;
        }

        return $alunos;
    }

    function listar_por_id($id)
    {
        $sqlBusca = "SELECT	* FROM aluno where id={$id}";
        $resultado = mysqli_query($this->conexao,    $sqlBusca);
        $aluno = [];
        while ($estudante = @mysqli_fetch_assoc($resultado)) {
            $aluno[] = $estudante;
        }

        return $aluno;
    }
}
