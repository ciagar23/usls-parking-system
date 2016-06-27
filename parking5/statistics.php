<?php

include ("library/config.php");

$PRA = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Parking on Reserved Area'"));
$BTD = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Blocking the Driveway'"));
$DP = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Double Parking'"));
$WP = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Wrong Parking'"));
$VPS = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Violating the ParKing Sign'"));
$RD = mysql_num_rows(mysql_query("SELECT * FROM tbl_violist where violation_desc = 'Reckless Driving'"));


$total = $PRA + $BTD + $DP + $WP + $VPS + $RD;

$PPRA = ($PRA * 100)/$total;
$PBTD = ($BTD * 100)/$total;
$PDP = ($DP * 100)/$total;
$PWP = ($WP * 100)/$total;
$PVPS = ($VPS * 100)/$total;
$PRD = ($RD * 100)/$total;

if ($PPRA >= 50)
{ 
$G1 = 'red';
}
else
{
$G1 ='green';
}
if ($PBTD >= 50){ $G2 ='red';}else{$G2 ='blue';}
if ($PDP >= 50){ $G3 ='red';}else{$G3 ='#0099CC';}
if ($PWP >= 50){ $G4 ='red';}else{$G4 ='#0099CC';}
if ($PVPS >= 50){ $G5 ='red';}else{$G5 ='#0099CC';}
if ($PRD >= 50){ $G6 ='red';}else{$G6 ='#0099CC';}

?>
<head>
<title>Statistics</title>
 </head>
<body>
 
<img src="pie.php?data=<?php echo $PRA;?>*<?php echo $BTD;?>*<?php echo $DP;?>*<?php echo $WP;?>*<?php echo $VPS;?>*<?php echo $RD;?>&label=Parking on reserved Area*Blocking the Driveway*Double Parking*Wrong Parking*Violating the Parking Sign*Reckless Driving" />

</body>
</html>

<?php
	unset($_SESSION['message']['type']);
	unset($_SESSION['message']['content']);
?>