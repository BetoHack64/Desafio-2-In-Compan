<?php
$connect = new PDO("mysql:host=localhost;dbname=incompanybd", "root", "");
$id = 0;
if (isset($_POST["id"])) {
    $id = (int)$_POST["id"];
}
//echo $id;
if (isset($_POST["nome"])) {
    $busca = $_POST["nome"];
    $query = "select * from documento where nome like '%" . $busca . "%' and idAluno = '" . $id . "' order by nome";
} else {
    $query = "select * from documento where idAluno='" . $id . "'order by nome";
}
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$rowCount = $statement->rowCount();

if ($rowCount > 0) {
    $data = '<table class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Horas</th>
            <th>Status</th>
        </tr>
    </thead>';
    foreach ($result as $row) {
        $status = $row['status'] == 1 ? 'Homologado' : 'Nao Homologado';
        $caminho = $row['ficheiroCaminho'];
        $data .= ' <tbody>
        <tr>
            <td><img src="assets/img/Doc.svg" width="32" height="32" class=" my-n1" alt="Avatar"></td>
            <td><a target="_blank" href="' . $caminho . '">' . $row['nome'] . '</a></td>
            <td>' . $row['tipo'] . '</td>
            <td>' . $row['horas'] . ' h' . '</td>
            <td>' . $status . '</td>
        </tr>';
    }
    $data .= '</tbody>';
    $data .= '</table>';
} else {
    $data = "Nenhum registro localizado.";
}

echo $data;
