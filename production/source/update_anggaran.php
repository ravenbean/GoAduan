<?php

	require '../config/config.php';

	$connect = connect();

	$id = $_POST['id'];
	$anggaranTerpakai = $_POST['anggaranTerpakai'];


	$query = "
	UPDATE program SET anggaran_terpakai = ".$anggaranTerpakai." WHERE id = ".$id;
	
	$result = mysqli_query($connect, $query);
	
	echo $result;
	
?>
