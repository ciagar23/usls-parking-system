<?php
require_once '../library/config.php';

$idno = $_GET["query"];

	if(empty($idno)){
		exit;
	}else{
		$query = "
				 
				SELECT c.client_id, c.id_num, c.client_lname, c.client_fname FROM tbl_client c WHERE 
				c.id_num LIKE'%$idno%' AND c.client_stat = '1'
		
		";
					
		$result = mysql_query($query) or die(mysql_error());
		
		
		header("Location: ../index.php?page=scan&load=option&cid=".$cid);
	}else{
		echo "Search returns no result.";
	}
exit;
?>