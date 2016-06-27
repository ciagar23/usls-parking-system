<?php

include ("library/config.php");

$datenow=date('Y-m-d');
$disabled= mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_stat='1' and client_id='admin'"));
$parked= mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_stat='1' and scan_dt_added='$datenow'"));
$totalparkedtoday= mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where  scan_dt_added='$datenow'"));
if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A01' AND scan_stat='1'")) >= 1)
{
$A01 = 'parklot2.png';
}
else
{
$A01 = 'availlot2.png';
}


if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A02' AND scan_stat='1'")) >= 1)
{
$A02 = 'parklot2.png';
}
else
{
$A02 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A03' AND scan_stat='1'")) >= 1)
{
$A03 = 'parklot2.png';
}
else
{
$A03 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A04' AND scan_stat='1'")) >= 1)
{
$A04 = 'parklot2.png';
}
else
{
$A04 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A05' AND scan_stat='1'")) >= 1)
{
$A05 = 'parklot2.png';
}
else
{
$A05 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A06' AND scan_stat='1'")) >= 1)
{
$A06 = 'parklot2.png';
}
else
{
$A06 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A07' AND scan_stat='1'")) >= 1)
{
$A07 = 'parklot2.png';
}
else
{
$A07 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A08' AND scan_stat='1'")) >= 1)
{
$A08 = 'parklot2.png';
}
else
{
$A08 = 'availlot2.png';
}


if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A09' AND scan_stat='1'")) >= 1)
{
$A09 = 'parklot2.png';
}
else
{
$A09 = 'availlot2.png';
}


if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A10' AND scan_stat='1'")) >= 1)
{
$A10 = 'parklot2.png';
}
else
{
$A10 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A11' AND scan_stat='1'")) >= 1)
{
$A11 = 'parklot2.png';
}
else
{
$A11 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A12' AND scan_stat='1'")) >= 1)
{
$A12 = 'parklot2.png';
}
else
{
$A12 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A13' AND scan_stat='1'")) >= 1)
{
$A13 = 'parklot2.png';
}
else
{
$A13 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_lot='A14' AND scan_stat='1'")) >= 1)
{
$A14 = 'parklot2.png';
}
else
{
$A14 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A15' AND lot_status='1'")) == 1)
{
$A15 = 'parklot2.png';
}
else
{
$A15 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A16' AND lot_status='1'")) == 1)
{
$A16 = 'parklot2.png';
}
else
{
$A16 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A17' AND lot_status='1'")) == 1)
{
$A17 = 'parklot2.png';
}
else
{
$A17 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A18' AND lot_status='1'")) == 1)
{
$A18 = 'parklot2.png';
}
else
{
$A18 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A19' AND lot_status='1'")) == 1)
{
$A19 = 'parklot2.png';
}
else
{
$A19 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A20' AND lot_status='1'")) == 1)
{
$A20 = 'parklot2.png';
}
else
{
$A20 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A21' AND lot_status='1'")) == 1)
{
$A21 = 'parklot2.png';
}
else
{
$A21 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A22' AND lot_status='1'")) == 1)
{
$A22 = 'parklot2.png';
}
else
{
$A22 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A23' AND lot_status='1'")) == 1)
{
$A23 = 'parklot2.png';
}
else
{
$A23 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A24' AND lot_status='1'")) == 1)
{
$A24 = 'parklot2.png';
}
else
{
$A24 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A25' AND lot_status='1'")) == 1)
{
$A25 = 'parklot2.png';
}
else
{
$A25 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A26' AND lot_status='1'")) == 1)
{
$A26 = 'parklot2.png';
}
else
{
$A26 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A27' AND lot_status='1'")) == 1)
{
$A27 = 'parklot2.png';
}
else
{
$A27 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A28' AND lot_status='1'")) == 1)
{
$A28 = 'parklot2.png';
}
else
{
$A28 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A29' AND lot_status='1'")) == 1)
{
$A29 = 'parklot2.png';
}
else
{
$A29 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A30' AND lot_status='1'")) == 1)
{
$A30 = 'parklot2.png';
}
else
{
$A30 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A31' AND lot_status='1'")) == 1)
{
$A31 = 'parklot2.png';
}
else
{
$A31 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A32' AND lot_status='1'")) == 1)
{
$A32 = 'parklot2.png';
}
else
{
$A32 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A33' AND lot_status='1'")) == 1)
{
$A33 = 'parklot2.png';
}
else
{
$A33 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A34' AND lot_status='1'")) == 1)
{
$A34 = 'parklot2.png';
}
else
{
$A34 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A35' AND lot_status='1'")) == 1)
{
$A35 = 'parklot2.png';
}
else
{
$A35 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A36' AND lot_status='1'")) == 1)
{
$A36 = 'parklot2.png';
}
else
{
$A36 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A37' AND lot_status='1'")) == 1)
{
$A37 = 'parklot2.png';
}
else
{
$A37 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A38' AND lot_status='1'")) == 1)
{
$A38 = 'parklot2.png';
}
else
{
$A38 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A39' AND lot_status='1'")) == 1)
{
$A39 = 'parklot2.png';
}
else
{
$A39 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A40' AND lot_status='1'")) == 1)
{
$A40 = 'parklot2.png';
}
else
{
$A40 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A41' AND lot_status='1'")) == 1)
{
$A41 = 'parklot2.png';
}
else
{
$A41 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A42' AND lot_status='1'")) == 1)
{
$A42 = 'parklot2.png';
}
else
{
$A42 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A43' AND lot_status='1'")) == 1)
{
$A43 = 'parklot2.png';
}
else
{
$A43 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A44' AND lot_status='1'")) == 1)
{
$A44 = 'parklot2.png';
}
else
{
$A44 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A45' AND lot_status='1'")) == 1)
{
$A45 = 'parklot2.png';
}
else
{
$A45 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A46' AND lot_status='1'")) == 1)
{
$A46 = 'parklot2.png';
}
else
{
$A46 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A47' AND lot_status='1'")) == 1)
{
$A47 = 'parklot2.png';
}
else
{
$A47 = 'availlot2.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A48' AND lot_status='1'")) == 1)
{
$A48 = 'parklot1.png';
}
else
{
$A48 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A49' AND lot_status='1'")) == 1)
{
$A49 = 'parklot1.png';
}
else
{
$A49 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A50' AND lot_status='1'")) == 1)
{
$A50 = 'parklot1.png';
}
else
{
$A50 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A51' AND lot_status='1'")) == 1)
{
$A51 = 'parklot1.png';
}
else
{
$A51 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A52' AND lot_status='1'")) == 1)
{
$A52 = 'parklot1.png';
}
else
{
$A52 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A53' AND lot_status='1'")) == 1)
{
$A53 = 'parklot1.png';
}
else
{
$A53 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A54' AND lot_status='1'")) == 1)
{
$A54 = 'parklot1.png';
}
else
{
$A54 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A55' AND lot_status='1'")) == 1)
{
$A55 = 'parklot1.png';
}
else
{
$A55 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A56' AND lot_status='1'")) == 1)
{
$A56 = 'parklot1.png';
}
else
{
$A56 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A57' AND lot_status='1'")) == 1)
{
$A57 = 'parklot1.png';
}
else
{
$A57 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A58' AND lot_status='1'")) == 1)
{
$A58 = 'parklot1.png';
}
else
{
$A58 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A59' AND lot_status='1'")) == 1)
{
$A59 = 'parklot1.png';
}
else
{
$A59 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A60' AND lot_status='1'")) == 1)
{
$A60 = 'parklot1.png';
}
else
{
$A60 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A61' AND lot_status='1'")) == 1)
{
$A61 = 'parklot1.png';
}
else
{
$A61 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A62' AND lot_status='1'")) == 1)
{
$A62 = 'parklot1.png';
}
else
{
$A62 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A63' AND lot_status='1'")) == 1)
{
$A63 = 'parklot1.png';
}
else
{
$A63 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A64' AND lot_status='1'")) == 1)
{
$A64 = 'parklot1.png';
}
else
{
$A64 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A65' AND lot_status='1'")) == 1)
{
$A65 = 'parklot1.png';
}
else
{
$A65 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A66' AND lot_status='1'")) == 1)
{
$A66 = 'parklot1.png';
}
else
{
$A66 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A67' AND lot_status='1'")) == 1)
{
$A67 = 'parklot1.png';
}
else
{
$A67 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A68' AND lot_status='1'")) == 1)
{
$A68 = 'parklot1.png';
}
else
{
$A68 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A69' AND lot_status='1'")) == 1)
{
$A69 = 'parklot1.png';
}
else
{
$A69 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A70' AND lot_status='1'")) == 1)
{
$A70 = 'parklot1.png';
}
else
{
$A70 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A71' AND lot_status='1'")) == 1)
{
$A71 = 'parklot1.png';
}
else
{
$A71 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A72' AND lot_status='1'")) == 1)
{
$A72 = 'parklot1.png';
}
else
{
$A72 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A73' AND lot_status='1'")) == 1)
{
$A73 = 'parklot1.png';
}
else
{
$A73 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A74' AND lot_status='1'")) == 1)
{
$A74 = 'parklot1.png';
}
else
{
$A74 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A75' AND lot_status='1'")) == 1)
{
$A75 = 'parklotleft.png';
}
else
{
$A75 = 'availlotleft.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A76' AND lot_status='1'")) == 1)
{
$A76 = 'parklotleft.png';
}
else
{
$A76 = 'availlotleft.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A77' AND lot_status='1'")) == 1)
{
$A77 = 'parklotleft.png';
}
else
{
$A77 = 'availlotleft.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A78' AND lot_status='1'")) == 1)
{
$A78 = 'parklotleft.png';
}
else
{
$A78 = 'availlotleft.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A79' AND lot_status='1'")) == 1)
{
$A79 = 'parklotleft.png';
}
else
{
$A79 = 'availlotleft.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A80' AND lot_status='1'")) == 1)
{
$A80 = 'parklotleft.png';
}
else
{
$A80 = 'availlotleft.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A81' AND lot_status='1'")) == 1)
{
$A81 = 'parklotleft.png';
}
else
{
$A81 = 'availlotleft.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A82' AND lot_status='1'")) == 1)
{
$A82 = 'parklotleft.png';
}
else
{
$A82 = 'availlotleft.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A83' AND lot_status='1'")) == 1)
{
$A83 = 'parklotleft.png';
}
else
{
$A83 = 'availlotleft.png';
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
<title>Gate 1</title>
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
				<form name="form1" method="POST" action="scan/process.php?action=scan" >
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
		<tr>
		<td>
		<a href="gate2scan.php"><input type="submit" name="main" style="height:50px; width:90px; font-weight:bold;" value="GATE 2"/></a>
		<a href="gate6scan.php"><input type="submit" name="main" style="height:50px; width:90px; font-weight:bold;" value="GATE 6"/></a>
		<a href="gate1out.php"><input type="submit" name="main" style="height:50px; width:90px; font-weight:bold;" value="EXIT"/></a>
		</td>
		</tr>
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
<?php if ($msg == 'Gate 1 is full')
{
?>
	<div id="gate1full">
<?php }
else
{
?>
<?php
}
?>
 <?php
  require_once("scan/gate1.php");?>
</body>
</html>

<?php
	unset($_SESSION['message']['type']);
	unset($_SESSION['message']['content']);
?>