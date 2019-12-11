<?php 
	include_once('conect.php');
	
		$idpalestra = $_GET['idpalestra'];
			
			
				if ($idpalestra) {
                    
                $delete = "DELETE FROM palestra WHERE idpalestra = '$idpalestra'";
                $del = mysqli_query($conn, $delete);
                    
                    
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost//ppges/ciclo_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Professor Excuido!\");
						</script>";
                }
				
?>