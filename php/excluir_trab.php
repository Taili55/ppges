<?php 
	include_once('conect.php');
	
		$idtrab = $_GET['idtrab'];
			
			
				if ($idtrab) {
                    
                $delete = "DELETE FROM trabalhos WHERE idtrab = '$idtrab'";
                $del = mysqli_query($conn, $delete);
                    
                    
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost//ppges/publi_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Trabalho Excuido!\");
						</script>";
                }
				
?>