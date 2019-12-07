<?php
	
	include_once("conect.php");
	
	$idcoord = $_POST['idcoord'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];


	if(isset($nome) && isset($email) && isset($cargo)){
	
	$result_func = "UPDATE coord SET nome = '$nome', email = '$email', cargo = '$cargo' WHERE idcoord = '$idcoord'";
	$resultado_func = mysqli_query($conn, $result_func);
	
	
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ppges/coord_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Dados Atulizados !\");
						</script>";
	 
	 }
	 else {
	 };
	 
	
?>