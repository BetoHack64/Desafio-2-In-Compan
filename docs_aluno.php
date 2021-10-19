<!DOCTYPE html>
<?php
include_once('funcoes/CRUD_ALUNO.php');
$alunoObjeto = new CRUD_ALUNO();
include_once('funcoes/CRUD_Documento.php');
$documentoObjeto = new CRUD_Documento();
$id = 0;
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$aluno = $alunoObjeto->listar_por_id($id);
	$documentosAluno = $documentoObjeto->listar_por_id($id);
}

?>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<title>Documentos Aluno - <?php echo $aluno[0]['nome'];?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="dist/js/jquery-1.10.2.min.js"></script>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/estiloDocView.css" rel="stylesheet">
	<script src="dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<div class="search-box">
		<input type="text" name="" class="search-txt" placeholder="Pesquisar" id="buscar">

		<a class="search-btn">
			<img src="assets/img/lupa.svg" alt="Lupa" height="20" width="20">
		</a>
	</div>
	<input type="text" name="" value="<?php echo $id; ?>" class="ml-5 mt-5" placeholder="Pesquisar" id="idAluno" style="display:none;">
	<div class="container">
		<div class="container-fluid p-1">
			<h1 class="h3 mb-3"></h1>
			<div class="row">
				<div class="col-xl-8">
					<div class="card">

						<div class="card-header pb-0">
							<div class="card-actions float-right">
								<div class="dropdown show">
									<a href="#" data-toggle="dropdown" data-display="static">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
											<circle cx="12" cy="12" r="1"></circle>
											<circle cx="19" cy="12" r="1"></circle>
											<circle cx="5" cy="12" r="1"></circle>
										</svg>
									</a>
								</div>
							</div>
							<h5 class="card-title mb-0">Documentos</h5>
						</div>

						<div class="card-body" id="resultado">


						</div>
					</div>
				</div>

				<div class="col-xl-4">

					<div class="card">
						<div class="card-header">
							<div class="card-actions float-right">
								<div class="dropdown show">
									<a href="#" data-toggle="dropdown" data-display="static">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
											<circle cx="12" cy="12" r="1"></circle>
											<circle cx="19" cy="12" r="1"></circle>
											<circle cx="5" cy="12" r="1"></circle>
										</svg>
									</a>
								</div>
							</div>

						</div>

						<div class="card-body">
							<div class="row g-0">
								<?php foreach ($aluno as $estudante) : ?>
									<div class="teste col-sm-3 col-xl-12 col-xxl-3 text-center">
										<img src="assets/img/<?php echo $estudante['foto'];?>" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
										<p>
										<h5 class="card-title mb-0"><?php echo $estudante['nome'] ?></h5>
										</p>
									</div>
									<div class="col-sm-9 col-xl-12 col-xxl-9">
										<strong></strong>

									</div>
							</div>

							<table class="table table-sm mt-2 mb-4">
								<tbody>
									<tr>
										<th>Email</th>
										<td><?php echo $estudante['email']; ?></td>
									</tr>
									<tr>
										<th>Telefone</th>
										<td><?php echo $estudante['telefone']; ?></td>
									</tr>
								</tbody>
							</table>

							<strong>Atividades Homologadas</strong>
							<ul class="timeline mt-3 mb-0">
								<?php foreach ($documentosAluno as $doc) : ?>
									<li class="timeline-item ml-4 mt-0">
										<strong><?php echo $doc['nome']; ?></strong>
										<span class="float-right text-muted text-sm">
											<?php $date = new DateTime($doc['dataEnviado']);
											echo $date->format('d M');  ?></span>
										<p><?php echo $doc['obs']; ?>...</p>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<script type="text/javascript">
		function buscarNome(nome, id) {
			$.ajax({
				url: "funcoes/pesquisaDocumentosAjax.php",
				method: "POST",
				data: {
					nome: nome,
					id: id
				},
				success: function(data) {
					$('#resultado').html(data);
				}
			});
		}

		function buscarId(id) {
			$.ajax({
				url: "funcoes/pesquisaDocumentosAjax.php",
				method: "POST",
				data: {
					id: id
				},
				success: function(data) {
					$('#resultado').html(data);
				}
			});
		}

		$(document).ready(function() {
			var id = $('#idAluno').val();
			console.log(id);
			buscarNome();
			buscarId(id);

			$('#buscar').keyup(function() {
				var nome = $(this).val();
				if (nome != '') {
					buscarNome(nome, id);
				} else {

					buscarId(id);
				}
			});
		});
	</script>
</body>

</html>