<?php
    session_start();
	$id=$_GET['doctor_id'];
	session_destroy();
	header("location: doctor_page.php?id=$id");
?>
