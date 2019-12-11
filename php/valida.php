<?php
	
  session_start();
    include("conect.php");
    $btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);


    if(isset($btnLogin)){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        
            if((!empty($email)) AND (!empty($senha))){
                
            	$result_usuario = "SELECT * FROM adm WHERE email='$email' AND senha = '$senha'";
                
                $resultado_usuario = mysqli_query($conn, $result_usuario);

        		if($resultado_usuario){

    	    		$row_usuario = mysqli_fetch_assoc($resultado_usuario);

        				$_SESSION['idAdm'] = $row_usuario['idAdm'];
                        $_SESSION['email'] = $row_usuario['email'];
                        $_SESSION['senha'] = $row_usuario['senha']; 
                        header("Location: ../admin.php");
                       
                
                }else{
        				$_SESSION['msg'] = "Login ou senha incorreto!";
        				header("Location: ../login.php");
                    }
                
        }
    }
?>		