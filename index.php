<!DOCTYPE html>
<html lang="pt">
<?php
include_once('funcoes/CRUD_ALUNO.php');
$aluno = new CRUD_ALUNO();
$alunos_lista = $aluno->listar_todos();

?>

<head>
	<meta charset="utf-8">
	<title>Lista de Alunos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="dist/js/jquery-1.10.2.min.js"></script>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="dist/css/font-awesome.min.css">
</head>

<body>
	<link rel="stylesheet" href="dist/css/boxicons.min.css">
	<link rel="stylesheet" href="dist/css/estilo.css">
	<link rel="stylesheet" href="dist/css/all.min.css">
	<header class="text-center py-5">
		<div class="search-box">
			<input type="text" name="" class="search-txt" placeholder="Pesquisar" id="buscar">
			<a class="search-btn">
				<img src="assets/img/lupa.svg" alt="Lupa" height="20" width="20">
			</a>
		</div>
	</header>


	<section class="team pb-5">
		<div class="container">
			<div class="row" id="resultado">

			</div>
		</div>

		</div>
	</section>


	<script type="text/javascript">
		function buscarNome(nome) {
			$.ajax({
				url: "funcoes/pesquisaAlunoAjax.php",
				method: "POST",
				data: {
					nome: nome
				},
				success: function(data) {
					$('#resultado').html(data);
				}
			});
		}

		$(document).ready(function() {
			buscarNome();

			$('#buscar').keyup(function() {
				var nome = $(this).val();
				if (nome != '') {
					buscarNome(nome);
				} else {
					buscarNome();
				}
			});
		});
	</script>
</body>

</html>