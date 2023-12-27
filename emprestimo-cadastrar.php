<h1>Cadastrar Emprestimo</h1>
<form action="?page=emprestimo-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Titulo do livro</label>
		<select name="livro_id_livro" class="form-control">
			<option>livro</option>
		<?php
			$sql = "SELECT * FROM livro";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_livro."'>";
					print $row->titulo_livro."</option>";
				}
			}else{
				print "<option>Não possui categoria</option>";
			}
		?>
		</select>
	</div>
	<div class="mb-3">
			<label>Selecione o usuario</label>
			<select name="usuario_id_usuario" class="form-control">
				<option> usuario</option>
			<?php
				$sql = "SELECT * FROM usuario";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_usuario."'>".$row->nome_usuario."</option>";
					}
				}else{
					print "<option>Não possui categoria</option>";
				}
			?>
			</select>
		</div>
	<div class="mb-3">
			<label>Selecione o atendente</label>
			<select name="funcionario_id_funcionario" class="form-control">
				<option>atendente</option>
			<?php
				$sql = "SELECT * FROM funcionario";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_funcionario."'>".$row->nome_funcionario."</option>";
					}
				}else{
					print "<option>Não possui categoria</option>";
				}
			?>
			</select>
		</div>	
	<div class="mb-3">
		<label>Data do emprestimo</label>
		<input type="date" name="data_emprestimo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de devolução</label>
		<input type="date" name="data_devolucao" class="form-control">
	</div>
		<div class="mb-3">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>