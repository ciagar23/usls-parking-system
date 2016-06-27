<?php
include '../library/config.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	case 'scan' :
		scan_id();
		break;
		default:
		header("Location: ../gate6scan.php");
}

function scan_id(){
$idno = $_POST['scan'];

$checkscan = mysql_query("SELECT * from tbl_scan WHERE client_id = '$idno' AND scan_stat ='1'");
$checkclient = mysql_query("SELECT * FROM tbl_client WHERE client_id = '$idno' AND client_stat = '1'");
$checkpref = mysql_fetch_assoc(mysql_query("SELECT * FROM tbl_client where client_id = '$idno'"));
$checkvio = mysql_query("SELECT * FROM tbl_violist WHERE client_id = '$idno' AND client_vio_id = '1'");
	

	if(empty ($idno)){
	
			header("Location: ../gate6scan.php?page=scan&load=scan&msg=Please Scan Your ID");
			exit;
	}
	elseif (mysql_num_rows($checkscan) == 1)
	{
			header("Location: ../gate6scan.php?page=scan&load=scan&msg=You have already scanned your ID");
			exit;
	}

elseif (mysql_num_rows($checkclient) == 0)
	{
			header("Location: ../gate6scan.php?page=scan&load=scan&msg=This ID number hasn't been registered!!");
			exit;
	}
	elseif (mysql_num_rows($checkvio) >= 1)
	{
			header("Location: ../gate6scan.php?page=scan&load=scan&msg=Im Sorry, You have pending violation/s!!");
			exit;
	}
{

//if ($pref == 6){
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='C01' AND lot_status='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='C02' AND lot_status='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='C03' AND lot_status='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='C04' AND lot_status='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='C05' AND lot_status='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='C06' AND lot_status='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='C07' AND lot_status='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='C08' AND lot_status='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='C09' AND lot_status='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='C10' AND lot_status='1'")) == 1)
	{
	header("Location: ../gate6scan.php?msg=Gate 6 is full");
	exit;
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'C10')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' WHERE lot_code='C10'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan6.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'C09')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' WHERE lot_code='C09'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan6.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'C08')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' WHERE lot_code='C08'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan6.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'C07')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' WHERE lot_code='C07'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan6.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'C06')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' WHERE lot_code='C06'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan6.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'C05')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' WHERE lot_code='C05'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan6.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'C04')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' WHERE lot_code='C04'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan6.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'C03')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' WHERE lot_code='C03'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan6.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'C02')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' WHERE lot_code='C02'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan6.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	
	

	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'C01')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' WHERE lot_code='C01'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan6.php?page=scan&load=option&cid=".$idno);
	exit;
	}
	/*	else if ($pref == 1)
	{
	header("Location: ../gate1scan.php?anotherlot=".$idno."&msg=This ID number has different preffered<br> parking lot. Scan again to continue");
	exit;
	}
		else
	{
	header("Location: ../gate2scan.php?anotherlot=".$idno."&msg=This ID number has different preffered<br> parking lot. Scan again to continue");
	exit;
	}
	}
*/
}
	