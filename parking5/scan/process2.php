<?php
include '../library/config.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	case 'scan' :
		scan_id();
		break;
		default:
		header("Location: ../gate2scan.php");
}

function scan_id(){
$idno = $_POST['scan'];

$checkscan = mysql_query("SELECT * from tbl_scan WHERE client_id = '$idno' AND scan_stat ='1'");
$checkclient = mysql_query("SELECT * FROM tbl_client WHERE client_id = '$idno' AND client_stat = '1'");
$checkpref = mysql_fetch_assoc(mysql_query("SELECT * FROM tbl_client where client_id = '$idno'"));
$checkvio = mysql_query("SELECT * FROM tbl_violist WHERE client_id = '$idno' AND client_vio_id = '1'");

	if(empty ($idno)){
	
			header("Location: ../gate2scan.php?page=scan&load=scan&msg=Please Scan Your ID");
			exit;
	}
	elseif (mysql_num_rows($checkscan) == 1)
	{
			header("Location: ../gate2scan.php?page=scan&load=scan&msg=You have already scanned your ID");
			exit;
	}

elseif (mysql_num_rows($checkclient) == 0)
	{
			header("Location: ../gate2scan.php?page=scan&load=scan&msg=This ID number hasn't been registered!!");
			exit;
	}
	elseif (mysql_num_rows($checkvio) >= 1)
	{
			header("Location: ../gate2scan.php?page=scan&load=scan&msg=Im Sorry, You have pending violation/s!!");
			exit;
	}
{

//if ($pref == 2){
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B01' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B02' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B03' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B04' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B05' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B06' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B07' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B08' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B09' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B10' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B11' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B12' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B13' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B14' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B15' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B16' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B17' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B18' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B19' AND scan_stat='1'")) == 1)
	{
	if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B20' AND scan_stat='1'")) == 1)
	{
	header("Location: ../gate2scan.php?msg=Gate 2 is full");
	exit;
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B20')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B19')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B18')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B17')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B16')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B15')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B14')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B13')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B12')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B11')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B10')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B09')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B08')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B07')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B06')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B05')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B04')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B03')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	{
	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B02')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
	}
	else
	
	

	$query = "INSERT INTO tbl_scan(client_id,scan_dt_added,scan_tm_added,scan_lot)
			VALUES('$idno',NOW(),NOW(),'B01')";
	
	$result = mysql_query($query) or die(mysql_error());	
	
	$query2 ="SELECT * FROM tbl_client WHERE 
				client_id ='$idno' AND client_stat = '1'";
				
	$result2 = mysql_query($query2) or die(mysql_error());	
	
	header("Location: ../printscan2.php?page=scan&load=option&cid=".$idno);
	exit;
	}
	/*	else if ($pref == 1)
	{
	header("Location: ../gate1scan.php?anotherlot=".$idno."&msg=This ID number has different preffered<br> parking lot. Scan again to continue");
	exit;
	}
		else
	{
	header("Location: ../gate6scan.php?anotherlot=".$idno."&msg=This ID number has different preffered<br> parking lot. Scan again to continue");
	exit;
	}
	} */
	
	

}
		