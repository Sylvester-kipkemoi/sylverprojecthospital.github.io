<?php 
	if (isset($_POST['SUBMIT'])) {
		

		include_once 'dbh.inc.php';

		$Firstname = mysqli_real_escape_string($conn, $_POST['Firstname']);
		$Middlename = mysqli_real_escape_string($conn, $_POST['Middlename']);
		$Surname = mysqli_real_escape_string($conn, $_POST['Surname']);
		$RegNo = mysqli_real_escape_string($conn, $_POST['RegNo']);
		$Contact = mysqli_real_escape_string($conn, $_POST['Contact']);
		$Email = mysqli_real_escape_string($conn, $_POST['Email']);
		$Kin = mysqli_real_escape_string($conn, $_POST['Kin']);
		$kincon = mysqli_real_escape_string($conn, $_POST['kincon']);
		$kinemail = mysqli_real_escape_string($conn, $_POST['kinemail']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//error handlers
		//check for empty fields
		if (empty($Firstname) || empty($Middlename) || empty($Surname) || empty($RegNo) ||empty($Contact) ||empty($Email) ||empty($pwd)) {
			header("Location: ../signup.php?signup=empty");
		 	exit();
			
		} else{
			//check if input characters are valid

			if (!preg_match("/^[a-zA-Z]*$/", $Firstname) || !preg_match("/^[a-zA-Z]*$/", $Middlename) || !preg_match("/^[a-zA-Z]*$/", $Surname) || !preg_match("/^[a-zA-Z1-9]*$/", $RegNo)) {
				header("Location: ../signup.php?signup=invalid");
				exit();
			} else{
				//Check if email is valid
				if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../signup.php?signup=email");
					exit();
				} else{
					$sql =" SELECT * FROM `registerpatient` WHERE RegNo='$RegNo'";
					$result =  mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../signup.php?signup=usertaken");
						exit();
					} else{
						//hashing the password
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO `registerpatient`(`id`, `Firstname`, `Middlename`, `Surname`, `RegNo`, `Contact`, `Email`, `Kin`, `kincon`, `kinemail`, `pwd`) VALUES (null, '$Firstname', '$Middlename', '$Surname', '$RegNo', '$Contact', '$Email', '$Kin', '$kincon', '$kinemail', '$hashedPwd');";
						mysqli_query($conn, $sql);
						header("Location: ../addns/patients/index-p.php?patient-signup=success");
						exit();


					}

				}
			}



		}


	} else{
		header("Location: ../signup.php");
		exit();
	}
 ?>