
s<?php
session_start();

ob_start();

	$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
	
	if($btnCadUsuario){
		
        
		include_once 'conect.php';
		$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
		
		$erro = false;
		 
		$dados_st = array_map('strip_tags', $dados_rc);
		$dados = array_map('trim', $dados_st);
		
      
        
		
		if(!$erro){
			
			//var_dump($dados);
			$result_usuario = "INSERT INTO disci (codigo, nome, obrig, ch, credito) VALUES (
                            '" .$dados['codigo']. "',
                            '" .$dados['nome']. "',
                            '" .$dados['obrig']. "',
                            '" .$dados['ch']. "',
                            '" .$dados['credito']. "'
							)";
							
			$resultado_usario = mysqli_query($conn, $result_usuario);
			
			if(mysqli_insert_id($conn)){
				
				$_SESSION['msgcad'] = "";
				
			echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ppges/disc_edit.php'>
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
