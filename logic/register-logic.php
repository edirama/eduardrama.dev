<?php 
	session_start();
	require "./conn.php";
	if (isset($_POST['register--btn'])) {
		$name = $_POST['fName'];
		$surname = $_POST['lName'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (empty($name) || empty($surname) || empty($username) || empty($email) || empty($password)) {
			header("Location: ../register.php?error=emptyfields");
			exit();
		}
		else {
			$sql = "INSERT INTO users(fName, lName, username, email, password) VALUES (:fName,:lName,:username,:email, :password)";
			$sqlQuery = $conn->prepare($sql);
			$sqlQuery->bindParam(':fName',$name);
			$sqlQuery->bindParam(':lName',$surname);
			$sqlQuery->bindParam(':username',$username);
			$sqlQuery->bindParam(':email',$email);
			$sqlQuery->bindParam(':password',$password);
			$sqlQuery->execute();
			header("Location: ../login.php?success=registered+login+now");
		}
	}
?>