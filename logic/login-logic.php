<?php
  session_start();
  if(isset($_POST['login--btn'])) {
    require './conn.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)) {
      header('Location: ../login.php?error=empty+fields');
      exit();
    } else {
      $sql = "SELECT * FROM users WHERE username=:username and password=:password";
			$insertSql = $conn->prepare($sql);
			$insertSql->bindParam(':username',$username);
			$insertSql->bindParam(':password',$password);
			$insertSql->execute(
				array(
					'username' => $_POST['username'],
					'password' => $_POST['password'],
				)
			);
			$count = $insertSql->rowCount();
			if ($count > 0) {
				$_SESSION['username'] = $_POST['username'];
				header("Location: ../index.php?login=success");
			}
			else {
				header("Location: login.php?error=nouser");
				exit();
			}
    }
  }
?>