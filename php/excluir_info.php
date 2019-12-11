<?php 
	include_once('conect.php');
	
		$idinformes = $_GET['idinformes'];
			
			
				if ($idinformes) {
                    
                $delete = "DELETE FROM informes WHERE idinformes = '$idinformes'";
                $del = mysqli_query($conn, $delete);
                    
                    
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost//ppges/info_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Informe Excuido!\");
						</script>";
                }
				
?>