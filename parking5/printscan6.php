<?php

include ("library/config.php");



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
 <link rel="stylesheet" type="text/css" href="gate1/map.css" title="style" />
 <link rel="stylesheet" type="text/css" href="css/style2.css" title="style" />
 
 <body>
<table id="tbl_form" align="left">
<tr>
	<td>
	<!-- Markup starts here-->
		<table id="tbl_holder">
		
		<tr>
			<td id="data_holder">
			<?php		
			$scan = '0';
			$scan = getScanLotInfo($cid);
			
			foreach($scan as $value){
			
			?>
			<table id="tbl_client">
			<td class="client_label">
					Date Added
					</td>
					<td class="client_value">
					<?php echo $value['scan_dt_added'];?>
					</td>
				</tr>
				<td class="client_label">
					Time Added
					</td>
					<td class="client_value">
					<?php echo $value['scan_tm_added'];?>
					</td>
				</tr>
				<tr>
					<td class="client_label">
					ID Number
					</td>
					<td class="client_value_id">
					<?php echo $value['client_id'];?>	
					</td>
				</tr>
                <tr>
				<td class="client_label">
					Parking Lot Number
					</td>
					<td class="client_value_lot">
					<?php echo $value['scan_lot'];?>
					</td>
				</tr>
				<?php
				}
				?>
				</table>
			</td>
		</tr>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
</table>
<script language="javascript">

 window.print()
window.close()
window.location ='gate6scan.php?page=scan&load=option&cid=<?php echo $cid;?>';



</script> 
