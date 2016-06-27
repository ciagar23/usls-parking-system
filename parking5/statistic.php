<?php
if (!session_start) {
	exit;
}
	include ("library/config.php");
	checkUser();
	
	$graph   = (isset($_GET['graph']) && $_GET['graph'] != '') ? $_GET['graph'] : '';
	$page   = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
	$load   = (isset($_GET['load']) && $_GET['load'] != '') ? $_GET['load'] : '';
	$uid	= (isset($_GET['uid']) && $_GET['uid'] != '') ? $_GET['uid'] : '';
	$cid	= (isset($_GET['cid']) && $_GET['cid'] != '') ? $_GET['cid'] : '0';
	$sid	= (isset($_GET['sid']) && $_GET['sid'] != '') ? $_GET['sid'] : '0';
	$year   = (isset($_GET['year']) && $_GET['year'] != '') ? $_GET['year'] : date('Y');
	$year2 = $year + 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>USLS | Parking Management System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style3.css" title="style" />
  <script language="javascript" type="text/javascript" src="js/script.js"></script>
  <script language="javascript" type="text/javascript" src="js/time.js"></script>
  <link rel="stylesheet" type="text/css" href="css/CalendarControl.css" title="style" />
  <script language="javascript" type="text/javascript" src="js/CalendarControl.js"></script>
  <script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
  </script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="start.php">University Of St. La Salle<br>
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="logo_colour">Parking Management System</span></a></h1>
		  
        </div>
		<div id="image">
		<img src="images/logo copy.png" height="150px" width="150px"/>
		</div>
      </div>
      <div id="menubar">
        <ul id="menu">
			<?php echo menuList('app');?>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
	  <h4 align="right"><a href="system/logout.php">Log Out</a></h4>
	  <h3>
			Welcome!&nbsp;<?php
				if(isset($_SESSION['user']['user_name'])){ echo
				$_SESSION['user']['user_name'];}?></li>
		</h3>
		</div>
      <div id="content">
        <?php
		if((isset($_SESSION['message']['type']) && $_SESSION['message']['type'] != '') 
		&& isset($_SESSION['message']['content']) && $_SESSION['message']['content'] != '')
		{
		?>
			<div class="<?php echo $_SESSION['message']['type'];?>" id="message_box">
				<?php echo $_SESSION['message']['content'];?>
			</div>
			
		<?php
		}
		?>
		
		

        <form name="form" id="form">
          <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
            <option value="">select</option>
            <option value="statistic.php?graph=violation">Violations</option>
            <option value="statistic.php?graph=scan">Annual Number of Entries</option>
          </select>
        </form>


	
        
 	<?php
		
		if($graph == 'violation')
		{
		?>
		
		        <form name="form2" id="form2">
          <select name="jumpMenu2" id="jumpMenu2" onchange="MM_jumpMenu('parent',this,0)">
            <option value="">select school year</option>
            <option value="statistic.php?graph=violation&amp;year=2012">2012-2013</option>
            <option value="statistic.php?graph=violation&amp;year=2013">2013-2014</option>
            <option value="statistic.php?graph=violation&amp;year=2014">2014-2015</option>
            <option value="statistic.php?graph=violation&amp;year=2015">2014-2015</option>
          </select>
        </form>
		
		<?php
		
		

$RD1 = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Reckless Driving' and violist_dt_added >='$year-06-01' and violist_dt_added <='$year-10-31'"));


$total1 = $PRA1 + $BTD1 + $DP1 + $WP1 + $VPS1 + $RD1;

if ($total1 !=0)
{//start if total

$PPRA1 = ($PRA1 * 100)/$total1;
$PBTD1 = ($BTD1 * 100)/$total1;
$PDP1 = ($DP1 * 100)/$total1;
$PWP1 = ($WP1 * 100)/$total1;
$PVPS1 = ($VPS1 * 100)/$total1;
$PRD1 = ($RD1 * 100)/$total1;



?>       

<table align="center" border="1">
<tr>
<td>
		<tr>
			<td colspan="2"><b>
					<h1>Statistics for Violations (first sem): <?php echo $total1;?></h1>
			</b></td>
		<tr>		<tr>
			<td><b>
					<img src="images/pra.jpg"> Parking on reserved Area: <?php echo $PRA1;?><br>
					<img src="images/btd.jpg"> Blocking the Driveway: <?php echo $BTD1;?><br>
	    <img src="images/dp.jpg"> Double Parking: <?php echo $DP1;?><br>
				<td>	<img src="images/wp.jpg"> Wrong Parking: <?php echo $WP1;?><br>
					<img src="images/vps.jpg"> Violating the Parking Sign: <?php echo $VPS1;?><br>
					<img src="images/rd.jpg"> Reckless Driving: <?php echo $RD1;?><br>
                    
		<tr>
<td colspan="2" align="center">


<img src="<?php echo WEB_ROOT; ?>admin/statistic/pie.php?data=<?php echo $PRA1;?>*<?php echo $BTD1;?>*<?php echo $DP1;?>*<?php echo $WP1;?>*<?php echo $VPS1;?>*<?php echo $RD1;?>&label=Parking on reserved Area*Blocking the Driveway*Double Parking*Wrong Parking*Violating the Parking Sign*Reckless Driving" />
<?php

//end if total

 }
else
{
echo 'Pie graph cannot be made. no records found for first sem';
}?>


</table>

<br>



<?php




$PRA2 = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Parking on Reserved Area' and violist_dt_added >='$year-11-01' and violist_dt_added <='$year2-03-31'"));
$BTD2 = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Blocking the Driveway' and violist_dt_added >='$year-11-01' and violist_dt_added <='$year2-03-31'"));
$DP2 = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Double Parking' and violist_dt_added >='$year-11-01' and violist_dt_added <='$year2-03-31'"));
$WP2 = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Wrong Parking' and violist_dt_added >='$year-11-01' and violist_dt_added <='$year2-03-31'"));
$VPS2 = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Violating the ParKing Sign' and violist_dt_added >='$year-11-01' and violist_dt_added <='$year2-03-31'"));
$RD2 = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Reckless Driving' and violist_dt_added >='$year-11-01' and violist_dt_added <='$year2-03-31'"));


$total2 = $PRA2 + $BTD2 + $DP2 + $WP2 + $VPS2 + $RD2;

if ($total2 !=0)
{//start if total



$PPRA2 = ($PRA2 * 100)/$total2;
$PBTD2 = ($BTD2 * 100)/$total2;
$PDP2 = ($DP2 * 100)/$total2;
$PWP2 = ($WP2 * 100)/$total2;
$PVPS2 = ($VPS2 * 100)/$total2;
$PRD2 = ($RD2 * 100)/$total2;

?>




<table id="tbl_formheader">
<tr>
<td>
		<tr>
			<td colspan="2"><b>
					<h1>Statistics for Violations (second sem) <?php echo $total2;?></h1>
			</b></td>
		<tr>		<tr>
			<td><b>
					<img src="images/pra.jpg"> Parking on reserved Area: <?php echo $PRA2;?><br>
					<img src="images/btd.jpg"> Blocking the Driveway: <?php echo $BTD2;?><br>
					<img src="images/dp.jpg"> Double Parking: <?php echo $DP2;?><br>
				<td>	<img src="images/wp.jpg"> Wrong Parking: <?php echo $WP2;?><br>
					<img src="images/vps.jpg"> Violating the Parking Sign: <?php echo $VPS2;?><br>
					<img src="images/rd.jpg"> Reckless Driving: <?php echo $RD2;?><br>
                    
		<tr>
<td colspan="2"><img src="pie.php?data=<?php echo $PRA2;?>*<?php echo $BTD2;?>*<?php echo $DP2;?>*<?php echo $WP2;?>*<?php echo $VPS2;?>*<?php echo $RD2;?>&label=Parking on reserved Area*Blocking the Driveway*Double Parking*Wrong Parking*Violating the Parking Sign*Reckless Driving" />
</table>
<?php //end if total

 }
else
{
echo 'Pie graph cannot be made. no records found for second sem';
}?>


<br>
<br>
<br>
<br>
<br>
<br>









<?php


}
else
{


$first = mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_dt_added >= '$year-06-01' and scan_dt_added <='$year-10-31'"));
$second = mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_dt_added >= '$year-11-01' and scan_dt_added <='$year2-03-31'"));



$total = mysql_num_rows(mysql_query("SELECT * FROM tbl_scan where scan_dt_added >= '$year-01-01' and scan_dt_added <='$year-12-31'"));




?>
<table>
<tr>
<td><h1>Number of entries for the year: <?php echo $year.'-'.$year2;?></h1>
<br> First Semister Entries: <font color='red'><?php echo $first;?></font>
<br> Second Semister Entries: <font color='red'><?php echo $second;?></font>
<br> Total Entries: <font color='red'><?php echo $total;?></font>
<tr>
<tr>
<td><br>Search Year		        <form name="form2" id="form2">
          <select name="jumpMenu2" id="jumpMenu2" onchange="MM_jumpMenu('parent',this,0)">
            <option value="">select school year</option>
            <option value="statistic.php?year=2012">2012-2013</option>
            <option value="statistic.php?year=2013">2013-2014</option>
            <option value="statistic.php?year=2014">2014-2015</option>
            <option value="statistic.php?year=2015">2014-2015</option>
          </select>
        </form>
<tr>
<td>

<?php 
if ($total != 0)
{ ?>


<img src="bar.php?first=<?php echo $first;?>&second=<?php echo $second;?>" width=550>



<?php 
}
else
{

echo 'No Records found in '.$year;

}




}//get condition end
?>

</table>

<?php
	unset($_SESSION['message']['type']);
	unset($_SESSION['message']['content']);
?>
		
		
		
		
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DEMENTORS 
    </div>
  </div>
</html>

<?php
	unset($_SESSION['message']['type']);
	unset($_SESSION['message']['content']);
?>