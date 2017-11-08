<?php

	require '../config/config.php';

	$connect = connect();

	$Name = $_POST['Nama'];
	$Date = $_POST['Tanggal'].':00';
	$Detail = $_POST['Detail'];
	$Category = $_POST['Kategori'];

	$query = "
	SELECT id_laporan, nama, tgl_aduan, detail_aduan, kategori, lokasi_gambar, DateInserted FROM public_report";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	//echo $query;

	mysqli_query($connect,$query);

	// header('Location: ../pengaduan.php');
?>
