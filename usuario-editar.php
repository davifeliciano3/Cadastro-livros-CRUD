<h1>Editar Usuário</h1>
<?php
	$sql = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">
	<div class="mb-3">
		<label>Nome do usuario</label>
		<input type="text" name="nome_usuario" value="<?php print $row->nome_usuario; ?>" class="form-control">
	</div>
	<div clusuario
		<label>CPF do usuario</label>
		<input type="text" name="cpf_usuario" value="<?php print $row->cpf_usuario; ?>" class="form-control">
	</div>
	<div clusuario
		<label>Email do usuario</label>
		<input type="text" name="email_usuario" value="<?php print $row->email_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone do usuario</label>
		<input type="text" name="fone_usuario" value="<?php print $row->fone_usuario; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>