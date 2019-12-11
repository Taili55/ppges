<?php 
	include_once('conect.php');
	
		$idaluno = $_GET['idaluno'];
			
			
				if ($idaluno) {
                    
                $delete = "DELETE FROM aluno WHERE idaluno = '$idaluno'";
                $del = mysqli_query($conn, $delete);
                    
                    
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost//ppges/aluno_edit.php'>
						<script type=\"text/javascript\">
							alert(\"Aluno Excuido!\");
						</script>";
                }
				
?>