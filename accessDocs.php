<?php
	
	session_start();
	if ($_POST["password"]=="Owner207") {
		$_SESSION["UID"]=true;
		header('Location: documents.php');		
	} else {
		header('Location: documents.php?err=227');
	}
	
?>