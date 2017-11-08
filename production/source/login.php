<?php

	require '../config/config.php';

	$connect = connect();

	$Username = $_POST['username'];
	$Password = $_POST['password'];

	$query = "
	SELECT user_id, username, posisi, status FROM tbl_user";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		header('Location: ../index.php');
	} else {
		echo "<script>alert('login gagal');</script>";
	}
	//echo $query;

	// mysqli_query($connect,$query);

	// header('Location: ../pengaduan.php');
?>
