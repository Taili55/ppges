<?php
	
	include_once("conect.php");
	
	$iddisci = $_POST['iddisci'];
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $obrig = $_POST['obrig'];
    $ch = $_POST['ch'];
    $credito = $_POST['credito'];


	if(isset($codigo) && isset($nome) &&  isset($obrig) && isset($ch) && isset($credito)){
	
	$result_func = "UPDATE disci SET codigo = '$codigo', nome = '$nome', obrig = '$obrig', ch = '$ch', credito = '$credito' WHERE iddisci = '$iddisci'";
	$resultado_func = mysqli_query($conn, $result_func);
	
	
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ppges/disc_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Dados Atulizados !\");
						</script>";
	 
	 }
	 else {
	 };
	 
	
?>