<?php 
	include_once('conect.php');
	
		$idevento = $_GET['idevento'];
			
			
				if ($idevento) {
                    
                $delete = "DELETE FROM evento WHERE idevento = '$idevento'";
                $del = mysqli_query($conn, $delete);
                    
                    
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost//ppges/event_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Evento Excuido!\");
						</script>";
                }
				
?>