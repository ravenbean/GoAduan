<?php
   session_start();
   unset($_SESSION["username"]);

   echo 'You have cleaned session';
   echo "<script>
		window.location.href='https://goaduan.com/admin/production/login.php';
		</script>";
?>