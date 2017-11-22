<?php

	require '../config/config.php';

	$connect = connect();

	$IdLaporan = $_POST['idLaporan'];
	$Response = $_POST['respon'];
	$Status = $_POST['status'];


	$query = "
	UPDATE public_report SET status = '".$Status."' WHERE id_laporan = ".$IdLaporan;
	
	$result = mysqli_query($connect, $query);
	
	$query2 = "INSERT INTO respon_aduan (id, id_laporan, tanggal_respon, respon)
	VALUES (null, '".$IdLaporan."', null,'".$Response."')";
	
	$result = mysqli_query($connect, $query2);
	
	$sql = "SELECT email_pengadu FROM public_report where id_laporan = ".$IdLaporan;
    $result = mysqli_query($connect, $sql);

    if ($result->num_rows == 1) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $emailAddress =  $row["email_pengadu"];
        }
        
    	#kirim emailnya dibagian ini
    $from = "admin@goaduan.com";
    $to = $emailAddress;
    $subject = "Resonse dari aduan anda!";
    $message = $Response;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    
    }else{
        echo "something is wrong";
    }
	
?>
