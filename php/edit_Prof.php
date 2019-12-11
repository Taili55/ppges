<?php
	
	include_once("conect.php");
	
	$idProfessor = $_POST['idProfessor'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $lattes = $_POST['lattes'];
    $area = $_POST['area'];
    $descricao = $_POST['descricaoo'];


	if(isset($nome) && isset($email) && isset($lattes) && isset($area) && isset($descricao)){
	
	$result_func = "UPDATE professor SET nome = '$nome', email = '$email', lattes = '$lattes', area = '$area', descricaoo = '$descricao' WHERE idProfessor = '$idProfessor";
	$resultado_func = mysqli_query($conn, $result_func);
	
	
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ppges/prof_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Dados Atulizados !\");
						</script>";
	 
	 }
	 else {
	 };
	 
	
?>