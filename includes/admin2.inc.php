<<?php 

session_start();




	if (isset($_POST['SUBMIT'])) {
		include 'dbh.inc.php';
		$regno = mysqli_real_escape_string($conn, $_POST['regno']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		//error handlers
		//check if input is empty
		if (empty($regno) || empty($pwd)) {
			header("Location: ../admin2.php?admin=empty");
			 	exit();
		}else{
			$sql ="SELECT * FROM `admin` WHERE regno='$regno'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck < 1) {
			 	header("Location: ../admin2.php?admin=error");
			 	exit();
			 } else{
			 	if ($row = mysqli_fetch_assoc($result)) {
			 		//de-hashing the password
			 		$hashedPwdCheck =password_verify($pwd, $row['pwd']);
			 		if ($hashedPwdCheck == false) {
			 			header("Location: ../admin2.php?admin=error");
			 	exit();
			 		} elseif ($hashedPwdCheck == true) {
			 			//log in user here
			 			$_SESSION['id'] = $row['id'];
			 			$_SESSION['admname'] = $row['admname'];
			 			$_SESSION['regno'] = $row['regno'];
			 			$_SESSION['email'] = $row['email'];
						header("Location: ../addns/admin/index-a.php?adminsignin=success");
			 	exit();
			 		}
			 	}
			 }

		} 

	}else {
			header("Location: ../admin2.php?admin=error");
			 	exit();
		}
 ?>