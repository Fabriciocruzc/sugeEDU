<?php include '../conexao.php'; ?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Discentes</a></li>
			<li><a href="#">Pesquisa Avançada</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading"><i class="fa fa-filter"></i> Pesquisa Avançada</div>
			<div class="panel-body">
				<form name="form" class="form-horizontal" method="post" action="">
					<div class="form-group">
							<label class="col-sm-2 control-label">Turma:</label>
								<div class="col-sm-4">
									<select name="turma" data-toggle="tooltip" data-placement="bottom" title="Turma">
										<option value="">Selecione</option>
											<?php 
											$sql_turma = mysqli_query($conn, "SELECT * from turma ORDER BY id");
											while($dados_turma = mysqli_fetch_assoc($sql_turma)){
											?>
											<option value="<?php echo $dados_turma['id']; ?>"><?php echo utf8_encode($dados_turma['nome']); ?></option>
										<?php } ?>
									</select>
								</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-xs btn-primary btn-label-left">
							<span><i class="fa fa-search"></i></span>
								Pesquisar
							</button>
						</div>
					</div>		
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-tasks"></i>
					<span>Alunos Encontrados</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-3">
					<thead>
						<tr>
							<th>Matrícula</th>
							<th>Nome</th>
							<th>Turma</th>
							<th>Turno</th>
							<th>Situacao</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>20141174010675</td>
							<td>Leonardo Maurício</td>
							<td>Info 4ºM</td>
							<td>Matutino</td>
							<td>Cursando</td>
							<td>
								<button class="btn btn-xs btn-info">Visualizar</button>
								<button class="btn btn-xs btn-warning">Editar</button>
								<button class="btn btn-xs btn-danger">Excluir</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}
$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>
