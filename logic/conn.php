<?php
  $username = "root";
	$servername = "localhost";
	$password = "";
	$dbname = 'eduardrama';

  try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	}
	catch (PDOException $e) {
		echo "error: " . $e->getMessage();
	}
?>