<?php

	require '../config/config.php';

	$connect = connect();

	$username = $_POST['username'];
	$posisi = $_POST['posisi'];
	$password = $_POST['password'];

	$query = "
	INSERT INTO tbl_user (user_id, username, password, status, posisi)
	VALUES (null, '".$username."', '".$password."', 1, '".$posisi."')
	";

	//echo $query;

	$result = mysqli_query($connect,$query);

	header('Location: ../register.php');
?>