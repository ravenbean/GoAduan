<?php
    session_start();
	require '../config/config.php';

	$connect = connect();

	$Username = $_POST['username'];
	$Password = $_POST['password'];

	$query = "
	SELECT user_id, username, posisi, status FROM tbl_user WHERE username = '".$Username."' AND password = '".$Password."'";
	$result = mysqli_query($connect, $query);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		header('Location: ../aduan.php');
		$_SESSION["username"] = $Username;
	} else {
		echo "<script>alert('login gagal');
		window.location.href='https://goaduan.com/admin/production/login.php';
		</script>";
    //		header('Location: ../login.php');
	}
	//echo $query;

	// mysqli_query($connect,$query);

	// header('Location: ../pengaduan.php');
?>
