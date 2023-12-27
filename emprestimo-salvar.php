<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO emprestimo (livro_id_livro,
					usuario_id_usuario,funcionario_id_funcionario,data_emprestimo,data_devolucao) 	
					VALUES ('".$_POST['livro_id_livro']."',
							'".$_POST['usuario_id_usuario']."',
							'".$_POST['funcionario_id_funcionario']."',
							'".$_POST['data_emprestimo']."',
							'".$_POST['data_devolucao']."'

				)";

			
			$res = $conn->query($sql);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=emprestimo-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=emprestimo-listar';</script>";
			}
			break;
			}