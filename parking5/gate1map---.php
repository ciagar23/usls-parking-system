
  
  <?php



include ("library/config.php");

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A01' AND lot_status='1'")) == 1)
{
$A01 = 'parklot1.png';
}
else
{
$A01 = 'availlot1.png';
}


if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A02' AND lot_status='1'")) == 1)
{
$A02 = 'parklot1.png';
}
else
{
$A02 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A03' AND lot_status='1'")) == 1)
{
$A03 = 'parklot1.png';
}
else
{
$A03 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A04' AND lot_status='1'")) == 1)
{
$A04 = 'parklot1.png';
}
else
{
$A04 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A05' AND lot_status='1'")) == 1)
{
$A05 = 'parklot1.png';
}
else
{
$A05 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A06' AND lot_status='1'")) == 1)
{
$A06 = 'parklot1.png';
}
else
{
$A06 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A07' AND lot_status='1'")) == 1)
{
$A07 = 'parklot1.png';
}
else
{
$A07 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A08' AND lot_status='1'")) == 1)
{
$A08 = 'parklot1.png';
}
else
{
$A08 = 'availlot1.png';
}


if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A09' AND lot_status='1'")) == 1)
{
$A09 = 'parklot1.png';
}
else
{
$A09 = 'availlot1.png';
}


if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A10' AND lot_status='1'")) == 1)
{
$A10 = 'parklot1.png';
}
else
{
$A10 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A11' AND lot_status='1'")) == 1)
{
$A11 = 'parklot1.png';
}
else
{
$A11 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A12' AND lot_status='1'")) == 1)
{
$A12 = 'parklot1.png';
}
else
{
$A12 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A13' AND lot_status='1'")) == 1)
{
$A13 = 'parklot1.png';
}
else
{
$A13 = 'availlot1.png';
}

if (mysql_num_rows(mysql_query("SELECT * FROM tbl_lots where lot_code='A14' AND lot_status='1'")) == 1)
{
$A14 = 'parklot1.png';
}
else
{
$A14 = 'availlot1.png';
}




//==========================================================
	$msg   = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '';
	$page   = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
	$load   = (isset($_GET['load']) && $_GET['load'] != '') ? $_GET['load'] : '';
	$uid	= (isset($_GET['uid']) && $_GET['uid'] != '') ? $_GET['uid'] : '';
	$cid	= (isset($_GET['cid']) && $_GET['cid'] != '') ? $_GET['cid'] : '0';
	$sid	= (isset($_GET['sid']) && $_GET['sid'] != '') ? $_GET['sid'] : '0';
	$id 	= (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
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


 <style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:48px;
	top:443px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:139px;
	top:151px;
	width:37px;
	height:39px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:157px;
	top:142px;
	width:25px;
	height:37px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:106px;
	top:169px;
	width:37px;
	height:39px;
	z-index:1;
}
#apDiv5 {
	position:absolute;
	left:124px;
	top:159px;
	width:37px;
	height:39px;
	z-index:1;
}
#apDiv6 {
	position:absolute;
	left:89px;
	top:176px;
	width:37px;
	height:39px;
	z-index:1;
}
#apDiv7 {
	position:absolute;
	left:73px;
	top:184px;
	width:37px;
	height:39px;
	z-index:1;
}
#apDiv8 {
	position:absolute;
	left:57px;
	top:191px;
	width:37px;
	height:39px;
	z-index:1;
}
#apDiv9 {
	position:absolute;
	left:41px;
	top:199px;
	width:37px;
	height:39px;
	z-index:1;
}
#apDiv10 {
	position:absolute;
	left:24px;
	top:207px;
	width:37px;
	height:39px;
	z-index:1;
}
#apDiv11 {
	position:absolute;
	left:67px;
	top:443px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv12 {
	position:absolute;
	left:87px;
	top:444px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv13 {
	position:absolute;
	left:118px;
	top:444px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv14 {
	position:absolute;
	left:137px;
	top:444px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv15 {
	position:absolute;
	left:156px;
	top:444px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv16 {
	position:absolute;
	left:207px;
	top:443px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv17 {
	position:absolute;
	left:226px;
	top:443px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv18 {
	position:absolute;
	left:245px;
	top:444px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv19 {
	position:absolute;
	left:277px;
	top:444px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv20 {
	position:absolute;
	left:295px;
	top:443px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv21 {
	position:absolute;
	left:314px;
	top:444px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv22 {
	position:absolute;
	left:344px;
	top:444px;
	width:15px;
	height:27px;
	z-index:1;
}
#apDiv23 {
	position:absolute;
	left:363px;
	top:444px;
	width:15px;
	height:27px;
	z-index:1;
}
-->
  </style> 
</head>
<body onLoad="document.form1.scan.focus();">

<div id="scan">

				<tr>
					<td>
					<a href="index.php?load=home"><input type="submit" name="main" style="height:30px; width:70px; font-weight:bold;" value="HOME"/></a>
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
						<input type="text" name="scan" size="30"/>
					</td>
				</tr>
                <tr>
                <td align="center" colspan="2"><font color=red> <?php echo $msg;?></font>
                </tr>
				</table>
				</form>
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
	<div id="gate1">
    	<div id="apDiv1"><img src="gate1/<?php echo $A01;?>" alt="a" width="14" height="24" /></div>
		<div id="apDiv2"><img src="gate1/availlotleft.png" alt="a" width="26" height="31" /></div>
		<div id="apDiv3"><img src="gate1/availlotleft.png" alt="a" width="26" height="31" /></div>
	  <div id="apDiv4"><img src="gate1/availlotleft.png" alt="a" width="26" height="31" /></div>
	  <div id="apDiv5"><img src="gate1/availlotleft.png" alt="a" width="26" height="31" /></div>
	  <div id="apDiv6"><img src="gate1/availlotleft.png" alt="a" width="26" height="31" /></div>
	  <div id="apDiv7"><img src="gate1/availlotleft.png" alt="a" width="26" height="31" /></div>
	  <div id="apDiv8"><img src="gate1/availlotleft.png" alt="a" width="26" height="31" /></div>
	  <div id="apDiv9"><img src="gate1/availlotleft.png" alt="a" width="26" height="31" /></div>
	  <div id="apDiv10"><img src="gate1/availlotleft.png" alt="a" width="26" height="31" /></div>
	  <div id="apDiv11"><img src="gate1/<?php echo $A02;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv12"><img src="gate1/<?php echo $A03;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv13"><img src="gate1/<?php echo $A04;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv14"><img src="gate1/<?php echo $A05;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv15"><img src="gate1/<?php echo $A06;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv16"><img src="gate1/<?php echo $A07;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv17"><img src="gate1/<?php echo $A08;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv18"><img src="gate1/<?php echo $A09;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv19"><img src="gate1/<?php echo $A10;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv20"><img src="gate1/<?php echo $A11;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv21"><img src="gate1/<?php echo $A12;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv22"><img src="gate1/<?php echo $A13;?>" alt="a" width="14" height="24" /></div>
	  <div id="apDiv23"><img src="gate1/<?php echo $A14;?>" alt="a" width="14" height="24" /></div>
	</div>
</body>
</html>

<?php
	unset($_SESSION['message']['type']);
	unset($_SESSION['message']['content']);
?>