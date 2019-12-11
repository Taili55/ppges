<?php 
	include_once('conect.php');
	
		$idProfessor = $_GET['idProfessor'];
			
			
				if ($idProfessor) {
                    
                $delete = "DELETE FROM professor WHERE idProfessor = '$idProfessor'";
                $del = mysqli_query($conn, $delete);
                    
                    
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost//ppges/prof_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Professor Excuido!\");
						</script>";
                }
				
?>