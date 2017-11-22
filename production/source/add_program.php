<?php

	require '../config/config.php';

	$connect = connect();

	$namaProgram = $_POST['namaProgram'];
	$deskripsi = $_POST['deskripsi'];
	$totalAnggaran = $_POST['totalAnggaran'];

	$query = "
	INSERT INTO program (nama_program, deskripsi, anggaran_total, anggaran_terpakai)
	VALUES ('".$namaProgram."', '".$deskripsi."', ".$totalAnggaran.", 0)
	";

	//echo $query;

	$result = mysqli_query($connect,$query);
    echo $result;
	// header('Location: ../programs.php');
?>