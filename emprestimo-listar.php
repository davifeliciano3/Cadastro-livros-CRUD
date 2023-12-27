<h1>Listar Emprestimo</h1>
<?php
$sql = "SELECT e.livro_id_livro, e.usuario_id_usuario, e.funcionario_id_funcionario,e.data_emprestimo,e.data_devolucao,l.titulo_livro,u.nome_usuario,f.nome_funcionario
	FROM emprestimo as e
	INNER JOIN livro as l ON e.livro_id_livro = l.id_livro
	INNER JOIN usuario as u ON e.usuario_id_usuario = u.id_usuario
	INNER JOIN funcionario as f ON e.funcionario_id_funcionario = f.id_funcionario"
	;



	$res = $conn->query($sql);
	$qtd = $res->num_rows;
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Titulo do livro</th>";
		print "<th>Nome do usuario</th>";
		print "<th>Nome do funcionario</th>";
		print "<th>Data do emprestimo</th>";
		print "<th>Data do Devolução</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->nome_funcionario."</td>";
			print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->data_devolucao."</td>";
		}
		print "</table>";
	}else{
		print "<p>Não encontrou resultado</p>";
	}
?>