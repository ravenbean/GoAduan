<?php

	require '../config/config.php';

	$connect = connect();

	$IdLaporan = $_POST['idLaporan'];


	$query = "
	UPDATE public_report SET status = 'Sedang diproses' WHERE id_laporan = ".$IdLaporan;

	$result = mysqli_query($connect, $query);
	echo $result;
?>
