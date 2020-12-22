<?php
	$server = 'sql206.byethost7.com';
	$username = 'b7_25257712';
	$password = 'chelsea1st';
	$database = 'b7_25257712_main';

	$connect = mysqli_connect($server, $username, $password, $database);

	if ($connect -> connect_errno) {
  		echo "Failed to connect to MySQL: " . $connect -> connect_error;
  		exit();
	}

	mysqli_query($connect,"SET NAMES 'UTF8'");
?>