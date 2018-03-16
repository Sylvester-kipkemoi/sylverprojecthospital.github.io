<?php 
	if (isset($_POST['SUBMIT'])) {
		session_start();
		session_unset();
		session_destroy();
		header("Location: ../SylvesterProjectHospital/index.php");
		exit();
	}
 ?>