<?php 
	include_once('conect.php');
	
		$iddisci = $_GET['iddisci'];
			
			
				if ($iddisci) {
                    
                $delete = "DELETE FROM disci WHERE iddisci = '$iddisci'";
                $del = mysqli_query($conn, $delete);
                    
                    
				echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost//ppges/disc_edit.php'>
						<script type=\"text/javascript\">
							alert(\" Disciplina Excuido!\");
						</script>";
                }
				
?>