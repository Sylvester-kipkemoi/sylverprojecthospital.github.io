<?php 
	if (isset($_POST['SUBMIT'])) {
		

		include_once 'dbh.inc.php';

		$docname = mysqli_real_escape_string($conn, $_POST['docname']);
		$regno = mysqli_real_escape_string($conn, $_POST['regno']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//error handlers
		//check for empty fields
		if (empty($docname) || empty($regno) || empty($email) || empty($pwd)) {
			header("Location: ../signup2.php?signup=empty");
		 	exit();
			
		} else{
			//check if input characters are valiid

			if (!preg_match("/^[a-zA-Z]*$/", $docname) || !preg_match("/^[a-zA-Z1-9]*$/", $regno)) {
				header("Location: ../signup2.php?signup=invalid");
				exit();
			} else{
				//Check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../signup2.php?signup=email");
					exit();
				} else{
					$sql ="SELECT * FROM `registerdoctor` WHERE regno='$regno'";
					$result =  mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../signup2.php?signup=usertaken");
						exit();
					} else{
						//hashing the password
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO `registerdoctor`(`id`, `docname`, `regno`, `email`, `contact`, `pwd`) VALUES (null, '$docname', '$regno', '$email', '$contact', '$hashedPwd') ";
						mysqli_query($conn, $sql);
						header("Location: ../addns/docs/index-d.php?doctorsignup=success");
						exit();


					}

				}
			}



		}


	} else{
		header("Location: ../signup2.php");
		exit();
	}
 ?>