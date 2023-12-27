
<h1>Funcionario editar</h1>
<?php
	$sql = "SELECT * FROM funcionario WHERE id_funcionario=".$_REQUEST['id_funcionario'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_funcionario" value="<?php print $row->id_funcionario; ?>">
	<div class="mb-3">
		<label>Nome do funcionario</label>
		<input type="text" name="nome_funcionario" value="<?php print $row->nome_funcionario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF do funcionario</label>
		<input type="text" name="cpf_funcionario" value="<?php print $row->cpf_funcionario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email do funcionario</label>
		<input type="text" name="email_funcionario" value="<?php print $row->email_funcionario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone do funcionario</label>
		<input type="text" name="fone_funcionario" value="<?php print $row->fone_funcionario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>