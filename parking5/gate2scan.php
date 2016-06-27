<?php

include ("library/config.php");

$datenow=date('Y-m-d');
$disabled= mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_stat='1' and client_id='admin'"));
$parked= mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_stat='1' and scan_dt_added='$datenow'"));
$totalparkedtoday= mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where  scan_dt_added='$datenow'"));

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B01' AND scan_stat='1'")) == 1)
{
$B01 = 'parklot1.png';
}
else
{
$B01 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B02' AND scan_stat='1'")) == 1)
{
$B02 = 'parklot1.png';
}
else
{
$B02 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B03' AND scan_stat='1'")) == 1)
{
$B03 = 'parklot1.png';
}
else
{
$B03 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B04' AND scan_stat='1'")) == 1)
{
$B04 = 'parklot1.png';
}
else
{
$B04 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B05' AND scan_stat='1'")) == 1)
{
$B05 = 'parklot1.png';
}
else
{
$B05 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B06' AND scan_stat='1'")) == 1)
{
$B06 = 'parklot1.png';
}
else
{
$B06 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B07' AND scan_stat='1'")) == 1)
{
$B07 = 'parklot1.png';
}
else
{
$B07 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B08' AND scan_stat='1'")) == 1)
{
$B08 = 'parklot1.png';
}
else
{
$B08 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B09' AND scan_stat='1'")) == 1)
{
$B09 = 'parklot1.png';
}
else
{
$B09 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B10' AND scan_stat='1'")) == 1)
{
$B10 = 'parklot1.png';
}
else
{
$B10 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B11' AND scan_stat='1'")) == 1)
{
$B11 = 'parklot1.png';
}
else
{
$B11 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B12' AND scan_stat='1'")) == 1)
{
$B12 = 'parklot1.png';
}
else
{
$B12 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B13' AND scan_stat='1'")) == 1)
{
$B13 = 'parklot1.png';
}
else
{
$B13 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B14' AND scan_stat='1'")) == 1)
{
$B14 = 'parklot1.png';
}
else
{
$B14 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B15' AND scan_stat='1'")) == 1)
{
$B15 = 'parklot1.png';
}
else
{
$B15 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B16' AND scan_stat='1'")) == 1)
{
$B16 = 'parklot1.png';
}
else
{
$B16 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B17' AND scan_stat='1'")) == 1)
{
$B17 = 'parklot1.png';
}
else
{
$B17 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B18' AND scan_stat='1'")) == 1)
{
$B18 = 'parklot1.png';
}
else
{
$B18 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B19' AND scan_stat='1'")) == 1)
{
$B19 = 'parklot1.png';
}
else
{
$B19 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B20' AND scan_stat='1'")) == 1)
{
$B20 = 'parklot1.png';
}
else
{
$B20 = 'availlot1.png';
}


if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B21' AND scan_stat='1'")) == 1)
{
$B21 = 'parklot1.png';
}
else
{
$B21 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B22' AND scan_stat='1'")) == 1)
{
$B22 = 'parklot1.png';
}
else
{
$B22 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B23' AND scan_stat='1'")) == 1)
{
$B23 = 'parklotright.png';
}
else
{
$B23 = 'availlotright.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B24' AND scan_stat='1'")) == 1)
{
$B24 = 'parklotright.png';
}
else
{
$B24 = 'availlotright.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B25' AND scan_stat='1'")) == 1)
{
$B25 = 'parklot2.png';
}
else
{
$B25 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B26' AND scan_stat='1'")) == 1)
{
$B26 = 'parklot2.png';
}
else
{
$B26 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B27' AND scan_stat='1'")) == 1)
{
$B27 = 'parklot2.png';
}
else
{
$B27 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B28' AND scan_stat='1'")) == 1)
{
$B28 = 'parklot2.png';
}
else
{
$B28 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B29' AND scan_stat='1'")) == 1)
{
$B29 = 'parklot2.png';
}
else
{
$B29 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B30' AND scan_stat='1'")) == 1)
{
$B30 = 'parklot2.png';
}
else
{
$B30 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B31' AND scan_stat='1'")) == 1)
{
$B31 = 'parklot2.png';
}
else
{
$B31 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B32' AND scan_stat='1'")) == 1)
{
$B32 = 'parklot2.png';
}
else
{
$B32 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B33' AND scan_stat='1'")) == 1)
{
$B33 = 'parklot2.png';
}
else
{
$B33 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B34' AND scan_stat='1'")) == 1)
{
$B34 = 'parklot2.png';
}
else
{
$B34 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B35' AND scan_stat='1'")) == 1)
{
$B35 = 'parklot2.png';
}
else
{
$B35 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B36' AND scan_stat='1'")) == 1)
{
$B36 = 'parklot1.png';
}
else
{
$B36 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B37' AND scan_stat='1'")) == 1)
{
$B37 = 'parklot1.png';
}
else
{
$B37 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B38' AND scan_stat='1'")) == 1)
{
$B38 = 'parklot1.png';
}
else
{
$B38 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B39' AND scan_stat='1'")) == 1)
{
$B39 = 'parklot1.png';
}
else
{
$B39 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B40' AND scan_stat='1'")) == 1)
{
$B40 = 'parklot1.png';
}
else
{
$B40 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B41' AND scan_stat='1'")) == 1)
{
$B41 = 'parklot1.png';
}
else
{
$B41 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B42' AND scan_stat='1'")) == 1)
{
$B42 = 'parklot1.png';
}
else
{
$B42 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B43' AND scan_stat='1'")) == 1)
{
$B43 = 'parklot1.png';
}
else
{
$B43 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B44' AND scan_stat='1'")) == 1)
{
$B44 = 'parklot1.png';
}
else
{
$B44 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B45' AND scan_stat='1'")) == 1)
{
$B45 = 'parklot1.png';
}
else
{
$B45 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B46' AND scan_stat='1'")) == 1)
{
$B46 = 'parklot1.png';
}
else
{
$B46 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B47' AND scan_stat='1'")) == 1)
{
$B47 = 'parklot1.png';
}
else
{
$B47 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B48' AND scan_stat='1'")) == 1)
{
$B48 = 'parklot1.png';
}
else
{
$B48 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B49' AND scan_stat='1'")) == 1)
{
$B49 = 'parklot1.png';
}
else
{
$B49 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B50' AND scan_stat='1'")) == 1)
{
$B50 = 'parklot1.png';
}
else
{
$B50 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B51' AND scan_stat='1'")) == 1)
{
$B51 = 'parklot1.png';
}
else
{
$B51 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B52' AND scan_stat='1'")) == 1)
{
$B52 = 'parklot1.png';
}
else
{
$B52 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B53' AND scan_stat='1'")) == 1)
{
$B53 = 'parklot1.png';
}
else
{
$B53 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B54' AND scan_stat='1'")) == 1)
{
$B54 = 'parklot1.png';
}
else
{
$B54 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B55' AND scan_stat='1'")) == 1)
{
$B55 = 'parklot1.png';
}
else
{
$B55 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B56' AND scan_stat='1'")) == 1)
{
$B56 = 'parklot1.png';
}
else
{
$B56 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B57' AND scan_stat='1'")) == 1)
{
$B57 = 'parklot1.png';
}
else
{
$B57 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B58' AND scan_stat='1'")) == 1)
{
$B58 = 'parklot1.png';
}
else
{
$B58 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B59' AND scan_stat='1'")) == 1)
{
$B59 = 'parklot1.png';
}
else
{
$B59 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B60' AND scan_stat='1'")) == 1)
{
$B60 = 'parklot1.png';
}
else
{
$B60 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B61' AND scan_stat='1'")) == 1)
{
$B61 = 'parklot1.png';
}
else
{
$B61 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B62' AND scan_stat='1'")) == 1)
{
$B62 = 'parklot1.png';
}
else
{
$B62 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='B63' AND scan_stat='1'")) == 1)
{
$B63 = 'parklot1.png';
}
else
{
$B63 = 'availlot1.png';
}





//==========================================================
	$msg   = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '';
	$page   = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
	$load   = (isset($_GET['load']) && $_GET['load'] != '') ? $_GET['load'] : '';
	$uid	= (isset($_GET['uid']) && $_GET['uid'] != '') ? $_GET['uid'] : '';
	$cid	= (isset($_GET['cid']) && $_GET['cid'] != '') ? $_GET['cid'] : '0';
	$sid	= (isset($_GET['sid']) && $_GET['sid'] != '') ? $_GET['sid'] : '0';
	$id 	= (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
	$anotherlot = isset($_GET['anotherlot']) ? $_GET['anotherlot'] : '';
//http://www.google.com/ig/api?weather=Bacolod+City
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Gate 2 ID Scanner</title>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<meta name="description" content=""/>
<meta name="author" content=""/>
<meta name="keywords" content=""/>
 <link rel="stylesheet" type="text/css" href="gate1/map.css" title="style" />
 <link rel="stylesheet" type="text/css" href="css/style2.css" title="style" />
 
 
  
  
 
  <script language="javascript" type="text/javascript" src="js/script.js"></script>
</head>
<body onLoad="document.form1.scan.focus();">

<div id="scan">

				<tr>
					<td>
					<a href="start.php"><input type="submit" name="main" style="height:30px; width:90px; font-weight:bold;" value="Main Page"/></a>
					</td>
				</tr>
<tr>
	<td>
	<!-- Markup starts here-->
		<table>
		<tr>
			<td colspan="2"><b>
					Scan ID
			</b></td>
		</tr>
				<form name="form1" method="POST" action="scan/process2.php?action=scan" >
				<table id="tbl_newform">
				<tr>
					<td>
					Id Number:
					</td>
					<td>
						<input type="text" id="idscan" name="scan" size="30" onKeyUp="checkNumber(this.id);"/>
					</td>
				</tr>
                <tr>
                <td align="center" colspan="2"><font color=red size="4px"> <?php echo $msg;?></font>
                </tr>
				</table>
				</form>
			</td>
		</tr>
		<a href="gate1scan.php"><input type="submit" name="main" style="height:50px; width:90px; font-weight:bold;" value="GATE 1"/></a>
		<a href="gate6scan.php"><input type="submit" name="main" style="height:50px; width:90px; font-weight:bold;" value="GATE 6"/></a>
		<a href="gate2out.php"><input type="submit" name="main" style="height:50px; width:90px; font-weight:bold;" value="EXIT"/></a>
		</table>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
<div>
<?php
	if($load=="option"){
		require_once("scan/option.php");
	}
?>
</div>
</div>
 <?php
  require_once("scan/gate2.php");?>
</body>
</html>

<?php
	unset($_SESSION['message']['type']);
	unset($_SESSION['message']['content']);
?>