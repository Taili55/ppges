<?php
	
	include_once("conect.php");
	
	$idhome = $_POST['idhome'];
    $apresentacao = $_POST['apresentacao'];
    $sobre = $_POST['sobre'];
    $objetivo = $_POST['objetivo'];


	if(isset($apresentacao) && isset($sobre) && isset($objetivo)){
	
	$result_func = "UPDATE home SET apresentacao = '$apresentacao', sobre = '$sobre', objetivo = '$objetivo' WHERE idhome = '$idhome'";
	$resultado_func = mysqli_query($conn, $result_func);
	
	
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ppges/admin.php'>
						<script type=\"text/javascript\">
							alert(\" Dados Atulizados !\");
						</script>";
	 
	 }
	 else {
	 };
	 
	
?>