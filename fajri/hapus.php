<?php
	$database = new mysqli('localhost','root','','pwpb');
	if($database->connect_errno){
		echo"Database Tidak Dapat Terhubung";
	}
	$sql = "DELETE FROM siswa WHERE nis =('$_GET[nis]')";
	$data=$database->query($sql);
	header("location: index.php"); 
?>