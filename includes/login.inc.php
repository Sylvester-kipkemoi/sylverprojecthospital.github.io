<<?php 

session_start();




	if (isset($_POST['SUBMIT'])) {
		include 'dbh.inc.php';
		$RegNo = mysqli_real_escape_string($conn, $_POST['RegNo']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		//error handlers
		//check if input is empty
		if (empty($RegNo) || empty($pwd)) {
			header("Location: ../login.php?login=empty");
			 	exit();
		}else{
			$sql ="SELECT * FROM `registerpatient` WHERE RegNo='$RegNo'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck < 0) {
			 	header("Location: ../login.php?login=error");
			 	exit();
			 } else{
			 	if ($row = mysqli_fetch_assoc($result)) {
			 		//de-hashing the password
			 		$hashedPwdCheck =password_verify($pwd, $row['pwd']);
			 		if ($hashedPwdCheck == false) {
			 			header("Location: ../login.php?login=error");
			 	exit();
			 		} elseif ($hashedPwdCheck == true) {
			 			//log in user here
			 			$_SESSION['id'] = $row['id'];
			 			$_SESSION['Firstname'] = $row['Firstname'];
			 			$_SESSION['Middlename'] = $row['Middlename'];
			 			$_SESSION['Surname'] = $row['Surname'];
			 			$_SESSION['RegNo'] = $row['RegNo'];
						header("Location: ../addns/patients/index-p.php?patient-signin=success");
			 	exit();
			 		}
			 	}
			 }

		} 

	}else {
			header("Location: ../login.php?login=error");
			 	exit();
		}
 ?>