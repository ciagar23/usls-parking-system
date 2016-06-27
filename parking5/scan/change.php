<?php
include ("../library/config.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';

	$status = getStatus($id);
	
	if($status == 1){
		$sql_update = "UPDATE tbl_lots SET lot_status = 0 WHERE lot_id = '$id'";
	}else{
		$sql_update = "UPDATE tbl_lots SET lot_status = 1 WHERE lot_id = '$id'";
	}
	
	mysql_query($sql_update) or die(mysql_error());
	
	header("Location: ../index.php?page=scan&load=scan");
	exit;