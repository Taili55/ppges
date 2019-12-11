<?php

session_start();
unset($_SESSION['idAdm'], $_SESSION['email']);

	$_SESSION['msg'] = "Deslogado com sucesso";
	header("Location: index.php");
   
?>	