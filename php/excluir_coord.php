<?php 
	include_once('conect.php');
	
		$idcoord = $_GET['idcoord'];
			
			
				if ($idcoord) {
                    
                $delete = "DELETE FROM coord WHERE idcoord = '$idcoord'";
                $del = mysqli_query($conn, $delete);
                    
                    
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost//ppges/coord_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Coordenador Excuido!\");
						</script>";
                }
				
?>