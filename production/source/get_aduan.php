<?php

	require '../config/config.php';

	$connect = connect();

	$Name = $_POST['Nama'];
	$Date = $_POST['Tanggal'].':00';
	$Detail = $_POST['Detail'];
	$Category = $_POST['Kategori'];

	$query = "
	INSERT INTO public_report (id_laporan, nama, tgl_aduan, detail_aduan, kategori, lokasi_gambar, DateInserted)
	VALUES (null, '".$Name."', '".$Date."', '".$Detail."', '".$Category."', '', null)
	";

	//echo $query;

	mysqli_query($connect,$query);

	header('Location: ../pengaduan.php');
?>