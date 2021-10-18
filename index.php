<!DOCTYPE html>
<html lang="pt">

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
			<input type="text" name="" class="search-txt" placeholder="Pesquisar">
			<a href="#" class="search-btn">
				<img src="assets/img/lupa.svg" alt="Lupa" height="20" width="20">
			</a>
		</div>
	</header>


	<section class="team pb-5">
		<div class="container">
			<?php
			include_once('funcoes/conexao/conexao.php');

			?>
			<div class="row">
				<div class="col-md-4 col-sm-6 text-center">
					<div class="box">
						<div class="avatar">
							<img class="img-fluid " src="assets/img/avatar7.png">
						</div>
						<div class="box_content">
							<h3 class="title">Bruno Sandande</h3>
							<span class="post">Engenharia Informatica</span>
						</div>
						<ul class="icons">
							<li><a href="#"><i class="fas fa-bars"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<p></p>
			</div>


		</div>

		</div>
	</section>


	<script type="text/javascript">

	</script>
</body>

</html>