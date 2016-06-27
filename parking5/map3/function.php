<?php

function getStatus($id){
	$query = "SELECT * FROM tbl_lots WHERE lot_id = '$id'";
	$result = mysql_query($query);

	$row = mysql_fetch_assoc($result);
		
	$status = $row['lot_status'];
			
	return $status;
}