<?php
	session_start();

	session_destroy();
	mysqli_free_result();
	header("location: ../index.php");
	exit();

?>