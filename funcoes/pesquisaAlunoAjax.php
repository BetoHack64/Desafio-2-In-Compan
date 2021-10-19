<?php
$connect = new PDO("mysql:host=localhost;dbname=incompanybd", "root", "");
if (isset($_POST["nome"])) {
    $busca = $_POST["nome"];
    $query = "select * from aluno where nome like '%" . $busca . "%' order by nome";
} else {
    $query = "select * from aluno order by nome";
}
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$rowCount = $statement->rowCount();

if ($rowCount > 0) {
    $data = "";
    foreach ($result as $row) {
        $data .= ' <div class="col-md-4 col-sm-6 text-center">
                        <div class="box">
                            <div class="avatar">
                                <img class="img-fluid " src="assets/img/'.$row['foto'].'">
                            </div>
                            <div class="box_content">
                                <h3 class="title">' . $row['nome'] . '</h3>
                                <span class="post">' . $row['curso'] . '</span>
                            </div>
                            <ul class="icons">
                                <li><a href="docs_aluno.php?id='.$row['id'].'" name="verBtn"><i class="fas fa-bars"></i></a></li>
                            </ul>
                        </div>
                    </div>';
    }
} else {
    $data = "Nenhum registro localizado.";
}

echo $data;
