<?php
	
	include_once("conect.php");
	
	$idcoord = $_POST['idcoord'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $subcargo = $_POST['subcargo'];


	if(isset($nome) && isset($email) && isset($cargo) && isset($subcargo)){
	
	$result_func = "UPDATE coord SET nome = '$nome', email = '$email', cargo = '$cargo', subcargo = '$subcargo' WHERE idcoord = '$idcoord'";
	$resultado_func = mysqli_query($conn, $result_func);
	
	
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ppges/coord_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Dados Atulizados !\");
						</script>";
	 
	 }
	 else {
	 };
	 
	
?>