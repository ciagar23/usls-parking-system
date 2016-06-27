<?php
include '../library/config.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	case 'scan' :
		scan_id();
		break;
		default:
		header("Location: ../gate6out.php");
}

function scan_id(){
$idno = $_POST['scan'];

$checkscan = mysql_query("SELECT * from tbl_scan WHERE client_id = '$idno' AND scan_stat ='1'");
$checkclient = mysql_query("SELECT * FROM tbl_client WHERE client_id = '$idno' AND client_stat = '1'");
$checkpref = mysql_fetch_assoc(mysql_query("SELECT * FROM tbl_client where client_id = '$idno'"));
$checkvio = mysql_query("SELECT * FROM tbl_violist WHERE client_id = '$idno' AND client_vio_id = '1'");
	

	if(empty ($idno)){
	
			header("Location: ../gate6out.php?page=scan&load=scan&msg=Please Scan Your ID");
			exit;
	}
	elseif (mysql_num_rows($checkscan) == 0)
	{
			header("Location: ../gate6out.php?page=scan&load=scan&msg=You Have not Scanned Your ID yet");
			exit;
	}

elseif (mysql_num_rows($checkclient) == 0)
	{
			header("Location: ../gate6out.php?page=scan&load=scan&msg=This ID number hasn't been registered!!");
			exit;
	}
	
	else
{

	
	$query3 ="UPDATE tbl_scan SET scan_stat='0' WHERE client_id = '$idno' AND scan_stat ='1'";
				
	$result3 = mysql_query($query3) or die(mysql_error());	
	
	header("Location: ../gate6out.php?page=scan&load=option&cid=".$idno);
	exit;
	}	
 /*
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
	//}

}
		