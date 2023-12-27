<h1>Cadastrar Usuário</h1>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do usuário</label>
		<input type="text" name="nome_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF do usuário</label>
		<input type="text" name="cpf_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email do usuario</label>
		<input type="text" name="email_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone do usuario</label>
		<input type="text" name="fone_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>