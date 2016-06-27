<?php
include '../library/config.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	case 'scan' :
		scan_id();
		break;
		default:
		header("Location: ../gate1scan.php");
}

function scan_id(){
$idno = $_POST['scan'];

$checkscan = mysql_query("SELECT * from tbl_scan WHERE client_id = '$idno' AND scan_stat ='1'");
$checkclient = mysql_query("SELECT * FROM tbl_client WHERE client_id = '$idno' AND client_stat = '1'");
$checkpref = mysql_fetch_assoc(mysql_query("SELECT * FROM tbl_client where client_id = '$idno'"));
$checkvio = mysql_query("SELECT * FROM tbl_violist WHERE client_id = '$idno' AND client_vio_id = '1'");
	

	if(empty ($idno)){
	
			header("Location: ../gate1scan.php?page=scan&load=scan&msg=Please Scan Your ID");
			exit;
	}
	elseif (mysql_num_rows($checkscan) == 1)
	{
			header("Location: ../gate1scan.php?page=scan&load=scan&msg=You have already scanned your ID");
			exit;
	}

elseif (mysql_num_rows($checkclient) == 0)
	{
			header("Location: ../gate1scan.php?page=scan&load=scan&msg=This ID number hasn't been registered!!");
			exit;
	}
	elseif (mysql_num_rows($checkvio) >= 1)
	{
			header("Location: ../gate1scan.php?page=scan&load=scan&msg=Im Sorry, You have pending violation/s!!");
			exit;
	}
{

//if ($pref == 1){
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A01' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A02' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A03' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A04' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A05' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A06' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A07' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A08' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A09' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A10' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A11' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A12' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A13' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A14' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A15' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A16' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A17' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A18' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A19' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A20' AND scan_stat='1'")) == 1)
	{
	header("Location: ../gate1scan.php?msg=Gate 1 is full");
	exit;
	}
	
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A20')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A19')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A18')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A17')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A16')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A15')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A14')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A13')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A12')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A11')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A10')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A09')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A08')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	

	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A07')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A06')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A05')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	$query3 ="UPDATE tbl_lots SET lot_status='1' where scan_lot='A05'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A04')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A03')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A02')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	
	

	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'A01')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	
	header("Location: ../printscan.php?page=scan&load=option&cid=".$idno);
	exit;
	} /*
		else if ($pref == 2)
	{
	header("Location: ../gate2scan.php?anotherlot=".$idno."&msg=This ID number has different preffered<br> parking lot. Scan again to continue");
	exit;
	}
		else
	{
	header("Location: ../gate6scan.php?anotherlot=".$idno."&msg=This ID number has different preffered<br> parking lot. Scan again to continue");
	exit;
	}
	*/
	//
	}


