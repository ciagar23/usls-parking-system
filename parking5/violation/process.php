<?php
include '../library/config.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	case 'addvio' :
		add_vio();
		break;
	case 'modify' :
		modify_vio();
		break;	
	case 'delvio' :
		delete_vio();
		break;	
	case 'clearvio' :
		clear_vio();
		break;			
	default :
	    // if action is not defined or unknown
		// move to main  page
		header("Location: ../index.php");
}

function add_vio(){
$client_id = $_GET['client_id'];
$violation_desc = $_POST['type'];


	$query = "INSERT INTO tbl_violist(client_id,violation_desc,violist_dt_added,violist_tm_added)
			VALUES('$client_id','$violation_desc',NOW(),NOW())";
	$result = mysql_query($query) or die(mysql_error());
	
	$text = $violation_desc;
	logEntry('9005', $text);
	
	$_SESSION['message']['type'] = "success";
	$_SESSION['message']['content'] = "Violation has been added";
	header("Location: ../index.php?page=violation&load=viewvio");
	exit;
}

function delete_vio(){
	$violist_id=$_GET['violist_id'];
	
	$query = "DELETE FROM tbl_violist WHERE violist_id = '$violist_id'";
	$result=mysql_query($query) or die (mysql_error());
	
	$_SESSION['message']['type'] = "success";
	$_SESSION['message']['type'] = "Violation has been removed";
	header("Location: ../index.php?page=violation&load=viewvio");
	exit;
}

function clear_vio(){
	$violist_id=$_GET['violist_id'];
	
	$query = "UPDATE tbl_violist SET client_vio_id='0', violist_date_cleared=now() WHERE violist_id = '$violist_id'";
	$result=mysql_query($query) or die (mysql_error());
	
	$_SESSION['message']['type'] = "success";
	$_SESSION['message']['type'] = "Violation has been Cleared";
	header("Location: ../clear.php?msg=Violation has been Cleared");
	exit;
}
