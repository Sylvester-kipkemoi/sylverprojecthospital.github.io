<?php 
	if (isset($_POST['SUBMIT'])) {
		

		include_once 'dbh.inc.php';

		$admname = mysqli_real_escape_string($conn, $_POST['admname']);
		$regno = mysqli_real_escape_string($conn, $_POST['regno']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//error handlers
		//check for empty fields
		if (empty($admname) || empty($regno) || empty($email) || empty($pwd)) {
			header("Location: ../admin.php?admin=empty");
		 	exit();
			
		} else{
			//check if input characters are valiid

			if (!preg_match("/^[a-zA-Z]*$/", $admname) || !preg_match("/^[a-zA-Z1-9]*$/", $regno)) {
				header("Location: ../admin.php?admin=invalid");
				exit();
			} else{
				//Check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../admin.php?admin=email");
					exit();
				} else{
					$sql ="SELECT * FROM `admin` WHERE regno='$regno'";
					$result =  mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						header("Location: ../admin.php?admin=Adminnametaken");
						exit();
					} else{
						//hashing the password
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO `admin`(`id`, `admname`, `regno`, `email`, `contact`, `pwd`) VALUES (null, '$admname', '$regno', '$email', '$contact', '$hashedPwd') ";
						mysqli_query($conn, $sql);
						header("Location: ../addns/admin/index-a.php?adminsignup=success");
						exit();


					}

				}
			}



		}


	} else{
		header("Location: ../admin.php");
		exit();
	}
 ?>