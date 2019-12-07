<?php
session_start();

ob_start();

	$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
	
	if($btnCadUsuario){
		
		include_once 'conect.php';
		$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		 
		$dados_st = array_map('strip_tags', $dados_rc);
		$dados = array_map('trim', $dados_st);
		
        if(in_array('',$dados)){
			
			$erro = true;
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ppges/coord_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Necessário todos os dados.\");
						</script>";
		}
        
		
		else{
			
			$result_usuario = "SELECT id_Usuario FROM usuario WHERE email='". $dados['email'] ."'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			
			if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
				$erro = true;
                echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ppges/coord_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Este e-mail já está cadastrado .\");
						</script>";
			}
		}
		if(!$erro){
			
			//var_dump($dados);
			$result_usuario = "INSERT INTO coord (nome, email,  cargo) VALUES (   
                            '" .$dados['nome']. "',    
                            '" .$dados['email']. "',
							'" .$dados['cargo']. "'
							)";
							
			$resultado_usario = mysqli_query($conn, $result_usuario);
			
			if(mysqli_insert_id($conn)){
				
				$_SESSION['msgcad'] = "";
				
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ppges/coord_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Cadastrado com sucesso.\");
						</script>";
			}
			else{
				$_SESSION['msg'] = "Erro ao cadastrar o usuário";
			}
		}
    }
?>
            